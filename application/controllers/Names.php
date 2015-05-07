<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Names extends CI_Controller {

	
	function __construct()
    {
        parent::__construct();
        $this->load->model('names_model');
        $this->load->helper('url');
    }

	public function index(){
		$this->load->database();
		$result = $this->names_model->getNames();
		$json = json_encode($result);
		$data['json'] = $json;
		$this->load->view('names', $data);
	}

}