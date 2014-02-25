<?php
class Database extends CI_Model {

	public function __construct()
	{
		$this->load->database('database');
	}
	
	public function get_data($slug = FALSE)
{
	if ($slug === FALSE)
	{
		$query = $this->db->get('news');
		return $query->result_array();
	}
	
	$query = $this->db->get_where('news', array('slug' => $slug));
	return $query->row_array();
}
}