<?php
/**
 * Created by PhpStorm.
 * User: frederik
 * Date: 08/10/2017
 * Time: 21.34
 */

namespace vestervang\rsApi\RS3\Skills;

final class Summoning extends Skill
{

    /**
     * @var int
     */
    protected $id = 24;

    /**
     * @var string
     */
    protected $name = 'summoning';

    /**
     * @var int
     */
    protected $maximumExperience = 200000000;

    /**
     * @var int
     */
    protected $maximumLevel = 99;

    /**
     * @var bool
     */
    protected $isCombat = true;

    /**
     * @var bool
     */
    protected $isMembers = true;
}