<?php
/**
 * Created by PhpStorm.
 * User: frederikthomsen
 * Date: 3/17/18
 * Time: 1:02 PM
 */

class StrengthTest extends \PHPUnit\Framework\TestCase {
	
	public function testGetId(){
		$skill = new \vestervang\rsApi\RS3\Skills\Strength();
		
		$this->assertSame(3, $skill->getId());
	}
	
	public function testGetName(){
		$skill = new \vestervang\rsApi\RS3\Skills\Strength();
		
		$this->assertSame('strength', $skill->getName());
	}
	
	public function testGetMaximumExperience(){
		$skill = new \vestervang\rsApi\RS3\Skills\Strength();
		
		$this->assertEquals(200000000, $skill->getMaximumExperience());
	}
	
	public function testGetMaximumLevel(){
		$skill = new \vestervang\rsApi\RS3\Skills\Strength();
		
		$this->assertSame(99, $skill->getMaximumLevel());
	}
	
	public function testIsCombat(){
		$skill = new \vestervang\rsApi\RS3\Skills\Strength();
		
		$this->assertTrue($skill->isCombat());
	}
	
	public function testIsMember(){
		$skill = new \vestervang\rsApi\RS3\Skills\Strength();
		
		$this->assertFalse($skill->isMembers());
	}
}