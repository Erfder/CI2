<?php 
class Model2 extends CI_Model {
	public function validatelogin($user_name) {
		/*if ($name == false){
			$this->load->helper('url');
			redirect('Welcome', 'refresh');
		}else{
			*/
	  		$this->load->database(); 
			$query = $this->db->get_where('users', array('username' => $user_name));
			return $query->row_array();
			
		//}
	}
}
?>