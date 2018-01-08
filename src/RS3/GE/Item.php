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
	public $icon;
	
	/**
	 * @var string
	 */
	public $iconLarge;
	
	/**
	 * @var int
	 */
	public $id;
	
	/**
	 * @var string
	 */
	public $type;
	
	/**
	 * @var string
	 */
	public $typeIcon;
	
	/**
	 * @var string
	 */
	public $name;
	
	/**
	 * @var \vestervang\rsApi\RS3\GE\Price
	 */
	public $price;
	
	/**
	 * @var \vestervang\rsApi\RS3\GE\PriceHistory
	 */
	public $history;
	
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
}