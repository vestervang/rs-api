<?php
/**
 * Created by PhpStorm.
 * User: frederikthomsen
 * Date: 06/01/2018
 * Time: 10.47
 */

namespace vestervang\rsApi\RS3\Stats;

use vestervang\rsApi\RS3\Skills\SkillRepository;

class StatsRepository
{
    private $stats;
    private $statCount = 0;

    public function __construct($feed)
    {
        $this->stats     = $this->createRepo($feed);
        $this->statCount = count($this->stats);
    }

    private function createRepo($feed)
    {
        $stats  = [];
        $skills = new SkillRepository();

        $exploded = explode(PHP_EOL, $feed);

        $spliced = array_splice($exploded, 0, $skills->count());

        for ($id = 0; $id < count($spliced); $id++) {

            list($rank, $level, $experience) = explode(',', $spliced[$id]);
            $skill = $skills->getSkill($id);
            array_push($stats, new Stat($skill, $level, $rank, $experience));
        }

        return $stats;
    }

    /**
     * @param $identifier
     *
     * @return Stat|null
     */
    public function getStat($identifier)
    {
        if (is_null($this->stats)) {
            //Throw exception maybe?
            return null;
        }

        if (is_int($identifier)) {
            return $this->getStatById($identifier);
        }

        //Default to string identifier (the is_string returns the wrong result!)
        return $this->getStatByName(strtolower($identifier));


        return null;
    }

    public function getStats()
    {
        return $this->stats;
    }

    public function getCount()
    {
        return $this->statCount;

    }

    public function getStatById($id)
    {
        if (isset($this->stats[$id])) {
            return $this->stats[$id];
        }

        return null;
    }

    public function getStatByName($name)
    {
        foreach ($this->stats as $stat) {

            if ($stat->getSkill()->getName() == $name) {
                return $stat;
            }
        }

        return null;
    }
}