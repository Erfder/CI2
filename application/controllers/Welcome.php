<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
	public function __construct() {
		parent::__construct();
		$this->load->helper('form');
		$this->load->library('session');
		$this->load->library('form_validation');
	}


	public function index()
	{
		$sess_array = array(
			'set_value' => ''
		);
		$this->session->unset_userdata('session_data', $sess_array);

		$this->load->model('model1');
        $news = $this->model1->get_news();
        $data['title'] = $news;
		//$data['title'] = "hi";
		$this->load->view('header');
		$this->load->view('home1');
		//$this->load->view('view1', $data);
		$this->load->view('footer'); //do 'view1', data) to use the commented line
	}
}
