<?php
/**
 * Created by PhpStorm.
 * User: frederikthomsen
 * Date: 3/27/18
 * Time: 8:02 PM
 */


class BeastTest extends \PHPUnit\Framework\TestCase{
	
	protected $singleBeastFullInfo = '{"magic":1,"slayercat":"Hellhounds","defence":66,"level":92,"description":"Hello, nice doggy...","areas":["Forinthry Dungeon","RuneScape Surface","Taverley Dungeon","Ancient cavern","Ardougne underground"],"poisonous":false,"weakness":"Slashing","size":2,"ranged":1,"attack":66,"members":false,"animations":{"death":17347,"attack":17348},"name":"Hellhound","xp":"344.4","lifepoints":3300,"id":49,"aggressive":false,"attackable":true}';
	protected $singleBeastLittleInfo = '{"label":"Sheep","value":43}';
//	protected $multipleBeasts = '[{"label":"Sheep","value":43},{"label":"Cow (4)","value":81},{"label":"Cow (4)","value":397},{"label":"Sheep","value":1763},{"label":"Sheep","value":3579},{"label":"Sheep","value":5162},{"label":"Sheep","value":5163},{"label":"Cow (4)","value":20969},{"label":"Cow (4)","value":20970},{"label":"Cow (4)","value":20971},{"label":"Golden sheep","value":1271},{"label":"Golden sheep","value":1272},{"label":"Undead cow (4)","value":1691},{"label":"Plague cow","value":1998},{"label":"Plague cow","value":1999},{"label":"Cow calf (1)","value":2310},{"label":"Sheepdog","value":2311},{"label":"Golden sheep","value":5172},{"label":"Golden sheep","value":5173},{"label":"Unicow (57)","value":5603},{"label":"Zombie cow (1)","value":18597},{"label":"Zombie cow (1)","value":20928},{"label":"Cow calf (1)","value":20979},{"label":"Super Cow (5)","value":21497},{"label":"Dairy cow","value":22418},{"label":"Armoured cow thing (62)","value":5986},{"label":"Armoured cow thing (62)","value":6048},{"label":"Cowardly Bandit","value":1886},{"label":"Coward in armour (82)","value":5097},{"label":"Coward with bow (105)","value":6049}]';
	
	public function testConstructor(){
		
		$beastDataFull = json_decode($this->singleBeastFullInfo);
		
		$lockedBeastFull = new \vestervang\rsApi\RS3\Bestiary\Beast(
			49,
			1,
			'Hellhounds',
			66,
			92,
			'Hello, nice doggy...',
			[
				'Forinthry Dungeon',
				'RuneScape Surface',
				'Taverley Dungeon',
				'Ancient cavern',
				'Ardougne underground'
			],
			false,
			'Slashing',
			2,
			1,
			66,
			false,
			(object)[
				'death' => 17347,
				'attack' => 17348
			],
			'Hellhound',
			'344.4',
			3300,
			false,
			true
		);
		
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
		
		$this->assertEquals($lockedBeastFull, $beastFull);
		
		
		$beastDataLittle = json_decode($this->singleBeastLittleInfo);
		
		$lockedBeastLittle = new \vestervang\rsApi\RS3\Bestiary\Beast(
			43,
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
			'Sheep',
			null,
			null,
			null,
			null
		);
		
		$beastLittle = new \vestervang\rsApi\RS3\Bestiary\Beast(
			$beastDataLittle->value,
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
			$beastDataLittle->label,
			null,
			null,
			null,
			null
		);
		
		$this->assertEquals($lockedBeastLittle, $beastLittle);
	}
	
	public function testGetId(){
		
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
		
		$this->assertEquals(49, $beastFull->getId());
		
		
		$beastDataLittle = json_decode($this->singleBeastLittleInfo);
		
		$beastLittle = new \vestervang\rsApi\RS3\Bestiary\Beast(
			$beastDataLittle->value,
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
			$beastDataLittle->label,
			null,
			null,
			null,
			null
		);
		
		$this->assertEquals(43, $beastLittle->getId());
	}
	
	public function testGetMagicLevel(){
		
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
		
		$this->assertEquals(1, $beastFull->getMagicLevel());
		
		
		$beastDataLittle = json_decode($this->singleBeastLittleInfo);
		
		$beastLittle = new \vestervang\rsApi\RS3\Bestiary\Beast(
			$beastDataLittle->value,
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
			$beastDataLittle->label,
			null,
			null,
			null,
			null
		);
		
		$this->assertEquals(null, $beastLittle->getMagicLevel());
		
	}
	
