<?php
/**
 * Created by PhpStorm.
 * User: frederik
 * Date: 10/10/2017
 * Time: 17.30
 */

namespace vestervang\rsApi\RS3;

use GuzzleHttp\Client as Guzzle;
use GuzzleHttp\Exception\RequestException;
use GuzzleHttp\Psr7\Request;
use vestervang\rsApi\RS3\Skills\SkillRepository;
use vestervang\rsApi\RS3\Stats\StatsRepository;

class Hiscore
{
    protected $endpoint = 'http://services.runescape.com/m=hiscore/index_lite.ws?player=%s';

    protected $skills;
    protected $guzzle;

    public function __construct()
    {

        $this->skills = new SkillRepository();
        $this->guzzle = new Guzzle([
            'headers' => [
                'User-Agent' => 'Rs api'
            ]
        ]);
    }

    /**
     * @param $rsn
     *
     * @return StatsRepository
     * @throws \GuzzleHttp\Exception\GuzzleException
     */
    public function getStats($rsn)
    {

        $result   = null;
        $response = null;

        try {
            $response = $this->guzzle->request('GET', sprintf($this->endpoint, $rsn));

        } catch (\Exception $e) {
            throw new \Exception('Pisse!');
        }

        return new StatsRepository($response->getBody()->getContents());
    }

    /**
     * @return SkillRepository
     */
    public function getSkills()
    {
        return $this->skills;
    }
}