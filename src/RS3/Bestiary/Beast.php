<?php

namespace vestervang\rsApi\RS3\Bestiary;


/**
 * Class Monster
 * @package vestervang\rsApi\RS3\Bestiary
 */
class Beast implements IBeast
{
    /****************************************
     ****************************************
     *
     * Variables
     *
     ****************************************
     ****************************************/

    /**
     * @var int
     */
    protected $id;

    /**
     * @var int
     */
    protected $magic;

    /**
     * @var int
     */
    protected $slayerCategory;

    /**
     * @var int
     */
    protected $defence;

    /**
     * @var int
     */
    protected $level;

    /**
     * @var string
     */
    protected $description;

    /**
     * @var array
     */
    protected $areas;

    /**
     * @var boolean
     */
    protected $poisonous;

    /**
     * @var string
     */
    protected $weakness;

    /**
     * @var int
     */
    protected $size;

    /**
     * @var int
     */
    protected $ranged;

    /**
     * @var int
     */
    protected $attack;

    /**
     * @var boolean
     */
    protected $member;

    /**
     * @var array
     */
    protected $animationIds;

    /**
     * @var string
     */
    protected $name;

    /**
     * @var float
     */
    protected $xp;

    /**
     * @var int
     */
    protected $lifepoints;

    /**
     * @var boolean
     */
    protected $aggressive;

    /**
     * @var boolean
     */
    protected $attackable;

    /****************************************
     ****************************************
     *
     * Function
     *
     ****************************************
     ****************************************/

    public function __construct($id, $magic, $slayerCategory, $defence, $level, $description, $areas, $poisonous, $weakness, $size, $ranged, $attack, $member, $animationIds, $name, $xp, $lifepoints, $aggressive, $attackable)
    {

        $this->id             = $id;
        $this->magic          = $magic;
        $this->slayerCategory = $slayerCategory;
        $this->defence        = $defence;
        $this->level          = $level;
        $this->description    = $description;
        $this->areas          = $areas;
        $this->poisonous      = $poisonous;
        $this->weakness       = $weakness;
        $this->size           = $size;
        $this->ranged         = $ranged;
        $this->attack         = $attack;
        $this->member         = $member;
        $this->animationIds   = $animationIds;
        $this->name           = $name;
        $this->xp             = $xp;
        $this->lifepoints     = $lifepoints;
        $this->aggressive     = $aggressive;
        $this->attackable     = $attackable;
    }

    /****************************************
     ****************************************
     *
     * Getters and setters
     *
     ****************************************
     ****************************************/

    /**
     * @return int|void
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @return int|void
     */
    public function getMagicLevel()
    {
        return $this->magic;
    }

    /**
     * @return int|void
     */
    public function getSlayerCategory()
    {
        return $this->slayerCategory;
    }

    /**
     * @return int|void
     */
    public function getDefence()
    {
        return $this->defence;
    }

    /**
     * @return int|void
     */
    public function getLevel()
    {
        return $this->level;
    }

    /**
     * @return int|void
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * @return int|void
     */
    public function getAreas()
    {
        return $this->areas;
    }

    /**
     * @return int|void
     */
    public function getPoisonous()
    {
        return $this->poisonous;
    }

    /**
     * @return int|void
     */
    public function getWeakness()
    {
        return $this->weakness;
    }

    /**
     * @return int|void
     */
    public function getSize()
    {
        return $this->size;
    }

    /**
     * @return int|void
     */
    public function getRanged()
    {
        return $this->ranged;
    }

    /**
     * @return int|void
     */
    public function getAttack()
    {
        return $this->attack;
    }

    /**
     * @return int|void
     */
    public function getMember()
    {
        return $this->member;
    }

    /**
     * @return int|void
     */
    public function getAnimationIds()
    {
        return $this->animationIds;
    }

    /**
     * @return int|void
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @return int|void
     */
    public function getXp()
    {
        return $this->xp;
    }

    /**
     * @return int|void
     */
    public function getLifepoints()
    {
        return $this->lifepoints;
    }

    /**
     * @return int|void
     */
    public function getAggressive()
    {
        return $this->aggressive;
    }

    /**
     * @return int|void
     */
    public function getAttackable()
    {
        return $this->attackable;
    }
}