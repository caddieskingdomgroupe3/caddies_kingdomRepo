<?php

class Game {

	private $_g_id;
	private $_g_id_playerone;
	private $_g_id_playertwo;
	private $_g_datetime;
	private $_g_winner;
	private $_g_team_id;
	private $_g_board_url;

	public function __construct($datas) {
		$this->hydrate($datas);
	}

	private function hydrate() {

	}
}
