<?php  

class LoginModel extends CI_Model{

	public function login($username, $password){
	$studentsdb=$this->db;

	$studentsdb->select('username, password');
	$studentsdb->from('students');
	$studentsdb->where('username', $username);
	$studentsdb->where('password', $password);

	$query = $studentsdb->get();

	if ($query->num_rows() == 1){
		return true;
	}else{
		return false;
		}
	}
}
?>