	public function testGetSlayerCategory(){
		
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
		
		$this->assertEquals('Hellhounds', $beastFull->getSlayerCategory());
		
		
		$beastDataLittle = json_decode($this->singleBeastLittleInfo);
		
		$beastLittle = new \vestervang\rsApi\RS3\Bestiary\Beast(
			$beastDataLittle->value,
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
			$beastDataLittle->label,
			null,
			null,
			null,
			null
		);
		
		$this->assertEquals(null, $beastLittle->getSlayerCategory());
	}
	
	public function testGetDefence(){
		
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
		
		$this->assertEquals(66, $beastFull->getDefence());
		
		
		$beastDataLittle = json_decode($this->singleBeastLittleInfo);
		
		$beastLittle = new \vestervang\rsApi\RS3\Bestiary\Beast(
			$beastDataLittle->value,
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
			$beastDataLittle->label,
			null,
			null,
			null,
			null
		);
		
		$this->assertEquals(null, $beastLittle->getDefence());
	}
	
	public function testGetLevel(){
		
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
		
		$this->assertEquals(92, $beastFull->getLevel());
		
		
		$beastDataLittle = json_decode($this->singleBeastLittleInfo);
		
		$beastLittle = new \vestervang\rsApi\RS3\Bestiary\Beast(
			$beastDataLittle->value,
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
			$beastDataLittle->label,
			null,
			null,
			null,
			null
		);
		
		$this->assertEquals(null, $beastLittle->getLevel());
	}
	
	public function testGetDescription(){
		
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
		
		$this->assertEquals('Hello, nice doggy...', $beastFull->getDescription());
		
		
		$beastDataLittle = json_decode($this->singleBeastLittleInfo);
		
		$beastLittle = new \vestervang\rsApi\RS3\Bestiary\Beast(
			$beastDataLittle->value,
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
			$beastDataLittle->label,
			null,
			null,
			null,
			null
		);
		
		$this->assertEquals(null, $beastLittle->getDescription());
	}
	
	public function testGetAreas(){
		
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
		
		$this->assertEquals(['Forinthry Dungeon', 'RuneScape Surface', 'Taverley Dungeon', 'Ancient cavern', 'Ardougne underground'], $beastFull->getAreas());
		
		
		$beastDataLittle = json_decode($this->singleBeastLittleInfo);
		
		$beastLittle = new \vestervang\rsApi\RS3\Bestiary\Beast(
			$beastDataLittle->value,
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
			$beastDataLittle->label,
			null,
			null,
			null,
			null
		);
		
		$this->assertEquals(null, $beastLittle->getAreas());
	}
	
	public function testGetPoisonous(){
		
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
		
		$this->assertEquals(false, $beastFull->getPoisonous());
		
		
		$beastDataLittle = json_decode($this->singleBeastLittleInfo);
		
		$beastLittle = new \vestervang\rsApi\RS3\Bestiary\Beast(
			$beastDataLittle->value,
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
			$beastDataLittle->label,
			null,
			null,
			null,
			null
		);
		
		$this->assertEquals(null, $beastLittle->getPoisonous());
	}
	
	public function testGetWeakness(){
		
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
		
		$this->assertEquals('Slashing', $beastFull->getWeakness());
		
		
		$beastDataLittle = json_decode($this->singleBeastLittleInfo);
		
		$beastLittle = new \vestervang\rsApi\RS3\Bestiary\Beast(
			$beastDataLittle->value,
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
			$beastDataLittle->label,
			null,
			null,
			null,
			null
		);
		
		$this->assertEquals(null, $beastLittle->getWeakness());
	}
	
	public function testGetSize(){
		
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
		
		$this->assertEquals(2, $beastFull->getSize());
		
		
		$beastDataLittle = json_decode($this->singleBeastLittleInfo);
		
		$beastLittle = new \vestervang\rsApi\RS3\Bestiary\Beast(
			$beastDataLittle->value,
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
			$beastDataLittle->label,
			null,
			null,
			null,
			null
		);
		
		$this->assertEquals(null, $beastLittle->getSize());
	}
	
