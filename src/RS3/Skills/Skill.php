<?php

namespace vestervang\rsApi\RS3\Skills;

abstract class Skill implements ISkill
{

    /**
     * @var int
     */
    protected $id;
    /**
     * @var string
     */
    protected $name;
    /**
     * @var int
     */
    protected $maximumExperience;
    /**
     * @var int
     */
    protected $maximumLevel;
    /**
     * @var boolean
     */
    protected $isCombat;
    /**
     * @var boolean
     */
    protected $isMembers;

    /**
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @return int
     */
    public function getMaximumExperience()
    {
        return $this->maximumExperience;
    }

    /**
     * @return int
     */
    public function getMaximumLevel()
    {
        return $this->maximumLevel;
    }

    /**
     * @return bool
     */
    public function isCombat()
    {
        return $this->isCombat;
    }

    /**
     * @return bool
     */
    public function isMembers()
    {
        return $this->isMembers;
    }
}