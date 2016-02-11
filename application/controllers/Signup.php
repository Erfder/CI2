<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Signup extends CI_Controller {

	public function __construct() {
		parent::__construct();
		$this->load->helper('form');
		$this->load->library('session');
		$this->load->library('form_validation');
	}

	public function index(){
		//
		$this->load->view('header');
		$this->load->view('sign');
		$this->load->view('footer'); 
	}
}