<?php
/**
 * Created by PhpStorm.
 * User: frederikthomsen
 * Date: 3/17/18
 * Time: 2:09 PM
 */

class SkillRepositoryTest extends \PHPUnit\Framework\TestCase
{

    public function testGetById()
    {

        $repo = new vestervang\rsApi\RS3\Skills\SkillRepository();

        $this->assertInstanceOf(\vestervang\rsApi\RS3\Skills\Total::class, $repo->getById(0));
        $this->assertInstanceOf(\vestervang\rsApi\RS3\Skills\Attack::class, $repo->getById(1));
        $this->assertInstanceOf(\vestervang\rsApi\RS3\Skills\Defence::class, $repo->getById(2));
        $this->assertInstanceOf(\vestervang\rsApi\RS3\Skills\Strength::class, $repo->getById(3));
        $this->assertInstanceOf(\vestervang\rsApi\RS3\Skills\Constitution::class, $repo->getById(4));
        $this->assertInstanceOf(\vestervang\rsApi\RS3\Skills\Ranged::class, $repo->getById(5));
        $this->assertInstanceOf(\vestervang\rsApi\RS3\Skills\Prayer::class, $repo->getById(6));
        $this->assertInstanceOf(\vestervang\rsApi\RS3\Skills\Magic::class, $repo->getById(7));
        $this->assertInstanceOf(\vestervang\rsApi\RS3\Skills\Cooking::class, $repo->getById(8));
        $this->assertInstanceOf(\vestervang\rsApi\RS3\Skills\Woodcutting::class, $repo->getById(9));
        $this->assertInstanceOf(\vestervang\rsApi\RS3\Skills\Fletching::class, $repo->getById(10));
        $this->assertInstanceOf(\vestervang\rsApi\RS3\Skills\Fishing::class, $repo->getById(11));
        $this->assertInstanceOf(\vestervang\rsApi\RS3\Skills\Firemaking::class, $repo->getById(12));
        $this->assertInstanceOf(\vestervang\rsApi\RS3\Skills\Crafting::class, $repo->getById(13));
        $this->assertInstanceOf(\vestervang\rsApi\RS3\Skills\Smithing::class, $repo->getById(14));
        $this->assertInstanceOf(\vestervang\rsApi\RS3\Skills\Mining::class, $repo->getById(15));
        $this->assertInstanceOf(\vestervang\rsApi\RS3\Skills\Herblore::class, $repo->getById(16));
        $this->assertInstanceOf(\vestervang\rsApi\RS3\Skills\Agility::class, $repo->getById(17));
        $this->assertInstanceOf(\vestervang\rsApi\RS3\Skills\Thieving::class, $repo->getById(18));
        $this->assertInstanceOf(\vestervang\rsApi\RS3\Skills\Slayer::class, $repo->getById(19));
        $this->assertInstanceOf(\vestervang\rsApi\RS3\Skills\Farming::class, $repo->getById(20));
        $this->assertInstanceOf(\vestervang\rsApi\RS3\Skills\Runecrafting::class, $repo->getById(21));
        $this->assertInstanceOf(\vestervang\rsApi\RS3\Skills\Hunter::class, $repo->getById(22));
        $this->assertInstanceOf(\vestervang\rsApi\RS3\Skills\Construction::class, $repo->getById(23));
        $this->assertInstanceOf(\vestervang\rsApi\RS3\Skills\Summoning::class, $repo->getById(24));
        $this->assertInstanceOf(\vestervang\rsApi\RS3\Skills\Dungeoneering::class, $repo->getById(25));
        $this->assertInstanceOf(\vestervang\rsApi\RS3\Skills\Divination::class, $repo->getById(26));
        $this->assertInstanceOf(\vestervang\rsApi\RS3\Skills\Invention::class, $repo->getById(27));

        $this->assertEquals(null, $repo->getById(-1));
    }

