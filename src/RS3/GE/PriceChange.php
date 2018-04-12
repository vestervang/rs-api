<?php
/**
 * Created by PhpStorm.
 * User: frederikthomsen
 * Date: 06/01/2018
 * Time: 21.07
 */

namespace vestervang\rsapi\RS3\GE;

class PriceChange
{

    protected $trend;
    protected $percentageChange;
    protected $change;
    protected $price;

    public function __construct($oldPrice, $newPrice)
    {

        $difference = $newPrice - $oldPrice;

        $percentageDifference = ($difference / $oldPrice) * 100;

        $this->change           = $difference;
        $this->trend            = ($newPrice > $oldPrice) ? 'Positive' : 'Negative';
        $this->percentageChange = $percentageDifference;
        $this->price            = $newPrice;
    }

    public function getTrend()
    {
        return $this->trend;
    }

    public function getPercentageChange()
    {
        return $this->percentageChange;
    }

    public function getPrice()
    {
        return $this->price;
    }

    public function getChange()
    {
        return $this->change;
    }
}