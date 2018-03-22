<?php
/**
 * Created by PhpStorm.
 * User: frederikthomsen
 * Date: 06/01/2018
 * Time: 21.07
 */

namespace vestervang\rsapi\RS3\GE;

class PriceChange{

	protected $trend;
	protected $change;
	protected $price;
	
	public function __construct($oldPrice, $newPrice){
		
		$difference = $newPrice - $oldPrice;
		
		$percentageDifference = ($difference / $oldPrice) * 100;
		
		$this->price = ($difference < 0) ? (string)$difference : '+'. $difference;
		$this->trend = ($newPrice > $oldPrice) ? 'Positive' : 'Negative' ;
		$this->change = $percentageDifference;
	}
	
	public function getTrend(){
		return $this->trend;
	}
	
	public function getChange(){
		return $this->change;
	}
	
	public function getPrice(){
		return $this->price;
	}
	
	
}