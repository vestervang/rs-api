<?php
/**
 * Created by PhpStorm.
 * User: frederikthomsen
 * Date: 3/17/18
 * Time: 1:02 PM
 */

class CraftingTest extends \PHPUnit\Framework\TestCase
{

    public function testGetId()
    {
        $skill = new \vestervang\rsApi\RS3\Skills\Crafting();

        $this->assertSame(13, $skill->getId());
    }

    public function testGetName()
    {
        $skill = new \vestervang\rsApi\RS3\Skills\Crafting();

        $this->assertSame('crafting', $skill->getName());
    }

    public function testGetMaximumExperience()
    {
        $skill = new \vestervang\rsApi\RS3\Skills\Crafting();

        $this->assertEquals(200000000, $skill->getMaximumExperience());
    }

    public function testGetMaximumLevel()
    {
        $skill = new \vestervang\rsApi\RS3\Skills\Crafting();

        $this->assertSame(99, $skill->getMaximumLevel());
    }

    public function testIsCombat()
    {
        $skill = new \vestervang\rsApi\RS3\Skills\Crafting();

        $this->assertFalse($skill->isCombat());
    }

    public function testIsMember()
    {
        $skill = new \vestervang\rsApi\RS3\Skills\Crafting();

        $this->assertFalse($skill->isMembers());
    }
}