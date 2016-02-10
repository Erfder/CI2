<?php 
class model1 extends CI_Model {
	public function get_news() {
  		$this->load->database(); 
		$query = $this->db->get_where('news', array('id' => 1));
		return $query->row_array();
	}
}
?>