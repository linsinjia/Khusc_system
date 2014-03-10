<?php
class index2 extends CI_Model{
	function __construct()
	{
		parent::__construct();
	}
	//studata 資料庫 year / stu_name / stu_ID / teacher
	//100a stuid / name / fbname / email
	
	function get_data_year(){
		$textbox=$this->input->post('conditiontext');
		//$sql=$this->db->like('year', '$textbox', 'both');
		$sql = "SELECT * FROM 100a WHERE stuid LIKE '%$textbox%';";
		$query=$this->db->query($sql);
		return $query->result();
	}
	
	function get_data_stuname(){
		$textbox=$this->input->post('conditiontext');
		$sql = "SELECT * FROM 100a WHERE name LIKE '%$textbox%';";
		$query=$this->db->query($sql);
		return $query->result();
	}
	function get_data_stuid(){
		$textbox=$this->input->post('conditiontext');
		$sql = "SELECT * FROM 100a WHERE fbname LIKE '%$textbox%';";
		$query=$this->db->query($sql);
		return $query->result();		
	}
	function get_data_teacher(){
		$textbox=$this->input->post('conditiontext');
		$sql = "SELECT * FROM 100a WHERE email LIKE '%$textbox%';";
		$query=$this->db->query($sql);
		return $query->result();
	}
	
}
?>