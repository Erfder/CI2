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
		$this->load->helper('url');
		$this->load->library('session');
		$this->load->library('form_validation');
	}


	public function index()
	{
		$sess_array = array(
			'set_value' => ''
		);
		$this->session->unset_userdata('session_data', $sess_array);

		$dus = $this->input->post('su_name');
		$dpas = $this->input->post('spassword');
		$dem = $this->input->post('ema');
		$dpho = $this->input->post('pho');
		$dco = $dem . " " . $dpho;

		$data = array(
		'username' => $dus,
		'password' => $dpas,
		'contactinfo' => $dco
		);
		if ($this->input->post('su_name') == false) {
			echo "Nothing submitted.";
		}else{
			$this->load->model('model1');
	        $news = $this->model1->signup($data);
	        $data['title'] = $news;
    	}

		$this->load->view('header');
		$this->load->view('home1');
		$this->load->view('footer'); 
	}
}
