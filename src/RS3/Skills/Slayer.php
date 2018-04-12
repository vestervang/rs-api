<?php
/**
 * Created by PhpStorm.
 * User: frederik
 * Date: 08/10/2017
 * Time: 21.34
 */

namespace vestervang\rsApi\RS3\Skills;

final class Slayer extends Skill
{

    /**
     * @var int
     */
    protected $id = 19;

    /**
     * @var string
     */
    protected $name = 'slayer';

    /**
     * @var int
     */
    protected $maximumExperience = 200000000;

    /**
     * @var int
     */
    protected $maximumLevel = 120;

    /**
     * @var bool
     */
    protected $isCombat = false;

    /**
     * @var bool
     */
    protected $isMembers = true;
}