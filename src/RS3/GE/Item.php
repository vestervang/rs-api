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

class Item{
	
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
	
	public function __construct($icon, $iconLarge, $id, $type, $typeIcon, $name, $price, $priceHistory){
		
		$this->icon = $icon;
		$this->iconLarge = $iconLarge;
		$this->id = $id;
		$this->type = $type;
		$this->typeIcon = $typeIcon;
		$this->name = $name;
		$this->price = new Price($price);
		$this->history = new PriceHistory($priceHistory);
	}
	
	public function getIcon(){
		return $this->icon;
	}
	
	public function getIconLarge(){
		return $this->iconLarge;
	}
	
	public function getId(){
		return $this->id;
	}
	
	public function getType(){
		return $this->type;
	}
	
	public function getTypeIcon(){
		return $this->typeIcon;
	}
	
	public function getName(){
		return $this->name;
	}
	
	public function getPrice(){
		return $this->price;
	}
	
	public function getHistory(){
		return $this->history;
	}
}