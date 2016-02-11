<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class View extends CI_Controller {

	public function __construct() {
		parent::__construct();
		$this->load->library('session');
	}

	public function index(){
		//
		$this->load->view('header');
		$this->load->view('view1');
		$this->load->view('footer'); 
	}
}