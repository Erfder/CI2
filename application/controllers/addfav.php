<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Addfav extends CI_Controller {

	public function __construct() {
		parent::__construct();
		$this->load->helper('form');
		$this->load->helper('url');
		$this->load->library('session');
		$this->load->library('form_validation');
	}
	public function index(){
		$inf = array(
			'imgid' => $this->input->post('favid'),
			'favingusr' => $this->input->post('usrn')
			);

		$this->load->model('model1');
		$this->model1->addf($inf);
		$data['userinf'] = $this->db->get_where('users', array('userid' => $this->input->post('ufid')))->row_array();

		$this->load->view('header');
		$this->load->view('view1', $data);
		$this->load->view('footer'); 
	} 
}