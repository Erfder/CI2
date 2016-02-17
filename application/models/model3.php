<?php 
class Model3 extends CI_Model {
	public function getrando() {
		$this->load->helper('string');
  		$this->load->database(); 

  		$this->db->select('userid');
		$this->db->order_by("userid", "desc");
		$this->db->limit(1);
		$maxnu = $this->db->get('users')->row_array();
		//$intmax = settype($maxnu['userid'], "int");
		//return $intmax;
		$randomiz = rand(1,$maxnu['userid']);

		$query = $this->db->get_where('users', array('userid' => $randomiz));
		return $query->row_array();

	}
}
?>