<?php

class Get_db extends CI_Model{
	
	function getAll(){
		$query = $this->db->query("SELECT * FROM students");

		return $query->result();
	}
	
	function getClasses($username) {
		$this->db->select('id');
		$this->db->from('teachers');
		$this->db->where('username',$username);
		
		//$id = $this->db->query("select id from teachers where username='".$username."'")->fetch_object()->id;
		//$query = $this->db->query("select id from teachers where username='".$username."'");
		
		$data=$this->db->get()->result();
		
		foreach($data as $row)
		{
			$query = $this->db->query("select id, courseCode, classSchedule from classes where teacherID=".$row->id);
		}
		
		return $query->result();
	}
	
	function getClassInfo($id)
	{
		$this->db->select('courseCode');
		$this->db->from('classes');
		$this->db->where('id',$id);
		
		//$id = $this->db->query("select id from teachers where username='".$username."'")->fetch_object()->id;
		//$query = $this->db->query("select id from teachers where username='".$username."'");
		
		$data=$this->db->get()->result();
		
		return $data;
	}
}