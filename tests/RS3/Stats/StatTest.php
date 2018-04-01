<?php
/**
 * Created by PhpStorm.
 * User: frederikthomsen
 * Date: 3/26/18
 * Time: 8:24 PM
 */

class StatTest extends \PHPUnit\Framework\TestCase{
	
	public function testGetSkill(){
		
		$skill = new \vestervang\rsApi\RS3\Skills\Agility();
		$stat = new \vestervang\rsApi\RS3\Stats\Stat($skill, null, null, null);
		$this->assertEquals(new \vestervang\rsApi\RS3\Skills\Agility(), $stat->getSkill());
		
		$skill = new \vestervang\rsApi\RS3\Skills\Strength();
		$stat = new \vestervang\rsApi\RS3\Stats\Stat($skill, null, null, null);
		$this->assertEquals(new \vestervang\rsApi\RS3\Skills\Strength(), $stat->getSkill());
		
		$skill = new \vestervang\rsApi\RS3\Skills\Construction();
		$stat = new \vestervang\rsApi\RS3\Stats\Stat($skill, null, null, null);
		$this->assertEquals(new \vestervang\rsApi\RS3\Skills\Construction(), $stat->getSkill());
		
		$skill = new \vestervang\rsApi\RS3\Skills\Summoning();
		$stat = new \vestervang\rsApi\RS3\Stats\Stat($skill, null, null, null);
		$this->assertEquals(new \vestervang\rsApi\RS3\Skills\Summoning(), $stat->getSkill());
	}
	
	public function testGetLevel(){
		
		$level = 85;
		$stat = new \vestervang\rsApi\RS3\Stats\Stat(null, $level, null, null);
		$this->assertEquals(85, $stat->getLevel());
		
		$level = 73;
		$stat = new \vestervang\rsApi\RS3\Stats\Stat(null, $level, null, null);
		$this->assertEquals(73, $stat->getLevel());
		
		$level = 20;
		$stat = new \vestervang\rsApi\RS3\Stats\Stat(null, $level, null, null);
		$this->assertEquals(20, $stat->getLevel());
		
		$level = 64;
		$stat = new \vestervang\rsApi\RS3\Stats\Stat(null, $level, null, null);
		$this->assertEquals(64, $stat->getLevel());
	}
	
	public function testGetRank(){
	
		$rank = 546545;
		$stat = new \vestervang\rsApi\RS3\Stats\Stat(null, null, $rank, null);
		$this->assertEquals(546545, $stat->getRank());
		
		$rank = 84123156;
		$stat = new \vestervang\rsApi\RS3\Stats\Stat(null, null, $rank, null);
		$this->assertEquals(84123156, $stat->getRank());
		
		$rank = 5231783;
		$stat = new \vestervang\rsApi\RS3\Stats\Stat(null, null, $rank, null);
		$this->assertEquals(5231783, $stat->getRank());
		
		$rank = 711563456;
		$stat = new \vestervang\rsApi\RS3\Stats\Stat(null, null, $rank, null);
		$this->assertEquals(711563456, $stat->getRank());
	}
	
	public function testGetExperience(){
		
		$experience = 74694354897896;
		$stat = new \vestervang\rsApi\RS3\Stats\Stat(null, null, null, $experience);
		$this->assertEquals(74694354897896, $stat->getExperience());
		
		$experience = 3145489453156769;
		$stat = new \vestervang\rsApi\RS3\Stats\Stat(null, null, null, $experience);
		$this->assertEquals(3145489453156769, $stat->getExperience());
		
		$experience = 688453123486;
		$stat = new \vestervang\rsApi\RS3\Stats\Stat(null, null, null, $experience);
		$this->assertEquals(688453123486, $stat->getExperience());
		
		$experience = 8520231456456;
		$stat = new \vestervang\rsApi\RS3\Stats\Stat(null, null, null, $experience);
		$this->assertEquals(8520231456456, $stat->getExperience());
	}
}
