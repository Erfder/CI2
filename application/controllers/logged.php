<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class logged extends CI_Controller {

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

	public function index()
	{
		$this->load->model('model2');
        $fields = $this->model2->validatelogin();
        $data['title'] = $fields;
		//$data['title'] = "hi";
		$this->load->view('header');
		$this->load->view('view1', $data);
		//$this->load->view('view1', $data);
		$this->load->view('footer'); //do 'view1', data) to use the commented line
	}
}