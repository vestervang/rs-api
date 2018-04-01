<?php
/**
 * Created by PhpStorm.
 * User: frederikthomsen
 * Date: 3/17/18
 * Time: 7:15 PM
 */

class PriceTest extends \PHPUnit\Framework\TestCase{
	
	public function testConstructor(){
		
		$price = new \vestervang\rsApi\RS3\GE\Price(1000000);
		
		$this->assertEquals(1000000, $price->getPrice());
		$this->assertEquals('1m', $price->getRoundedPrice());
		
		
		$price = new \vestervang\rsApi\RS3\GE\Price(10000);
		
		$this->assertEquals(10000, $price->getPrice());
		$this->assertEquals('10k', $price->getRoundedPrice());
		
		
		$price = new \vestervang\rsApi\RS3\GE\Price(10);
		
		$this->assertEquals(10, $price->getPrice());
		$this->assertEquals(10, $price->getRoundedPrice());
	}
	
	public function testGetMultiplier(){
		
		$price = new \vestervang\rsApi\RS3\GE\Price();
		
		$this->assertEquals(1, $price->getMultiplier(100));
		
		$this->assertEquals(1000, $price->getMultiplier('10k'));
		
		$this->assertEquals(1000000, $price->getMultiplier('10m'));
		
	}

	public function testExpand(){
		
		$price = new \vestervang\rsApi\RS3\GE\Price();
		
		$this->assertEquals(11000, $price->expand('11k'));
		
		$this->assertEquals(1100000, $price->expand('1.1m'));
		
		$this->assertEquals(4130000, $price->expand('4.13m'));
		
		$this->assertEquals(4.13, $price->expand(4.13));
	}
	
	public function testShorten(){
		
		$price = new \vestervang\rsApi\RS3\GE\Price();
		
		$this->assertEquals(1, $price->shorten(1));
		
		$this->assertEquals(100, $price->shorten(100));
		
		$this->assertEquals('1k', $price->shorten(1000));
		
		$this->assertEquals('1.1k', $price->shorten(1100));
		
		$this->assertEquals('14k', $price->shorten(14000));
		
		$this->assertEquals('140k', $price->shorten(140000));
		
		$this->assertEquals('1m', $price->shorten(1000000));
		
		$this->assertEquals('18m', $price->shorten(18000000));
	}
	
	public function testGetPrice(){
		
		$price = new \vestervang\rsApi\RS3\GE\Price();
		$this->assertEquals(0, $price->getPrice());
		
		$price = new \vestervang\rsApi\RS3\GE\Price(1000);
		$this->assertEquals(1000, $price->getPrice());
		
		$price = new \vestervang\rsApi\RS3\GE\Price(1000000);
		$this->assertEquals(1000000, $price->getPrice());
		
		$price = new \vestervang\rsApi\RS3\GE\Price(12000);
		$this->assertEquals(12000, $price->getPrice());
		
		$price = new \vestervang\rsApi\RS3\GE\Price(1400000);
		$this->assertEquals(1400000, $price->getPrice());
		
		$price = new \vestervang\rsApi\RS3\GE\Price('1.1k');
		$this->assertEquals(1100, $price->getPrice());
		
		$price = new \vestervang\rsApi\RS3\GE\Price('11.5k');
		$this->assertEquals(11500, $price->getPrice());
		
		$price = new \vestervang\rsApi\RS3\GE\Price('180k');
		$this->assertEquals(180000, $price->getPrice());
		
		$price = new \vestervang\rsApi\RS3\GE\Price('1.8m');
		$this->assertEquals(1800000, $price->getPrice());
	}
	
	public function testGetRoundedPrice(){
		
		$price = new \vestervang\rsApi\RS3\GE\Price();
		$this->assertEquals(0, $price->getRoundedPrice());
		
		$price = new \vestervang\rsApi\RS3\GE\Price(1000);
		$this->assertEquals('1k', $price->getRoundedPrice());
		
		$price = new \vestervang\rsApi\RS3\GE\Price(1000000);
		$this->assertEquals('1m', $price->getRoundedPrice());
		
		$price = new \vestervang\rsApi\RS3\GE\Price(12000);
		$this->assertEquals('12k', $price->getRoundedPrice());
		
		$price = new \vestervang\rsApi\RS3\GE\Price(1400000);
		$this->assertEquals('1.4m', $price->getRoundedPrice());
		
		$price = new \vestervang\rsApi\RS3\GE\Price('1.1k');
		$this->assertEquals('1.1k', $price->getRoundedPrice());
		
		$price = new \vestervang\rsApi\RS3\GE\Price('11.5k');
		$this->assertEquals('11.5k', $price->getRoundedPrice());
		
		$price = new \vestervang\rsApi\RS3\GE\Price('180k');
		$this->assertEquals('180k', $price->getRoundedPrice());
		
		$price = new \vestervang\rsApi\RS3\GE\Price('1.8m');
		$this->assertEquals('1.8m', $price->getRoundedPrice());
	}
}
