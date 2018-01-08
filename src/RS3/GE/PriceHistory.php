<?php
/**
 * Created by PhpStorm.
 * User: frederikthomsen
 * Date: 06/01/2018
 * Time: 19.19
 */

namespace vestervang\rsApi\RS3\GE;

class PriceHistory{
	public $today;
	public $day30;
	public $day60;
	public $day180;
	public $priceHistory;
	
	public function __construct($priceHistory){
		
		$daily = array_values(array_reverse((array)$priceHistory->daily));
		$average = array_values(array_reverse((array)$priceHistory->average));
		
		$this->priceHistory['daily'] = $daily;
		$this->priceHistory['average'] = $average;
		
		$this->today = $this->getDay1Difference();
		$this->day30 = $this->getDay30Difference();
		$this->day60 = $this->getDay60Difference();
		$this->day180 = $this->getDay180Difference();
	}
	
	protected function getDay1Difference(){
		return $this->getDifference(1, 2);
	}
	
	protected function getDay30Difference(){
		return $this->getDifference(1, 30);
	}
	
	protected function getDay60Difference(){
		return $this->getDifference(1, 60);
	}
	
	protected function getDay180Difference(){
		return $this->getDifference(1, 180);
	}
	
	protected function getDifference($day1, $day2){
		
		$day1DailyPrice = $this->priceHistory['daily'][$day1 - 1];
		$day2DailyPrice = $this->priceHistory['daily'][$day2 - 1];
		
		$day1AveragePrice = $this->priceHistory['average'][$day1 - 1];
		$day2AveragePrice = $this->priceHistory['average'][$day2 - 1];
		
		return [
			'daily' => new PriceChange($day2DailyPrice, $day1DailyPrice),
			'average' => new PriceChange($day2AveragePrice, $day1AveragePrice)
		];
	}
	
}