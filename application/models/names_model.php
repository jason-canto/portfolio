<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Names_model extends CI_Model{

	public function getNames(){
		$query = $this->db->query('Select * from dog_names');
		return $query->result();
	}


}