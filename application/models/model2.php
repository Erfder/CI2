<?php 
class model2 extends CI_Model {
	public function validatelogin() {
		$nam = $this->input->get('n');
  		$this->load->database(); 
		$query = $this->db->get_where('users', array('username' => $nam));
		return $query->row_array();
	}
}
?>