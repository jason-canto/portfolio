<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Names_model extends CI_Model{

	public function getNames(){
		try{
			$query = $this->db->query('Select id, name from names');	
		}catch(Exeception $e){
			log_message( 'error', $e->getMessage( ) . ' in ' . $e->getFile() . ':' . $e->getLine() );
		}

		return $query->result();
	}


}