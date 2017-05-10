<?php
class Card{
	
	private $_c_id;
	private $_c_name;
	private $_c_type;
	private $_c_dp;
	private $_c_hp;
	private $_c_mc;
	private $_c_img_url;

	public function __construct(){

	}

	public function hydrate($datas){
		foreach ($datas as $key => $value) {
			$key = str_replace('_c_', '', $key);
			$method = 'setc'.ucwords($key);
			if (method_exists($this, $method)) {
				$this->$method($value);
			}
		}
	}

	//CARD ID SETTER & GETTER//

	public function setId($value){
		$this->_c_id = $value;
	}

	public function getId(){
		return $this->_c_id;
	}

	//CARD NAME SETTER & GETTER//

	public function setName($value){
		$this->_c_name = $value;
	}

	public function getName(){
		return $this->_c_name;
	}

	//CARD TYPE SETTER & GETTER//

	public function setType($value){
		$this->_c_type = $value;
	}

	public function getType(){
		return $this->_c_type;
	}

	//CARD DAMAGE POINTS SETTER & GETTER//

	public function setDp($value){
		$this->_c_dp = $value;
	}

	public function getDp(){
		return $this->_c_dp;
	}

	//CARD HEALTH POINTS SETTER & GETTER//

	public function setHp($value){
		$this->_c_hp = $value;
	}

	public function getHp(){
		return $this->_c_hp;
	}

	//CARD MANA COST SETTER & GETTER//

	public function setMc($value){
		$this->_c_mc = $value;
	}

	public function getMc(){
		return $this->_c_mc;
	}

	public function placeCard(){
		$callturn = Turn::getId();
		return $callturn;
	}

	public function isActive($callturn){
		if (Turn::getId() - $callturn >= 1) {
			return true;
		}return false;
	}

	public function receiveDamages($card, $damages){
		if ($card::canReceiveDamages()==true) {
			$this->getHp() - $damages;
		}
	}

	public function giveDamages(){
		
	}
}