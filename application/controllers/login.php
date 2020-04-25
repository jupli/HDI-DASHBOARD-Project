<?php

class Login extends CI_Controller{
 
 function __construct(){
	 parent::__construct();		
	 $this->load->library('session');
	 $this->load->model('m_login');

 }

 function index(){
	 $this->load->view('v_login');
 }

 function aksi_login(){
	 $nokim = $this->input->post('nokim');
	 $penerima = $this->input->post('penerima');
	//  $where = array(
	// 	 'nokim' => $nokim,
	// 	 'penerima' =>$penerima
	// 	 );
	//  $cek = $this->m_login->cek_login("admin",$where)->num_rows();
	//$cek = $this->m_login->cek_login($where);

	$cek = $this->m_login->login_user($nokim,$penerima);
	// $cek = $this->load->model('M_login');
	

	 if($cek > 0){
	
		
		echo $tally;
		// echo $nokim;
		// echo $penerima;

		 $data_session = array('nama' => $nokim,'penerima' => $penerima, 'namapen' =>$tally,'status' => "login");
		 // $this->load->library('session');
		$this->session->set_userdata($data_session);
		//$this->session->set_userdata($nokim,$penerima);
	
		 redirect(base_url("index.php/admin"));

	 }else{
		 echo "Delivery Nomor dan Nama Penerima salah !";
	 }
 }

 function logout(){
	 $this->session->sess_destroy();
	 redirect(base_url('index.php/login'));
 }
}
?>