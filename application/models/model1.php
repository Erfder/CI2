<?php 
class Model1 extends CI_Model {
	public function signup($data) {
  		$this->load->database(); 
  		if ($this->db->get_where('users', array('username' => $data['username']))->num_rows() > 0) {
  			$this->load->helper('url');
			redirect('Signup', 'refresh'); //change to an error page later
  		}else{
			$this->db->insert('users', $data);
		}
	}
}
?>