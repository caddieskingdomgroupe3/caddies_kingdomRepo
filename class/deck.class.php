<?php

class Deck {

	/**
     * --------------------------------------------------
     * PROPERTIES
     * --------------------------------------------------
    **/
	private $_d_team_id;
	private $_d_team_cards;
	
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
     * setDteamId - 
     * @param   string  $value
     * @return  
    **/

	public function setDteamId($value) {
		$this->_d_team_id = $value;
	}

	/**
     * setDteamId - 
     * @param   string  $value
     * @return  
    **/

	public function setDteamcards($value) {
		$this->$_d_team_cards = $value;
	}

	/**
     * setDeckId - 
     * @param   string  $value
     * @return  
    **/

	public function setDeckId() {
		
	}

	/**
     * setDeckCards - 
     * @param   string  $value
     * @return  
    **/

	public function setDeckCards() {
		
	}

	/**
     * --------------------------------------------------
     * GETTERS
     * --------------------------------------------------
    **/
    /**
     * getDteamId - 
     * @param   
     * @return  string
    **/

	public function getDteamId() {
		return $this->_d_team_id;
	}

	/**
     * getDteamId - 
     * @param   
     * @return  string
    **/

	public function getDteamcards() {
		return $this->$_d_team_cards;
	}

	/**
     * getDeckId - 
     * @param   
     * @return  string
    **/

	public function getDeckId() {
		
	}

	/**
     * getDeckCards - 
     * @param   
     * @return  string
    **/

	public function getDeckCards() {
		
	}

	// Function toString
	
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
            
            $key = str_replace( '_d_', ' ', $key );
            $key = str_replace( '_', ' ', $key );
            $key = ucwords( $key );
            $key = str_replace( ' ', '', $key );
            $method = 'set' . $key;

            if( method_exists( $this, $method) )
                $this->$method( $value );

        endforeach;
    }

}