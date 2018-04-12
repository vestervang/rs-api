<?php
/**
 * Created by PhpStorm.
 * User: frederikthomsen
 * Date: 3/18/18
 * Time: 10:20 AM
 */

namespace vestervang\rsApi\RS3;

use GuzzleHttp\Client as Guzzle;
use vestervang\rsApi\RS3\Bestiary\BeastRepository;

class Bestiary
{
    protected $endpoints = [
        'id'     => 'http://services.runescape.com/m=itemdb_rs/bestiary/beastData.json?beastid=%d',
        'term'   => 'http://services.runescape.com/m=itemdb_rs/bestiary/beastSearch.json?term=%s',
        'level'  => 'http://services.runescape.com/m=itemdb_rs/bestiary/levelGroup.json?identifier=%s',
        'letter' => 'http://services.runescape.com/m=itemdb_rs/bestiary/bestiaryNames.json?letter=%s',
        'area'   => 'http://services.runescape.com/m=itemdb_rs/bestiary/areaBeasts.json?identifier=%s',
    ];

    protected $beastRepo;
    protected $guzzle;

    public function __construct()
    {
        $this->beastRepo = new BeastRepository();

        $this->guzzle = new Guzzle([
            'headers' => [
                'User-Agent' => 'Rs api'
            ]
        ]);
    }

    /**
     * @param      $id
     * @param bool $saveInRepo
     *
     * @return int|string
     * @throws \Exception
     */
    public function getBeastById($id, $saveInRepo = true)
    {
        $beastData = $this->sendRequest($this->endpoints['id'], $id);


        if ($saveInRepo) {
            $this->beastRepo->addBeast(json_decode($beastData));
        }

        return $beastData;
    }

    /**
     * @param      $term
     * @param bool $saveInRepo
     *
     * @return int|string
     * @throws \Exception
     */
    public function getBeastsByName($term, $saveInRepo = true)
    {
        $beastsData = $this->sendRequest($this->endpoints['term'], $term);

        if ($saveInRepo) {
            $this->beastRepo->addBeasts(json_decode($beastsData));
        }

        return $beastsData;
    }

    /**
     * @param      $levelSpan
     * @param bool $saveInRepo
     *
     * @return int|string
     * @throws \Exception
     */
    public function getBeastsByLevel($levelSpan, $saveInRepo = true)
    {
        $beastsData = $this->sendRequest($this->endpoints['level'], $levelSpan);

        if ($saveInRepo) {
            $this->beastRepo->addBeasts(json_decode($beastsData));
        }

        return $beastsData;
    }

    /**
     * @param      $letter
     * @param bool $saveInRepo
     *
     * @return int|string
     * @throws \Exception
     */
    public function getBeastsByLetter($letter, $saveInRepo = true)
    {
        $beastsData = $this->sendRequest($this->endpoints['letter'], strtoupper($letter));

        if ($saveInRepo) {
            $this->beastRepo->addBeasts(json_decode($beastsData));
        }

        return $beastsData;
    }

    /**
     * @param      $area
     * @param bool $saveInRepo
     *
     * @return int|string
     * @throws \Exception
     */
    public function getBeastsByArea($area, $saveInRepo = true)
    {
        $area = str_replace(' ', '+', $area);

        try {
            $beastsData = $this->sendRequest($this->endpoints['area'], $area);
        } catch (\Exception $e) {
            echo 'fmkdls';
        }


        if ($saveInRepo) {
            $this->beastRepo->addBeasts(json_decode($beastsData));
        }

        return $beastsData;
    }

    /**
     * @return BeastRepository
     */
    public function getBeastRepo()
    {
        return $this->beastRepo;
    }

    /**
     * @param $url
     * @param $param
     *
     * @return int|string
     * @throws \GuzzleHttp\Exception\GuzzleException
     * @throws \Exception
     */
    protected function sendRequest($url, $param)
    {
        $response      = null;
        $contentLength = null;

        try {
            $response = $this->guzzle->request('GET', sprintf($url, $param));

            $contentLength = $response->getHeader('Content-Length')[0];
        } catch (\Exception $e) {
            throw new \Exception('');
        }

        if ($contentLength == 0) {
            throw new \Exception('No content was returned');
        }

        $beastsData = $response->getBody()->getContents();

        return $beastsData;
    }
}
