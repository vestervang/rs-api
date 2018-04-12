<?php
/**
 * Created by PhpStorm.
 * User: frederikthomsen
 * Date: 3/18/18
 * Time: 2:02 PM
 */

namespace vestervang\rsApi\RS3\Bestiary;


class BeastRepository
{
    private $beasts = [];

    public function __construct($feed = null)
    {
        $data = json_decode($feed);

        if (is_array($data)) {
            $this->addBeasts($data);
        }

        if (is_object($data)) {
            $this->addBeast($data);
        }
    }

    /**
     * @param $data
     */
    public function addBeast($data)
    {
        $id             = @(isset($data->value) ? $data->value : $data->id);
        $magic          = property_exists($data, 'magic') ? $data->magic : null;
        $slayerCategory = property_exists($data, 'slayercat') ? $data->slayercat : null;
        $defence        = property_exists($data, 'defence') ? $data->defence : null;
        $level          = property_exists($data, 'level') ? $data->level : null;
        $description    = property_exists($data, 'description') ? $data->description : null;
        $areas          = property_exists($data, 'areas') ? $data->areas : null;
        $poisonous      = property_exists($data, 'poisonous') ? $data->poisonous : null;
        $weakness       = property_exists($data, 'weakness') ? $data->weakness : null;
        $size           = property_exists($data, 'size') ? $data->size : null;
        $ranged         = property_exists($data, 'ranged') ? $data->ranged : null;
        $attack         = property_exists($data, 'attack') ? $data->attack : null;
        $member         = property_exists($data, 'members') ? $data->members : null;
        $animationIds   = property_exists($data, 'animations') ? $data->animations : null;
        $name           = (isset($data->label) ? $data->label : $data->name);
        $xp             = property_exists($data, 'xp') ? $data->xp : null;
        $lifepoints     = property_exists($data, 'lifepoints') ? $data->lifepoints : null;
        $aggressive     = property_exists($data, 'aggressive') ? $data->aggressive : null;
        $attackable     = property_exists($data, 'attackable') ? $data->attackable : null;

        $this->beasts[$id] = new Beast($id, $magic, $slayerCategory, $defence, $level, $description, $areas, $poisonous, $weakness, $size, $ranged, $attack, $member, $animationIds, $name, $xp, $lifepoints, $aggressive, $attackable);
    }

    /**
     * @param $data
     */
    public function addBeasts($data)
    {
        foreach ($data as $beast) {
            $this->addBeast($beast);
        }
    }

    /**
     * @param $identifier
     *
     * @return Beast|null
     */
    public function getBeast($identifier)
    {

        if (is_int($identifier)) {
            return $this->getById($identifier);
        }

        return $this->getByName($identifier);
    }

    /**
     * @param $id
     *
     * @return Beast|null
     */
    public function getById($id)
    {

        foreach ($this->beasts as $beast) {
            if ($beast->getId() == $id) {
                return $beast;
            }
        }

        return null;
    }

    /**
     * @param $name
     *
     * @return Beast|null
     */
    public function getByName($name)
    {
        $name = strtolower($name);

        foreach ($this->beasts as $beast) {

            if (strtolower($beast->getName()) == $name) {
                return $beast;
            }
        }

        return null;
    }

    /**
     * @return array
     */
    public function getBeasts()
    {
        return $this->beasts;
    }

    /**
     * @return int
     */
    public function count()
    {
        return count($this->beasts);
    }
}