<?php
/**
 * Created by PhpStorm.
 * User: frederikthomsen
 * Date: 3/10/18
 * Time: 6:16 PM
 */

namespace vestervang\rsApi\RS3\Bestiary;

interface IBeast{
	
	/**
	 * @return int
	 */
	public function getId();
	
	/**
	 * @return int
	 */
	public function getMagicLevel();
	
	/**
	 * @return int
	 */
	public function getSlayerCategory();
	
	/**
	 * @return int
	 */
	public function getDefence();
	
	/**
	 * @return int
	 */
	public function getLevel();
	
	/**
	 * @return int
	 */
	public function getDescription();
	
	/**
	 * @return int
	 */
	public function getAreas();
	
	/**
	 * @return int
	 */
	public function getPoisonous();
	
	/**
	 * @return int
	 */
	public function getWeakness();
	
	/**
	 * @return int
	 */
	public function getSize();
	
	/**
	 * @return int
	 */
	public function getRanged();
	
	/**
	 * @return int
	 */
	public function getAttack();
	
	/**
	 * @return int
	 */
	public function getMember();
	
	/**
	 * @return int
	 */
	public function getAnimationIds();
	
	/**
	 * @return int
	 */
	public function getName();
	
	/**
	 * @return int
	 */
	public function getXp();
	
	/**
	 * @return int
	 */
	public function getLifepoints();
	
	/**
	 * @return int
	 */
	public function getAggressive();
	
	/**
	 * @return int
	 */
	public function getAttackable();
}
