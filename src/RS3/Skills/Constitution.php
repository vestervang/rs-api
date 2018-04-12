<?php
/**
 * Created by PhpStorm.
 * User: frederik
 * Date: 08/10/2017
 * Time: 21.34
 */

namespace vestervang\rsApi\RS3\Skills;

final class Constitution extends Skill
{

    /**
     * @var int
     */
    protected $id = 4;

    /**
     * @var string
     */
    protected $name = 'constitution';

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
    protected $isMembers = false;
}