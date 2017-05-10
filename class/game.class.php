<?php

class Game {
	/**
     * --------------------------------------------------
     * PROPERTIES
     * --------------------------------------------------
    **/
	private $_g_id;
	private $_g_id_playerone;
	private $_g_id_playertwo;
	private $_g_datetime;
	private $_g_winner;
	private $_g_team_id;
	private $_g_board_url;
	private $_p_id;
	private $_i_id;
	private $_p_id_player;

	/**
     * --------------------------------------------------
     * MAGIC METHODS
     * --------------------------------------------------
    **/
    /**
     * __construct - Class constructor
     * @param   array   $settings
     * @return  
    **/
	public function __construct($datas) {
		$this->hydrate($datas);
	}

	/**
     * --------------------------------------------------
     * SETTERS
     * --------------------------------------------------
    **/
    /**
     * setGId - 
     * @param   string  $value
     * @return  
    **/

	public function setGId($value) {
		$this->$_g_id = $value;
	}

	 /**
     * setGIdPlayerone - 
     * @param   string  $value
     * @return  
    **/

	public function setGIdPlayerone($value) {
		$this->$_g_id_playerone = $value;
	}

	 /**
     * setGIdPlayertwo - 
     * @param   string  $value
     * @return  
    **/

	public function setGIdPlayertwo($value) {
		$this->$_g_id_playertwo = $value;
	}

	 /**
     * setGDatime - 
     * @param   string  $value
     * @return  
    **/

	public function setGDatime($value) {
		$this->$_g_datetime = $value;
	}

	 /**
     * setGWinner - 
     * @param   string  $value
     * @return  
    **/

	public function setGWinner($value) {
		$this->$_g_winner = $value;
	}

	 /**
     * setGTeamId - 
     * @param   string  $value
     * @return  
    **/

	public function setGTeamId($value) {
		$this->$_g_team_id = $value;
	}

	 /**
     * setGBoardUrl - 
     * @param   string  $value
     * @return  
    **/

	public function setGBoardUrl($value) {
		$this->$_g_board_url = $value;
	}

	 /**
     * setPId - 
     * @param   string  $value
     * @return  
    **/

	public function setPId($value) {
		$this->$_p_id = $value;
	}

	 /**
     * setIId - 
     * @param   string  $value
     * @return  
    **/

	public function setIId($value) {
		$this->$_i_id = $value;
	}

	 /**
     * setPIdPlayer - 
     * @param   string  $value
     * @return  
    **/

	public function setPIdPlayer($value) {
		$this->$_p_id_player = $value;
	}

    /**
     * --------------------------------------------------
     * GETTERS
     * --------------------------------------------------
    **/
    /**
     * getGId - 
     * @param   
     * @return  string
    **/

	public function getGId() {
		return $this->$_g_id;
	}

	/**
     * getGIdPlayerone - 
     * @param   
     * @return  string
    **/

	public function getGIdPlayerone() {
		return $this->$_g_id;
	}

	/**
     * getGIdPlayertwo - 
     * @param   
     * @return  string
    **/

	public function getGIdPlayertwo() {
		return $this->$_g_id_playertwo;
	}

	/**
     * getGDatime - 
     * @param   
     * @return  string
    **/

	public function getGDatime() {
		return $this->$_g_datetime;
	}

	/**
     * getGWinner - 
     * @param   
     * @return  string
    **/

	public function getGWinner() {
		return $this->$_g_winner;
	}

	/**
     * getGTeamId - 
     * @param   
     * @return  string
    **/

	public function getGTeamId() {
		return $this->$_g_team_id;
	}

	/**
     * getGBoardUrl - 
     * @param   
     * @return  string
    **/

	public function getGBoardUrl() {
		return $this->$_g_board_url;
	}

	/**
     * getPId - 
     * @param   
     * @return  string
    **/

	public function getPId() {
		return $this->$_p_id;
	}

	/**
     * getIId - 
     * @param   
     * @return  string
    **/

	public function getIId() {
		return $this->$_i_id;
	}

	/**
     * getPIdPlayer - 
     * @param   
     * @return  string
    **/

	public function getPIdPlayer() {
		return $this->$_p_id_player;
	}

	/** **/

	public function __toString() {
    }

	/**
     * --------------------------------------------------
     * METHODS
     * --------------------------------------------------
    **/
    /**
     * hydrate - Hydrate the object properties
     * @param   array   $datas
     * @return  
    **/
    private function hydrate( $datas ) {
        foreach( $datas as $key=>$value ) :
            
            $key = str_replace( '_g_', ' ', $key );
        	$key = str_replace( '_p_', ' ', $key );
        	$key = str_replace( '_i_', ' ', $key );
            $key = str_replace( '_', ' ', $key );
            $key = ucwords( $key );
            $key = str_replace( ' ', '', $key );
            $method = 'set' . $key;

            if( method_exists( $this, $method) )
                $this->$method( $value );

        endforeach;
    }
}
