<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Accountredirected extends CI_Controller {

	public function __construct() {
		parent::__construct();
		$this->load->library('session');
	}

	public function index(){
		$cow = $this->input->get('u_name');

		$this->load->model('model3');
		$uimgs = $this->model3->getbyusr($cow);
		$prepped['thedata'] = $uimgs;

		$this->load->view('header');
		$this->load->view('userv', $prepped);
		$this->load->view('footer');
	}
} 
?>