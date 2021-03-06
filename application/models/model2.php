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
	public function insertda($dadata) {
		$this->load->database();
		$iid = $this->db->get_where('image', array('source' => $dadata['source']))->row_array();
		$fdadata = array(
			'dalink' => $dadata['dalink'],
			'userid' => $dadata['userid'],
			'imgid' => $iid['image_id']
		);
		$this->db->insert('dainfo', $fdadata);
	}
	public function getuser(){
		$this->load->library('session');
		$sessdat = $_SESSION['session_data']['Username'];
		$this->load->database();
		$this->db->select('userid');
		$did = $this->db->get_where('users', array('username' => $sessdat))->row_array();
		return $did;
	}
	public function update($newdata, $id){
		$this->load->database();
		$this->db->where('image_id', $id);
		$this->db->update('image', $newdata);
	}
	public function getinf(){
		$this->load->library('session');
		$sessdat = $_SESSION['session_data']['Username'];
		$this->load->database();
		$this->db->select('userid');
		$did = $this->db->get_where('users', array('username' => $sessdat))->row_array();
		$pastposts = $this->db->get_where('image', array('userid' => $did['userid']))->result_array();
		return $pastposts;
	}
	public function del($id){
		$this->load->database();
		$this->db->where('image_id', $id);
		$this->db->delete('image');
	}
}
?>