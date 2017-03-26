<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
	public function index()
	{
		$this->load->model('get_db');
		$data['classes'] = $this->get_db->getClasses('bryan');
		
		$this->load->view('teachers/index',$data);
		//$this->getValues();
	}
	
	public function classs()
	{
		$this->load->model('get_db');
		$data['class'] = $this->get_db->getClassInfo($_POST['id']);
		$this->load->view('teachers/class',$data);
	}
	
	public function loginPage()
	{
		$this->load->view('login');
		//$this->getValues();
	}

	// function getValues(){
	// 	$this->load->model("get_db");

	// 	$data['results'] = $this->get_db->getAll();
	// 	$this->load->view("t",$data);
	// }
}
