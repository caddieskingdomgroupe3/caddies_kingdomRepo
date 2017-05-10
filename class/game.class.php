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
