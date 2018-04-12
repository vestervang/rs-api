<?php
/**
 * Created by PhpStorm.
 * User: frederikthomsen
 * Date: 3/17/18
 * Time: 1:02 PM
 */

class MagicTest extends \PHPUnit\Framework\TestCase
{

    public function testGetId()
    {
        $skill = new \vestervang\rsApi\RS3\Skills\Magic();

        $this->assertSame(7, $skill->getId());
    }

    public function testGetName()
    {
        $skill = new \vestervang\rsApi\RS3\Skills\Magic();

        $this->assertSame('magic', $skill->getName());
    }

    public function testGetMaximumExperience()
    {
        $skill = new \vestervang\rsApi\RS3\Skills\Magic();

        $this->assertEquals(200000000, $skill->getMaximumExperience());
    }

    public function testGetMaximumLevel()
    {
        $skill = new \vestervang\rsApi\RS3\Skills\Magic();

        $this->assertSame(99, $skill->getMaximumLevel());
    }

    public function testIsCombat()
    {
        $skill = new \vestervang\rsApi\RS3\Skills\Magic();

        $this->asserttrue($skill->isCombat());
    }

    public function testIsMember()
    {
        $skill = new \vestervang\rsApi\RS3\Skills\Magic();

        $this->assertFalse($skill->isMembers());
    }
}