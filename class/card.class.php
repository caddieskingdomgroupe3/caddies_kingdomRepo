<?php
class Card{
	
	private $_c_id;
	private $_c_name;
	private $_c_type;
	private $_c_dp;
	private $_c_hp;
	private $_c_mc;
	private $_c_img_url;

	//CARD ID SETTER & GETTER//

	public function setId($value){
		$this->_c_id = $value;
	}

	public function getId(){

	}

	//CARD NAME SETTER & GETTER//

	public function setName($value){
		$this->_c_name = $value;
	}

	public function getName(){

	}

	//CARD TYPE SETTER & GETTER//

	public function setType($value){
		$this->_c_type = $value;
	}

	public function getType(){

	}

	//CARD DAMAGE POINTS SETTER & GETTER//

	public function setDp($value){
		$this->_c_dp = $value;
	}

	public function getDp(){

	}

	//CARD HEALTH POINTS SETTER & GETTER//

	public function setHp($value){
		$this->_c_hp = $value;
	}

	public function getHp(){

	}

	//CARD MANA COST SETTER & GETTER//

	public function setMc($value){
		$this->_c_mc = $value;
	}

	public function getMc(){

	}

	public function isActive(){

	}

	public function receiveDamages(){

	}

	public function giveDamages(){
		
	}
}