    public function testGetByName()
    {

        $repo = new vestervang\rsApi\RS3\Skills\SkillRepository();

        $this->assertInstanceOf(\vestervang\rsApi\RS3\Skills\Total::class, $repo->getByName('total'));
        $this->assertInstanceOf(\vestervang\rsApi\RS3\Skills\Attack::class, $repo->getByName('attack'));
        $this->assertInstanceOf(\vestervang\rsApi\RS3\Skills\Defence::class, $repo->getByName('defence'));
        $this->assertInstanceOf(\vestervang\rsApi\RS3\Skills\Strength::class, $repo->getByName('strength'));
        $this->assertInstanceOf(\vestervang\rsApi\RS3\Skills\Constitution::class, $repo->getByName('constitution'));
        $this->assertInstanceOf(\vestervang\rsApi\RS3\Skills\Ranged::class, $repo->getByName('ranged'));
        $this->assertInstanceOf(\vestervang\rsApi\RS3\Skills\Prayer::class, $repo->getByName('prayer'));
        $this->assertInstanceOf(\vestervang\rsApi\RS3\Skills\Magic::class, $repo->getByName('magic'));
        $this->assertInstanceOf(\vestervang\rsApi\RS3\Skills\Cooking::class, $repo->getByName('cooking'));
        $this->assertInstanceOf(\vestervang\rsApi\RS3\Skills\Woodcutting::class, $repo->getByName('woodcutting'));
        $this->assertInstanceOf(\vestervang\rsApi\RS3\Skills\Fletching::class, $repo->getByName('fletching'));
        $this->assertInstanceOf(\vestervang\rsApi\RS3\Skills\Fishing::class, $repo->getByName('fishing'));
        $this->assertInstanceOf(\vestervang\rsApi\RS3\Skills\Firemaking::class, $repo->getByName('firemaking'));
        $this->assertInstanceOf(\vestervang\rsApi\RS3\Skills\Crafting::class, $repo->getByName('crafting'));
        $this->assertInstanceOf(\vestervang\rsApi\RS3\Skills\Smithing::class, $repo->getByName('smithing'));
        $this->assertInstanceOf(\vestervang\rsApi\RS3\Skills\Mining::class, $repo->getByName('mining'));
        $this->assertInstanceOf(\vestervang\rsApi\RS3\Skills\Herblore::class, $repo->getByName('herblore'));
        $this->assertInstanceOf(\vestervang\rsApi\RS3\Skills\Agility::class, $repo->getByName('agility'));
        $this->assertInstanceOf(\vestervang\rsApi\RS3\Skills\Thieving::class, $repo->getByName('thieving'));
        $this->assertInstanceOf(\vestervang\rsApi\RS3\Skills\Slayer::class, $repo->getByName('slayer'));
        $this->assertInstanceOf(\vestervang\rsApi\RS3\Skills\Farming::class, $repo->getByName('farming'));
        $this->assertInstanceOf(\vestervang\rsApi\RS3\Skills\Runecrafting::class, $repo->getByName('runecrafting'));
        $this->assertInstanceOf(\vestervang\rsApi\RS3\Skills\Hunter::class, $repo->getByName('hunter'));
        $this->assertInstanceOf(\vestervang\rsApi\RS3\Skills\Construction::class, $repo->getByName('construction'));
        $this->assertInstanceOf(\vestervang\rsApi\RS3\Skills\Summoning::class, $repo->getByName('summoning'));
        $this->assertInstanceOf(\vestervang\rsApi\RS3\Skills\Dungeoneering::class, $repo->getByName('dungeoneering'));
        $this->assertInstanceOf(\vestervang\rsApi\RS3\Skills\Divination::class, $repo->getByName('divination'));
        $this->assertInstanceOf(\vestervang\rsApi\RS3\Skills\Invention::class, $repo->getByName('invention'));

    }

