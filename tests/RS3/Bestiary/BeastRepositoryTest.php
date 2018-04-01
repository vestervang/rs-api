<?php
/**
 * Created by PhpStorm.
 * User: frederikthomsen
 * Date: 3/27/18
 * Time: 8:50 PM
 */

class BeastRepositoryTest extends \PHPUnit\Framework\TestCase
{
	
	protected $singleBeastFullInfo = '{"magic":1,"slayercat":"Hellhounds","defence":66,"level":92,"description":"Hello, nice doggy...","areas":["Forinthry Dungeon","RuneScape Surface","Taverley Dungeon","Ancient cavern","Ardougne underground"],"poisonous":false,"weakness":"Slashing","size":2,"ranged":1,"attack":66,"members":false,"animations":{"death":17347,"attack":17348},"name":"Hellhound","xp":"344.4","lifepoints":3300,"id":49,"aggressive":false,"attackable":true}';
	protected $multipleBeasts = '[{"label":"Sheep","value":43},{"label":"Cow (4)","value":81},{"label":"Cow (4)","value":397},{"label":"Sheep","value":1763},{"label":"Sheep","value":3579},{"label":"Sheep","value":5162},{"label":"Sheep","value":5163},{"label":"Cow (4)","value":20969},{"label":"Cow (4)","value":20970},{"label":"Cow (4)","value":20971},{"label":"Golden sheep","value":1271},{"label":"Golden sheep","value":1272},{"label":"Undead cow (4)","value":1691},{"label":"Plague cow","value":1998},{"label":"Plague cow","value":1999},{"label":"Cow calf (1)","value":2310},{"label":"Sheepdog","value":2311},{"label":"Golden sheep","value":5172},{"label":"Golden sheep","value":5173},{"label":"Unicow (57)","value":5603},{"label":"Zombie cow (1)","value":18597},{"label":"Zombie cow (1)","value":20928},{"label":"Cow calf (1)","value":20979},{"label":"Super Cow (5)","value":21497},{"label":"Dairy cow","value":22418},{"label":"Armoured cow thing (62)","value":5986},{"label":"Armoured cow thing (62)","value":6048},{"label":"Cowardly Bandit","value":1886},{"label":"Coward in armour (82)","value":5097},{"label":"Coward with bow (105)","value":6049}]';
	
	public function testAddBeast(){
		
		$repo = new \vestervang\rsApi\RS3\Bestiary\BeastRepository($this->singleBeastFullInfo);
		
		$beastDataFull = json_decode($this->singleBeastFullInfo);
		
		$beastFull = new \vestervang\rsApi\RS3\Bestiary\Beast(
			$beastDataFull->id,
			$beastDataFull->magic,
			$beastDataFull->slayercat,
			$beastDataFull->defence,
			$beastDataFull->level,
			$beastDataFull->description,
			$beastDataFull->areas,
			$beastDataFull->poisonous,
			$beastDataFull->weakness,
			$beastDataFull->size,
			$beastDataFull->ranged,
			$beastDataFull->attack,
			$beastDataFull->members,
			$beastDataFull->animations,
			$beastDataFull->name,
			$beastDataFull->xp,
			$beastDataFull->lifepoints,
			$beastDataFull->aggressive,
			$beastDataFull->attackable
		);
		
		$this->assertEquals($beastFull, $repo->getById(49));
	
	}
	
	public function testCount(){
		
		$repo = new \vestervang\rsApi\RS3\Bestiary\BeastRepository($this->multipleBeasts);
		
		$this->assertEquals(30, $repo->count());
	}
	
	public function testAddBeasts(){
		$beasts = (string)'[{"label":"Sheep","value":1763},{"label":"Plague cow","value":1999},{"label":"Armoured cow thing (62)","value":6048},{"label":"Cowardly Bandit","value":1886},{"label":"Coward in armour (82)","value":5097},{"label":"Coward with bow (105)","value":6049}]';
		
		$repo = new \vestervang\rsApi\RS3\Bestiary\BeastRepository($beasts);
		
		$this->assertEquals(6, $repo->count());
	}
	
