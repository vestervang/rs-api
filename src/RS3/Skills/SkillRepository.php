<?php
/**
 * Created by PhpStorm.
 * User: frederik
 * Date: 10/10/2017
 * Time: 17.39
 */

namespace vestervang\rsApi\RS3\Skills;


class SkillRepository
{
    protected $skills = [];

    public function __construct()
    {
        $this->skills = [
            new Total(),
            new Attack(),
            new Defence(),
            new Strength(),
            new Constitution(),
            new Ranged(),
            new Prayer(),
            new Magic(),
            new Cooking(),
            new Woodcutting(),
            new Fletching(),
            new Fishing(),
            new Firemaking(),
            new Crafting(),
            new Smithing(),
            new Mining(),
            new Herblore(),
            new Agility(),
            new Thieving(),
            new Slayer(),
            new Farming(),
            new Runecrafting(),
            new Hunter(),
            new Construction(),
            new Summoning(),
            new Dungeoneering(),
            new Divination(),
            new Invention(),
        ];
    }

    /**
     * @param $identifier
     *
     * @return Skill|null
     */
    public function getSkill($identifier)
    {
        if (is_int($identifier)) {
            return $this->getById($identifier);
        }

        return $this->getByName($identifier);
    }

    /**
     * @param $id
     *
     * @return Skill|null
     */
    public function getById($id)
    {
        foreach ($this->skills as $skill) {
            if ($skill->getId() == $id) {
                return $skill;
            }
        }

        return null;
    }

    /**
     * @param $name
     *
     * @return Skill|null
     */
    public function getByName($name)
    {
        $name = strtolower($name);

        foreach ($this->skills as $skill) {
            if ($skill->getName() == $name) {
                return $skill;
            }
        }

        return null;
    }

    /**
     * @return int
     */
    public function count()
    {
        return count($this->skills);
    }
}