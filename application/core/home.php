<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
	session_start();
class Home extends CI_Controller {

    public function index() {
    	if(empty($_SESSION['user']))
				{  redirect('signin');  }
		else
				{
			        $this->load->view("view_home");
			    }
    }
}