<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Vieworg extends CI_Controller {

	public function __construct() {
		parent::__construct();
		$this->load->library('session');
	}

	public function index(){
		$this->load->model('model3');
		$rec = $this->model3->getrecent();
        $data['imginf'] = $rec;

		$this->load->view('header');
		$this->load->view('view2', $data);
		$this->load->view('footer'); 
	}
}