<?php
/**
 * Created by PhpStorm.
 * User: frederik
 * Date: 08/10/2017
 * Time: 21.34
 */

namespace vestervang\rsApi\RS3\Skills;

final class Total extends Skill
{

    /**
     * @var int
     */
    protected $id = 0;

    /**
     * @var string
     */
    protected $name = 'total';

    /**
     * @var int
     */
    protected $maximumExperience = 5400000000;

    /**
     * @var int
     */
    protected $maximumLevel = 2736;

    /**
     * @var bool
     */
    protected $isCombat = false;

    /**
     * @var bool
     */
    protected $isMembers = false;
}