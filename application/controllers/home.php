<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	public function index()
	{
		$this->load->view('login');
	}
        public function about(){
            echo 'yeah';
        }
                function login()
	{
		$data['title'] = 'Login Form with Sessions';
		$this->load->view("login",$data);
	}
        function login_validation(){
            $this->load->library('form_validation');
            $this->form_validation->set_rules('username', 'Username','required');
            $this->form_validation->set_rules('username', 'Username','required');
            
            if($this->form_validation->run()){
                $username = $this->input->post('username');
                $password = $this->input->post('password');
                
                $this->load->model('loginModel');
                
                if($this->loginModel->can_login($username,$password)){
                    $session_data = array(
                        'username' => $username
                );
                    $this->session->set_userdata($session_data);
                    redirect(base_url().'home/enter' );
                }else{
                    $this->session->set_flashdata('error', 'Invalid Username and Password');
                    redirect(base_url().'home/login');
                    
                }
            }else{
                $this->login();
            }
        }
        function enter(){
            if($this->session->userdata('username') != ''){
                echo'<h2>Welcome - '.$this->session->userdata('username').'</h2>';
                echo'<label><a href="'. base_url().'home/logout">Logout</a></label>';
            }else{
                redirect(base_url(). 'home/login');
            }
        }
        function logout(){
            $this->session->unset_userdata('');
            redirect(base_url().'home/login');
        }
	function getValues(){
		$this->load->model("get_db");

		$data['results'] = $this->get_db->getAll();
		$this->load->view("t",$data);
	}
}
