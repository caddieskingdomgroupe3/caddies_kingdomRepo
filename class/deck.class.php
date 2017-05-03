<?php

class Deck {

	private $_d_team_id;
	private $_d_team_card;

	// Méthode Construct

	public function __construct($datas) {
		$this->hydrate($datas);
	}

	// Setters

	public function setDteamId($value) {
		$this->_d_team_id = $value;
	}

	public function setDteamCard($value) {
		$this->_d_team_card = $value;
	}

	// Getters

	public function getDteamId() {

	}

	public function getDteamCard() {

	}
}