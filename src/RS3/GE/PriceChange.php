<?php
/**
 * Created by PhpStorm.
 * User: frederikthomsen
 * Date: 06/01/2018
 * Time: 21.07
 */

namespace vestervang\rsapi\RS3\GE;

class PriceChange{

	public $trend;
	public $change;
	public $price;
	
	public function __construct($oldPrice, $newPrice){
		
		$difference = $newPrice - $oldPrice;
		
		$percentageDifference = ($difference / $oldPrice) * 100;
		
		$this->price = ($difference < 0) ? (string)$difference : '+'. $difference;
		$this->trend = ($newPrice > $oldPrice) ? 'Positive' : 'Negative' ;
		$this->change = $percentageDifference;
	}
	
	
}