<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {

	public function index()
	{
		$this->load->view('admin');
	}
        public function create_user($username,$password) {
            $this->load->model('loginModel');
            $this->loginModel->create($username, $password);
        }
        public function delete_user($user_id) {
            $this->load->model('loginModel');
            $this->loginModel->delete($user_id);
        }
}