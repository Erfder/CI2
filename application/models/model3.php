<?php 
class Model3 extends CI_Model {
	public function getrando() {
  		$this->load->database(); 

  		$this->db->select('userid');
		$this->db->order_by("userid", "desc");
		$this->db->limit(1);
		$maxnu = $this->db->get('users')->row_array();

		$randomiz = rand(1,$maxnu['userid']);

		$query = $this->db->get_where('users', array('userid' => $randomiz));
		return $query->row_array();

	}
	public function getrecent() {
  		$this->load->database(); 

		$this->db->order_by("image_id", "desc");
		$this->db->limit(3);
		$this->db->join('users', 'users.userid = image.userid');
		$threerec = $this->db->get('image')->result_array();
		return $threerec;

	}
	public function getbyusr($cow) {
  		$this->load->database(); 

  		$id = $this->db->get_where('users', array('username' => $cow))->row_array();

  		$this->db->where('image.userid', $id['userid']);
		$this->db->join('dainfo', 'image.image_id = dainfo.imgid', 'left');
		$userrec = $this->db->get('image')->result_array();
		return $userrec;
	}
}
?>