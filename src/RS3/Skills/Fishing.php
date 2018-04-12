<?php
/**
 * Created by PhpStorm.
 * User: frederik
 * Date: 08/10/2017
 * Time: 21.34
 */

namespace vestervang\rsApi\RS3\Skills;

final class Fishing extends Skill
{

    /**
     * @var int
     */
    protected $id = 11;

    /**
     * @var string
     */
    protected $name = 'fishing';

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
    protected $isCombat = false;

    /**
     * @var bool
     */
    protected $isMembers = false;
}