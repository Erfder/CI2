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
	public function addf($inf){
		$this->load->database(); 
		$cats = $this->db->get_where('users', array('username' => $inf['favingusr']))->row_array();
		$cats['favs'] .= "-";
		$cats['favs'] .= $inf['imgid'];
		$data = array(
           'favs' => $cats['favs']
        );
		$this->db->where('username', $inf['favingusr']);
		$this->db->update('users', $data);
	}
}
?>