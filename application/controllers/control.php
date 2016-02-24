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
			$ddalink = $this->input->post('link');
			$fdalink = 'http%3A%2F%2Ffav.me%2F'.substr($ddalink, 14);

			$this->load->model('model2');
			$did = $this->model2->getuser();
			$dbdata = array(
				'userid' => $did['userid'],
				'source' => "http://localhost:8888/CI/Img/".$rabbitHood,
				'title' => $dtitle,
				'desc' => $ddescription,
				'media' => $dmedia
			);
			$dadbdata = array(
				'dalink' => $ddalink,
				'userid' => $did['userid'],
				'source' => "http://localhost:8888/CI/Img/".$rabbitHood
			);
			
	        $this->model2->insertinto($dbdata);
	        $this->model2->insertda($dadbdata);
	        redirect('accountredirected', 'refresh');

		}elseif (isset($_POST['rincrud'])) {
			$ntitle = $this->input->post('titl');
			$ndescription = $this->input->post('des');
			$nmedia = $this->input->post('me');
			$id = $this->input->post('iddd');

			$this->load->model('model2');
			$newinfo = array(
				'title' => $ntitle,
				'desc' => $ndescription,
				'media' => $nmedia
			);
			$this->model2->update($newinfo, $id);
			redirect('accountredirected', 'refresh');

		}elseif (isset($_POST['dele'])){
			$this->load->model('model2');
			$id = $this->input->post('iddd');
			$this->model2->del($id);
			redirect('accountredirected', 'refresh');

		}else{
			redirect('accountredirected', 'refresh');
		}
		
	}



	

}