<?php
/**
 * Created by PhpStorm.
 * User: frederikthomsen
 * Date: 06/01/2018
 * Time: 13.20
 */

namespace vestervang\rsApi\RS3\GE;

class Price{
	
	public $price = 0;
	public $priceRounded = 0;
	
	public function __construct($price){
		$this->price = $price;
		$this->priceRounded = $this->shorten($price);
	}
	
	protected function expand($price){
		
		if(!is_string($price)){
			throw new \Exception('Wrong parameter type!');
		}
		
		$multiplier = $this->getMultiplier($price);
		
		$basePrice = (int)substr($price, 0, -1);
		
		return $basePrice * $multiplier;
	}
	
	protected function shorten($price){
		
		if($price > 1000000){
			$type = 'm';
		}elseif($price > 10000){
			$type = 'k';
		}else{
			return $price;
		}
		
		$divisor = $this->getMultiplier($type);
		
		return round($price / $divisor, 1) . $type;
	}
	
	protected function getMultiplier($string){
		
		$multiplierLetter = substr($string, -1);
		
		if(is_numeric($multiplierLetter)){
			throw new \Exception('No multiplier was found!');
		}
		
		switch(strtolower($multiplierLetter)){
			
			case 'k':
				return 1000;
				break;
			case 'm':
				return 1000000;
		}
		
		return null;
	}
}