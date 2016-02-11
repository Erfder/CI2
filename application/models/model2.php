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
}
?>