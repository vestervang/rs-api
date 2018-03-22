<?php
/**
 * Created by PhpStorm.
 * User: frederikthomsen
 * Date: 06/01/2018
 * Time: 13.20
 */

namespace vestervang\rsApi\RS3\GE;

use vestervang\Exceptions\WrongParameterTypeException;

class Price{
	
	protected $price = 0;
	protected $priceRounded = 0;
	
	public function __construct($price = 0){
		if(is_numeric($price)){
			$this->price = $price;
			$this->priceRounded = $this->shorten($price);
		}else{
			$this->price = $this->expand($price);
			$this->priceRounded = $price;
		}
	}
	
	public function expand($price){
		
		$multiplier = $this->getMultiplier($price);
		
		$basePrice = $price;
		
		if(!is_numeric(substr($price, -1))){
			$basePrice = (float)substr($price, 0, -1);
		}
		
		return $basePrice * $multiplier;
	}
	
	public function shorten($price){
		
		if($price >= 1000000){
			$type = 'm';
		}elseif($price >= 1000){
			$type = 'k';
		}else{
			return $price;
		}
		
		$divisor = $this->getMultiplier($type);
		
		return round($price / $divisor, 1) . $type;
	}
	
	public function getMultiplier($price){
		
		$multiplierLetter = substr($price, -1);
		
		switch(strtolower($multiplierLetter)){
			
			case 'k':
				$multiplier = 1000;
				break;
			case 'm':
				$multiplier = 1000000;
				break;
			default:
				$multiplier = 1;
				break;
		}
		
		return $multiplier;
	}
	
	public function getPrice(){
		return $this->price;
	}
	
	public function getRoundedPrice(){
		return $this->priceRounded;
	}
	
	
}