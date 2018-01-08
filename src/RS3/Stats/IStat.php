<?php
/**
 * Created by PhpStorm.
 * User: frederik
 * Date: 14/10/2017
 * Time: 16.23
 */

namespace vestervang\rsApi\RS3\Stats;

interface IStat
{
    /**
     * Returns the respective skill
     *
     * @return \vestervang\rsApi\RS3\Skills\Skill
     */
    public function getSkill();

    /**
     * Returns the players current level in the skill
     *
     * @return int
     */
    public function getLevel();

    /**
     * Returns the players current rank in the skill
     *
     * @return int
     */
    public function getRank();

    /**
     * Returns the players current experience in the skill
     *
     * @return int
     */
    public function getExperience();
}