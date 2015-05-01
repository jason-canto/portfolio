<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Port extends CI_Controller {

	public function index()
	{
		echo 'port';
		$this->load->view('portfolio');
		
	}
}
