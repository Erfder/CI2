<?php 
class Model2 extends CI_Model {
	public function validatelogin($user_name, $password) {
		if ($user_name == false){
			$this->load->helper('url');
			redirect('Welcome', 'refresh');
		}elseif ($password == false) {
			$this->load->helper('url');
			redirect('Welcome', 'refresh');
		}else{
	  		$this->load->database(); 
			$query = $this->db->get_where('users', array('username' => $user_name, 'password' => $password));
			if ($query->num_rows() !== 1) {
				$this->load->helper('url');
				redirect('Welcome', 'refresh');
			}else{
				return $query->row_array();
			}
		}
	}
	public function insertinto($datadata) {
		$this->load->database();
		$this->db->insert('image', $datadata);
	}
	public function getuser(){
		$this->load->library('session');
		$sessdat = $_SESSION['session_data']['Username'];
		$this->load->database();
		$this->db->select('userid');
		$did = $this->db->get_where('users', array('username' => $sessdat))->row_array();
		return $did;
	}
	public function update($newdata){

	}
	public function getinf(){
		$this->load->library('session');
		$sessdat = $_SESSION['session_data']['Username'];
		$this->load->database();
		$this->db->select('userid');
		$did = $this->db->get_where('users', array('username' => $sessdat))->row_array();
		$pastposts = $this->db->get_where('image', array('userid' => $did['userid']))->row_array();
		return $pastposts;
	}
}
?>