<?php 
if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Login extends CI_Controller{

	public function __contruct(){
		parent:: __construct();
		$this->load->libriry('session');
	}
	public function teste(){
		echo 'lala';
	}
}
