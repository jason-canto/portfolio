<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Names_model extends CI_Model{

	public function getNames(){
		$query = $this->db->query('Select * from names limit 10');
		return $query->result();
	}


}