<?php
/**
 * Created by PhpStorm.
 * User: frederikthomsen
 * Date: 06/01/2018
 * Time: 13.11
 */

namespace vestervang\rsApi\RS3\GE;

use vestervang\rsApi\RS3\GE\Price;
use vestervang\rsApi\RS3\GE\PriceHistory;

class Item
{

    /**
     * @var string
     */
    protected $icon;

    /**
     * @var string
     */
    protected $iconLarge;

    /**
     * @var int
     */
    protected $id;

    /**
     * @var string
     */
    protected $type;

    /**
     * @var string
     */
    protected $typeIcon;

    /**
     * @var string
     */
    protected $name;

    /**
     * @var \vestervang\rsApi\RS3\GE\Price
     */
    protected $price;

    /**
     * @var \vestervang\rsApi\RS3\GE\PriceHistory
     */
    protected $history;

    public function __construct($icon, $iconLarge, $id, $type, $typeIcon, $name, $price, $priceHistory)
    {

        $this->icon      = $icon;
        $this->iconLarge = $iconLarge;
        $this->id        = $id;
        $this->type      = $type;
        $this->typeIcon  = $typeIcon;
        $this->name      = $name;
        $this->price     = new Price($price);
        $this->history   = new PriceHistory($priceHistory);
    }

    /**
     * @return string
     */
    public function getIcon()
    {
        return $this->icon;
    }

    /**
     * @return string
     */
    public function getIconLarge()
    {
        return $this->iconLarge;
    }

    /**
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @return string
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * @return string
     */
    public function getTypeIcon()
    {
        return $this->typeIcon;
    }

    /**
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @return \vestervang\rsApi\RS3\GE\Price
     */
    public function getPrice()
    {
        return $this->price;
    }

    /**
     * @return \vestervang\rsApi\RS3\GE\PriceHistory
     */
    public function getHistory()
    {
        return $this->history;
    }
}