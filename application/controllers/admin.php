<?php 

class Admin extends CI_Controller{

	function __construct(){
		parent::__construct();
		$this->load->library('session');
	
		if($this->session->userdata('status') != "login"){
			redirect(base_url("index.php/login"));
		}
	}

	function index(){
		$this->load->view('v_admin');
	}
}