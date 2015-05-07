<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Names_model extends CI_Model{

	public function getNames(){
		try{
			$query = $this->db->query('Select * from names limit 10');	
		}catch(Exeception $e){
			log_message( 'error', $e->getMessage( ) . ' in ' . $e->getFile() . ':' . $e->getLine() );
		}

		return $query->result();
	}


}