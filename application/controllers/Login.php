<?php 
if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Login extends CI_Controller{

	public function __construct(){
		parent::__construct();
		$this->load->helper('url');
		$this->load->driver('session');
	}
	public function teste(){
		$user = array('name'=>'jason','password'=>'lala');

		$this->session->set_userdata($user);
		echo $this->session->userdata('user');
	}
}
