<?php

class LoginController extends CI_Controller{

	public function index(){

		$this->load->view('login');
	}
	public function checkLogin(){

		$this->form_validation->set_rules('username', 'Username','required|callback_verifyUser');
		$this->form_validation->set_rules('password', 'Password','required');

		if($this->form_validation->run() == false){
			$this->load->view('login');
		}else{
			redirect('Home/index');
		}
	}
	public function verifyUser(){

		$user = $this->input->post('username');
		$pass = $this->input->post('password');

		$this->load->model('LoginModel');

		if($this->LoginModel->login($user,$pass)){
			return true;
		}else{
			$this->form_validation->set_message('verifyUser', 'Incorrect Username/Password. Please try again.');
			return false;
		}
	}

}

  ?>