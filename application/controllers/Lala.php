<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Lala extends CI_Controller {

	public function index()
	{
		echo 'lalal';
		$this->load->view('portfolio');
		
	}
}
