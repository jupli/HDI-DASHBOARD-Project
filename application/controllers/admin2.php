<?php
class Admin2 extends CI_Controller{
     function __construct(){
         parent::__construct();
         $this->load->library('session');
     }

     public function index(){
      
         $this->load->view('v_admin2');
         

     }
}