    public function testGetSkill()
    {

        $repo = new vestervang\rsApi\RS3\Skills\SkillRepository();

        $this->assertInstanceOf(\vestervang\rsApi\RS3\Skills\Total::class, $repo->getSkill('total'));
        $this->assertInstanceOf(\vestervang\rsApi\RS3\Skills\Total::class, $repo->getSkill(0));

        $this->assertInstanceOf(\vestervang\rsApi\RS3\Skills\Attack::class, $repo->getSkill('attack'));
        $this->assertInstanceOf(\vestervang\rsApi\RS3\Skills\Attack::class, $repo->getSkill(1));

        $this->assertInstanceOf(\vestervang\rsApi\RS3\Skills\Defence::class, $repo->getSkill('defence'));
        $this->assertInstanceOf(\vestervang\rsApi\RS3\Skills\Defence::class, $repo->getSkill(2));

        $this->assertInstanceOf(\vestervang\rsApi\RS3\Skills\Strength::class, $repo->getSkill('strength'));
        $this->assertInstanceOf(\vestervang\rsApi\RS3\Skills\Strength::class, $repo->getSkill(3));

        $this->assertInstanceOf(\vestervang\rsApi\RS3\Skills\Constitution::class, $repo->getSkill('constitution'));
        $this->assertInstanceOf(\vestervang\rsApi\RS3\Skills\Constitution::class, $repo->getSkill(4));

        $this->assertInstanceOf(\vestervang\rsApi\RS3\Skills\Ranged::class, $repo->getSkill('ranged'));
        $this->assertInstanceOf(\vestervang\rsApi\RS3\Skills\Ranged::class, $repo->getSkill(5));

        $this->assertInstanceOf(\vestervang\rsApi\RS3\Skills\Prayer::class, $repo->getSkill('prayer'));
        $this->assertInstanceOf(\vestervang\rsApi\RS3\Skills\Prayer::class, $repo->getSkill(6));

        $this->assertInstanceOf(\vestervang\rsApi\RS3\Skills\Magic::class, $repo->getSkill('magic'));
        $this->assertInstanceOf(\vestervang\rsApi\RS3\Skills\Magic::class, $repo->getSkill(7));

        $this->assertInstanceOf(\vestervang\rsApi\RS3\Skills\Cooking::class, $repo->getSkill('cooking'));
        $this->assertInstanceOf(\vestervang\rsApi\RS3\Skills\Cooking::class, $repo->getSkill(8));

        $this->assertInstanceOf(\vestervang\rsApi\RS3\Skills\Woodcutting::class, $repo->getSkill('woodcutting'));
        $this->assertInstanceOf(\vestervang\rsApi\RS3\Skills\Woodcutting::class, $repo->getSkill(9));

        $this->assertInstanceOf(\vestervang\rsApi\RS3\Skills\Fletching::class, $repo->getSkill('fletching'));
        $this->assertInstanceOf(\vestervang\rsApi\RS3\Skills\Fletching::class, $repo->getSkill(10));

        $this->assertInstanceOf(\vestervang\rsApi\RS3\Skills\Fishing::class, $repo->getSkill('fishing'));
        $this->assertInstanceOf(\vestervang\rsApi\RS3\Skills\Fishing::class, $repo->getSkill(11));

        $this->assertInstanceOf(\vestervang\rsApi\RS3\Skills\Firemaking::class, $repo->getSkill('firemaking'));
        $this->assertInstanceOf(\vestervang\rsApi\RS3\Skills\Firemaking::class, $repo->getSkill(12));

        $this->assertInstanceOf(\vestervang\rsApi\RS3\Skills\Crafting::class, $repo->getSkill('crafting'));
        $this->assertInstanceOf(\vestervang\rsApi\RS3\Skills\Crafting::class, $repo->getSkill(13));

        $this->assertInstanceOf(\vestervang\rsApi\RS3\Skills\Smithing::class, $repo->getSkill('smithing'));
        $this->assertInstanceOf(\vestervang\rsApi\RS3\Skills\Smithing::class, $repo->getSkill(14));

        $this->assertInstanceOf(\vestervang\rsApi\RS3\Skills\Mining::class, $repo->getSkill('mining'));
        $this->assertInstanceOf(\vestervang\rsApi\RS3\Skills\Mining::class, $repo->getSkill(15));

        $this->assertInstanceOf(\vestervang\rsApi\RS3\Skills\Herblore::class, $repo->getSkill('herblore'));
        $this->assertInstanceOf(\vestervang\rsApi\RS3\Skills\Herblore::class, $repo->getSkill(16));

        $this->assertInstanceOf(\vestervang\rsApi\RS3\Skills\Agility::class, $repo->getSkill('agility'));
        $this->assertInstanceOf(\vestervang\rsApi\RS3\Skills\Agility::class, $repo->getSkill(17));

        $this->assertInstanceOf(\vestervang\rsApi\RS3\Skills\Thieving::class, $repo->getSkill('thieving'));
        $this->assertInstanceOf(\vestervang\rsApi\RS3\Skills\Thieving::class, $repo->getSkill(18));

        $this->assertInstanceOf(\vestervang\rsApi\RS3\Skills\Slayer::class, $repo->getSkill('slayer'));
        $this->assertInstanceOf(\vestervang\rsApi\RS3\Skills\Slayer::class, $repo->getSkill(19));

        $this->assertInstanceOf(\vestervang\rsApi\RS3\Skills\Farming::class, $repo->getSkill('farming'));
        $this->assertInstanceOf(\vestervang\rsApi\RS3\Skills\Farming::class, $repo->getSkill(20));

        $this->assertInstanceOf(\vestervang\rsApi\RS3\Skills\Runecrafting::class, $repo->getSkill('runecrafting'));
        $this->assertInstanceOf(\vestervang\rsApi\RS3\Skills\Runecrafting::class, $repo->getSkill(21));

        $this->assertInstanceOf(\vestervang\rsApi\RS3\Skills\Hunter::class, $repo->getSkill('hunter'));
        $this->assertInstanceOf(\vestervang\rsApi\RS3\Skills\Hunter::class, $repo->getSkill(22));

        $this->assertInstanceOf(\vestervang\rsApi\RS3\Skills\Construction::class, $repo->getSkill('construction'));
        $this->assertInstanceOf(\vestervang\rsApi\RS3\Skills\Construction::class, $repo->getSkill(23));

        $this->assertInstanceOf(\vestervang\rsApi\RS3\Skills\Summoning::class, $repo->getSkill('summoning'));
        $this->assertInstanceOf(\vestervang\rsApi\RS3\Skills\Summoning::class, $repo->getSkill(24));

        $this->assertInstanceOf(\vestervang\rsApi\RS3\Skills\Dungeoneering::class, $repo->getSkill('dungeoneering'));
        $this->assertInstanceOf(\vestervang\rsApi\RS3\Skills\Dungeoneering::class, $repo->getSkill(25));

        $this->assertInstanceOf(\vestervang\rsApi\RS3\Skills\Divination::class, $repo->getSkill('divination'));
        $this->assertInstanceOf(\vestervang\rsApi\RS3\Skills\Divination::class, $repo->getSkill(26));

        $this->assertInstanceOf(\vestervang\rsApi\RS3\Skills\Invention::class, $repo->getSkill('invention'));
        $this->assertInstanceOf(\vestervang\rsApi\RS3\Skills\Invention::class, $repo->getSkill(27));

        $this->assertEquals(null, $repo->getSkill('some skill'));
        $this->assertEquals(null, $repo->getSkill(-1));
    }

    public function testCount()
    {
        $repo = new vestervang\rsApi\RS3\Skills\SkillRepository();

        $this->assertEquals(28, $repo->count());

    }
}
