<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Control extends CI_Controller {

	public function __construct() {
		parent::__construct();
		$this->load->helper('form');
		$this->load->helper('url');
		$this->load->library('session');
		$this->load->library('form_validation');
	}

	public function index(){
		//---------------------------------------------------For the love of god do not forget to route this page!

		if(isset($_POST['beamSword'])){ 
			$screwAttack = $_FILES['asdf']['tmp_name'];
			$rabbitHood = basename($_FILES['asdf']['name']);
			$franklinBadge = "Img";
			move_uploaded_file($screwAttack, $franklinBadge."/".$rabbitHood);
			$superSpicyCurry = 1;
			$data2['superSpicyCurry'] = $rabbitHood;

			$dtitle = $this->input->post('ti');
			$ddescription = $this->input->post('descr');
			$dmedia = $this->input->post('medi');

			$this->load->model('model2');
			$did = $this->model2->getuser();
			$dbdata = array(
				'userid' => $did['userid'],
				'source' => "http://localhost:8888/CI/Img/".$rabbitHood,
				'title' => $dtitle,
				'desc' => $ddescription,
				'media' => $dmedia
			);
			
	        $this->model2->insertinto($dbdata);

			$this->load->view('header');
			$this->load->view('account', $data2);
			$this->load->view('footer'); 

		}elseif (isset($_POST['rincrud'])) {
			
			
			
		}else{
			$this->load->view('header');
			$this->load->view('account');
			$this->load->view('footer'); 
		}
		
	}



	

}