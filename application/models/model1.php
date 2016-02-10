<?php 
class News_model extends CI_Model {

	public function __construct()	{
		$this->load->database(); 
		
	}
	public function get_news() {
		  $query = $this->db->query('SELECT slug, title, id FROM news');
		  $queryret = "lmno";
		  return $queryret;
	}
}
?>