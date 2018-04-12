<?php

namespace vestervang\rsApi\RS3\Skills;

interface ISkill
{

    /**
     * @return int
     */
    public function getId();

    /**
     * @return string
     */
    public function getName();

    /**
     * @return int
     */
    public function getMaximumExperience();

    /**
     * @return int
     */
    public function getMaximumLevel();

    /**
     * @return boolean
     */
    public function isCombat();

    /**
     * @return boolean
     */
    public function isMembers();
}
