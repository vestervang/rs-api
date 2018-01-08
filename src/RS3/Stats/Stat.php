<?php
/**
 * Created by PhpStorm.
 * User: frederik
 * Date: 14/10/2017
 * Time: 16.23
 */

namespace vestervang\rsApi\RS3\Stats;

use vestervang\rsApi\RS3\Stats\IStat;

class Stat implements IStat
{
    protected $skill;
    protected $level;
    protected $rank;
    protected $experience;


    public function __construct($skill, $level, $rank, $experience)
    {
        $this->skill = $skill;
        $this->level = $level;
        $this->rank = $rank;
        $this->experience = $experience;
    }

    public function getSkill()
    {
        return $this->skill;
    }

    public function getLevel()
    {
        return $this->level;
    }

    public function getRank()
    {
        return $this->rank;
    }

    public function getExperience()
    {
        return $this->experience;
    }
}