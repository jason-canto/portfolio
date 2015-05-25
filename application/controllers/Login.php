<?php 
if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Login extends CI_Controller{

	public function __construct(){
		parent::__construct();
		$this->load->helper('url');
	}
	public function teste(){
		$user = array('name'=>'jason','password'=>'lala');

		//$this->session->set_userdata($user);
		$this->session->set_userdata('some_name', 'some_value');
		print_r($this->session->userdata('some_name'));
		echo 'lala';
	}
}
