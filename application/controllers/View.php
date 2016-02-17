<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class View extends CI_Controller {

	public function __construct() {
		parent::__construct();
		$this->load->library('session');
	}

	public function index(){
		$this->load->model('model3');
		$rand = $this->model3->getrando();
        $data['userinf'] = $rand;

		$this->load->view('header');
		$this->load->view('view1', $data);
		$this->load->view('footer'); 
	}
}