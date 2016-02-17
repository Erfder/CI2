<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Logged extends CI_Controller {

	/*---------------------------------------------------For the love of god do not forget to route this page!
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
		

	public function index(){
		$data = array(
		'user_name' => $this->input->post('u_name'),
		'pass' => $this->input->post('password')
		);
		$this->load->model('model2');
        $fields = $this->model2->validatelogin($data['user_name'], $data['pass']);
        $data2['title'] = $fields;
        //
        $sess_array = array(
		'Username' => $this->input->post('u_name')
		);
		$this->session->set_userdata('session_data', $sess_array);
		//
		$this->load->view('header');
		$this->load->view('view1', $data2);
		//$this->load->view('view1', $data);
		$this->load->view('footer'); //do 'view1', data) to use the commented line
	}

	

}