	public function testGetById(){
		$beastsJson = '[{"label":"Sheep","value":1763},{"label":"Plague cow","value":1999},{"label":"Armoured cow thing (62)","value":6048},{"label":"Cowardly Bandit","value":1886},{"label":"Coward in armour (82)","value":5097},{"label":"Coward with bow (105)","value":6049}]';
		$beasts = json_decode($beastsJson);
		
		$repo = new \vestervang\rsApi\RS3\Bestiary\BeastRepository($beastsJson);
		
		$this->assertEquals(new \vestervang\rsApi\RS3\Bestiary\Beast(
			$beasts[0]->value,
			null,
			null,
			null,
			null,
			null,
			null,
			null,
			null,
			null,
			null,
			null,
			null,
			null,
			$beasts[0]->label,
			null,
			null,
			null,
			null
		), $repo->getById(1763));
		
		$this->assertEquals(new \vestervang\rsApi\RS3\Bestiary\Beast(
			$beasts[1]->value,
			null,
			null,
			null,
			null,
			null,
			null,
			null,
			null,
			null,
			null,
			null,
			null,
			null,
			$beasts[1]->label,
			null,
			null,
			null,
			null
		), $repo->getById(1999));
		
		$this->assertEquals(new \vestervang\rsApi\RS3\Bestiary\Beast(
			$beasts[5]->value,
			null,
			null,
			null,
			null,
			null,
			null,
			null,
			null,
			null,
			null,
			null,
			null,
			null,
			$beasts[5]->label,
			null,
			null,
			null,
			null
		), $repo->getById(6049));
	}
	
	public function testGetByName(){
		$beastsJson = '[{"label":"Sheep","value":1763},{"label":"Plague cow","value":1999},{"label":"Armoured cow thing (62)","value":6048},{"label":"Cowardly Bandit","value":1886},{"label":"Coward in armour (82)","value":5097},{"label":"Coward with bow (105)","value":6049}]';
		$beasts = json_decode($beastsJson);
		
		$repo = new \vestervang\rsApi\RS3\Bestiary\BeastRepository($beastsJson);
		
		$this->assertEquals(new \vestervang\rsApi\RS3\Bestiary\Beast(
			$beasts[0]->value,
			null,
			null,
			null,
			null,
			null,
			null,
			null,
			null,
			null,
			null,
			null,
			null,
			null,
			$beasts[0]->label,
			null,
			null,
			null,
			null
		), $repo->getByName('Sheep'));
		
		$this->assertEquals(new \vestervang\rsApi\RS3\Bestiary\Beast(
			$beasts[1]->value,
			null,
			null,
			null,
			null,
			null,
			null,
			null,
			null,
			null,
			null,
			null,
			null,
			null,
			$beasts[1]->label,
			null,
			null,
			null,
			null
		), $repo->getByName('Plague cow'));
		
		$this->assertEquals(new \vestervang\rsApi\RS3\Bestiary\Beast(
			$beasts[5]->value,
			null,
			null,
			null,
			null,
			null,
			null,
			null,
			null,
			null,
			null,
			null,
			null,
			null,
			$beasts[5]->label,
			null,
			null,
			null,
			null
		), $repo->getByName('Coward with bow (105)'));
	}
	
	public function testGetBeast(){
		$beastsJson = '[{"label":"Sheep","value":1763},{"label":"Plague cow","value":1999},{"label":"Armoured cow thing (62)","value":6048},{"label":"Cowardly Bandit","value":1886},{"label":"Coward in armour (82)","value":5097},{"label":"Coward with bow (105)","value":6049}]';
		$beasts = json_decode($beastsJson);
		
		$repo = new \vestervang\rsApi\RS3\Bestiary\BeastRepository($beastsJson);
		
		$this->assertEquals(new \vestervang\rsApi\RS3\Bestiary\Beast(
			$beasts[0]->value,
			null,
			null,
			null,
			null,
			null,
			null,
			null,
			null,
			null,
			null,
			null,
			null,
			null,
			$beasts[0]->label,
			null,
			null,
			null,
			null
		), $repo->getBeast(1763));
		
		$this->assertEquals(new \vestervang\rsApi\RS3\Bestiary\Beast(
			$beasts[1]->value,
			null,
			null,
			null,
			null,
			null,
			null,
			null,
			null,
			null,
			null,
			null,
			null,
			null,
			$beasts[1]->label,
			null,
			null,
			null,
			null
		), $repo->getBeast('Plague cow'));
		
		$this->assertEquals(null, $repo->getBeast(11));
		$this->assertEquals(null, $repo->getBeast('Coward with bow (105)fdw'));
	}
}