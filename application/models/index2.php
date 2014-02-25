<?php
class index2 extends CI_Model{
	function __construct()
	{
		parent::__construct();
	}
	function get_data_year(){
		$sql = "SELECT * FROM studata WHERE year LIKE '$textbox%';";
		//$sql = "SELECT * FROM studata";
		//$query = $this->db->get_where('studata',%$textbox%);
		$query=$this->db->query($sql);
		return $query->result();
	}
	function get_data_stuname(){
		$sql = "SELECT * FROM studata WHERE stu_name LIKE '%$textbox%';";
		$query=$this->db->query($sql);
		return $query->result();
	}
	function get_data_stuid(){
		$sql = "SELECT * FROM studata WHERE stu_id LIKE '%$textbox%';";
		$query=$this->db->query($sql);
		return $query->result();		
	}
	function get_data_teacher(){
		$sql = "SELECT * FROM studata WHERE teacher LIKE '%$textbox%';";
		$query=$this->db->query($sql);
		return $query->result();
	}
}
?>