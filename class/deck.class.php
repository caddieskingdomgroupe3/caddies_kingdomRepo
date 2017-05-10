<?php

class Deck {

	private $_d_team_id;
	

	// Method Construct

	public function __construct($datas) {
		$this->hydrate($datas);
	}

	// Setters

	public function setDteamId($value) {
		$this->_d_team_id = $value;
	}

	

	// Getters

	public function getDteamId() {
		return $this->_d_team_id;
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
            
            $key = str_replace( 'd_', ' ', $key );
            $key = str_replace( '_', ' ', $key );
            $key = ucwords( $key );
            $key = str_replace( ' ', '', $key );
            $method = 'set' . $key;

            if( method_exists( $this, $method) )
                $this->$method( $value );

        endforeach;
    }

}