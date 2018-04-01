<?php
/**
 * Created by PhpStorm.
 * User: frederikthomsen
 * Date: 3/17/18
 * Time: 11:33 PM
 */

// Has to start with lowercase for some reason
class priceChangeTest extends \PHPUnit\Framework\TestCase{
	
	public function testPercentageChange(){
		$priceChange = new \vestervang\rsapi\RS3\GE\PriceChange(50, 100);
		$this->assertEquals(100, $priceChange->getPercentageChange());
		
		$priceChange = new \vestervang\rsapi\RS3\GE\PriceChange(50, 75);
		$this->assertEquals(50, $priceChange->getPercentageChange());
		
		$priceChange = new \vestervang\rsapi\RS3\GE\PriceChange(50, 25);
		$this->assertEquals(-50, $priceChange->getPercentageChange());
	}
	
	public function testTrend(){
		$priceChange = new \vestervang\rsapi\RS3\GE\PriceChange(50, 100);
		$this->assertEquals('Positive', $priceChange->getTrend());
		
		$priceChange = new \vestervang\rsapi\RS3\GE\PriceChange(50, 75);
		$this->assertEquals('Positive', $priceChange->getTrend());
		
		$priceChange = new \vestervang\rsapi\RS3\GE\PriceChange(50, 25);
		$this->assertEquals('Negative', $priceChange->getTrend());
	}
	
	public function testPrice(){
		$priceChange = new \vestervang\rsapi\RS3\GE\PriceChange(50, 100);
		$this->assertEquals(100, $priceChange->getPrice());
		
		$priceChange = new \vestervang\rsapi\RS3\GE\PriceChange(50, 75);
		$this->assertEquals(75, $priceChange->getPrice());
		
		$priceChange = new \vestervang\rsapi\RS3\GE\PriceChange(50, 25);
		$this->assertEquals(25, $priceChange->getPrice());
	}
	
	public function testChange(){
		$priceChange = new \vestervang\rsapi\RS3\GE\PriceChange(50, 100);
		$this->assertEquals(50, $priceChange->getChange());
		
		$priceChange = new \vestervang\rsapi\RS3\GE\PriceChange(50, 75);
		$this->assertEquals(25, $priceChange->getChange());
		
		$priceChange = new \vestervang\rsapi\RS3\GE\PriceChange(50, 25);
		$this->assertEquals(-25, $priceChange->getChange());
	}
}
