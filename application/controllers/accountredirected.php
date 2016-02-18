<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Accountredirected extends CI_Controller {

	public function __construct() {
		parent::__construct();
		$this->load->library('session');
	}

	public function index(){
		$this->load->model('model2');
		$data3 = $this->model2->getinf();
		$prepped['thedata'] = $data3;

		$this->load->view('header');
		$this->load->view('account', $prepped);
		$this->load->view('footer');
	}
}