	public function testGetRanged(){
		
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
		
		$this->assertEquals(1, $beastFull->getRanged());
		
		
		$beastDataLittle = json_decode($this->singleBeastLittleInfo);
		
		$beastLittle = new \vestervang\rsApi\RS3\Bestiary\Beast(
			$beastDataLittle->value,
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
			$beastDataLittle->label,
			null,
			null,
			null,
			null
		);
		
		$this->assertEquals(null, $beastLittle->getRanged());
	}
	
	public function testGetAttack(){
		
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
		
		$this->assertEquals(66, $beastFull->getAttack());
		
		
		$beastDataLittle = json_decode($this->singleBeastLittleInfo);
		
		$beastLittle = new \vestervang\rsApi\RS3\Bestiary\Beast(
			$beastDataLittle->value,
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
			$beastDataLittle->label,
			null,
			null,
			null,
			null
		);
		
		$this->assertEquals(null, $beastLittle->getAttack());
	}
	
	public function testGetMember(){
		
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
		
		$this->assertEquals(false, $beastFull->getMember());
		
		
		$beastDataLittle = json_decode($this->singleBeastLittleInfo);
		
		$beastLittle = new \vestervang\rsApi\RS3\Bestiary\Beast(
			$beastDataLittle->value,
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
			$beastDataLittle->label,
			null,
			null,
			null,
			null
		);
		
		$this->assertEquals(null, $beastLittle->getMember());
	}
	
	public function testGetAnimationIds(){
		
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
		
		$this->assertEquals((object)['death' => 17347, 'attack' => 17348], $beastFull->getAnimationIds());
		
		
		$beastDataLittle = json_decode($this->singleBeastLittleInfo);
		
		$beastLittle = new \vestervang\rsApi\RS3\Bestiary\Beast(
			$beastDataLittle->value,
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
			$beastDataLittle->label,
			null,
			null,
			null,
			null
		);
		
		$this->assertEquals(null, $beastLittle->getAnimationIds());
	}
	
	public function testGetName(){
		
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
		
		$this->assertEquals('Hellhound', $beastFull->getName());
		
		
		$beastDataLittle = json_decode($this->singleBeastLittleInfo);
		
		$beastLittle = new \vestervang\rsApi\RS3\Bestiary\Beast(
			$beastDataLittle->value,
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
			$beastDataLittle->label,
			null,
			null,
			null,
			null
		);
		
		$this->assertEquals('Sheep', $beastLittle->getName());
	}
	
	public function testGetXp(){
		
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
		
		$this->assertEquals('344.4', $beastFull->getXp());
		
		
		$beastDataLittle = json_decode($this->singleBeastLittleInfo);
		
		$beastLittle = new \vestervang\rsApi\RS3\Bestiary\Beast(
			$beastDataLittle->value,
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
			$beastDataLittle->label,
			null,
			null,
			null,
			null
		);
		
		$this->assertEquals(null, $beastLittle->getXp());
	}
	
	public function testGetLifepoints(){
		
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
		
		$this->assertEquals(3300, $beastFull->getLifepoints());
		
		
		$beastDataLittle = json_decode($this->singleBeastLittleInfo);
		
		$beastLittle = new \vestervang\rsApi\RS3\Bestiary\Beast(
			$beastDataLittle->value,
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
			$beastDataLittle->label,
			null,
			null,
			null,
			null
		);
		
		$this->assertEquals(null, $beastLittle->getLifepoints());
	}
	
	public function testGetAggressive(){
		
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
		
		$this->assertEquals(false, $beastFull->getAggressive());
		
		
		$beastDataLittle = json_decode($this->singleBeastLittleInfo);
		
		$beastLittle = new \vestervang\rsApi\RS3\Bestiary\Beast(
			$beastDataLittle->value,
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
			$beastDataLittle->label,
			null,
			null,
			null,
			null
		);
		
		$this->assertEquals(null, $beastLittle->getAggressive());
	}
	
	public function testGetAttackable(){
		
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
		
		$this->assertEquals(true, $beastFull->getAttackable());
		
		
		$beastDataLittle = json_decode($this->singleBeastLittleInfo);
		
		$beastLittle = new \vestervang\rsApi\RS3\Bestiary\Beast(
			$beastDataLittle->value,
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
			$beastDataLittle->label,
			null,
			null,
			null,
			null
		);
		
		$this->assertEquals(null, $beastLittle->getAttackable());
	}
}
