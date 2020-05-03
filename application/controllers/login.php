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

 function datacustomer(){

	$fildsatu = $this->input->post('X1itemname');
	$filddua = $this->input->post('X2itemname');
	$fildtiga = $this->input->post('X3itemname');
	$isisatu = $this->input->post('X1quantity');
	$isidua = $this->input->post('X2quantity');
	$isitiga = $this->input->post('X3quantity');
//   echo $fildsatu;
//    echo $filddua;
//    echo $fildtiga;

if(($fildsatu != " ") && (($filddua != "ALL") && ($fildtiga != "ALL2"))){
	$x['data2']=$this->m_login->lihat_user($fildsatu,$filddua,$fildtiga,$isisatu,$isidua,$isitiga);
	//panggillsatu();
	$this->load->view('v_adminT1',$x);
	
}	


if(($fildsatu != " ") && (($filddua != "ALL") && ($fildtiga == "ALL2"))){
	$x['data3']=$this->m_login->lihat_usertiga($fildsatu,$filddua,$isisatu,$isidua);
	//panggillsatu();
	$this->load->view('v_adminT2',$x);
	
}	



if(($fildsatu != "") && (($filddua == "ALL") && ($fildtiga == "ALL2"))){
	
	$x['data'] = $this->m_login->lihat_userempat($fildsatu,$isisatu);
	
	if($x > 0){
		
		$data_session2 = array('namas' => $fildsatu,'penerimas' => $isisatu);
	
	$this->session->set_userdata($data_session2);
	$this->load->view('v_adminT3',$data_session2);
		// $data['nama'] = $fildsatu;
		// $data['kelas'] = $isisatu;
		
		
		//   $data_setion = array('fieldsatu' => $fildsatu,'isisatu' => $isisatu);
		 
		// // $this->session->set_userdata($data_session);


	
		//   $this->dblib_shop->db_open(); // membuka koneksi database
		  
		//   // $fildsatu = $satu;
		//   // $filddua = $dua;
		//   // $fildtiga = $tiga;
		
		  
		// 	  //$q = "select * from Trans_Header where Customer_Id = '$nokim' And Dist_Name = '$penerima'";  // query string
		//   // $w = "select * from Trans_Header where '$fildsatu' = '$isisatu' And '$filddua' = '$isidua' And '$fildtiga' = '$isitiga'";  // query string
		//   //$w = "select * from Trans_Header where Trans_Id = '$isisatu' And Trans_Number = '$isidua' And Customer_ID = '$isitiga'";  // query string
		//   $w5= "select * from Trans_Header where $fildsatu Like '%$isisatu' order by Trans_Id ";  // query string
		// 	  $rs5 = $this->dblib_shop->query($w5); // syntax untuk menjalankan query
			  
		//   while (!$rs5->EOF){  // syntax untuk fetch result query
			
		// 	// --------- parsing result ke array ------- //
		// 	$data5= array();
		// 	foreach ($rs5->Fields as $v) {
		// 	  $data5[$v->Name] = trim($v->value);
		// 	}
		// 	// ------------------------------------------//
		   
		// 	//echo json_encode($data5);





		// 	$Trans_Id=$data5['Trans_Id'];





		// 	$rs5->moveNext(); // syntax untuk melanjutkan ke row berikutnya... wajib ada!!

		// 	//$this->dblib_shop->db_close(); // menutup koneksi database
		
		// // return true;
			
		//   }
		 
		//   $data5 = array('Trans_Id' => $Trans_Id);



	
		// $this->load->view('tabulasi3',$data5);
		//  redirect(base_url("index.php/admin"));

	 }else{
		 echo "Delivery Nomor dan Nama Penerima salah !";
	 }
}
		
		


	// if (isset($fildsatu) == " "){
	// 	$fildsatu = $fildsatu;
	// 	$isisatu = $isisatu;
	// }else{
	// 	$fildsatu = $fildsatu;
	// 	$isisatu = $isisatu;
	// }
	
	// if ($filddua == 'ALL'){
	// 	echo "Saya ada ALL";
	
	// 	}else{
	// 		$filddua = $filddua;
	// 		$isidua =  $isidua;
			
	
	// }
	
	// if (isset($_POST['X3itemname']) == "ALL2"){
	// 	$_POST['X3itemname'] = $_POST['X3itemname'].' Like';
	// 	$_POST['X3quantity'] =  '%';
	// 	$fildtiga = $this->input->post('X3itemname');
	// $isitiga = $this->input->post('X3quantity');
	//  }else{
	// 	$_POST['X3itemname'] = $_POST['X3itemname'] ;
	// 	$_POST['X3quantity'] =  $_POST['X3quantity'];
	// 	$fildtiga = $this->input->post('X3itemname');
	// 	$isitiga = $this->input->post('X3quantity');
	// }

	
	
//function panggilsatu(){
// 	$fildsatu = $this->input->post('X1itemname');
// 	$filddua = $this->input->post('X2itemname');
// 	$fildtiga = $this->input->post('X3itemname');
// 	$isisatu = $this->input->post('X1quantity');
// 	$isidua = $this->input->post('X2quantity');
// 	$isitiga = $this->input->post('X3quantity');
//    $x['data2']=$this->m_login->lihat_user($fildsatu,$filddua,$fildtiga,$isisatu,$isidua,$isitiga);
//    $this->load->view('tabulasi1',$x);
// }
	//$x['data2']=$this->m_login->lihat_user($fildsatu,$filddua,$fildtiga,$isisatu,$isidua,$isitiga);
	//$this->load->view('tabulasi1',$x);



	// function datacustomer(){
	// 	if (isset($_POST['X1itemname']) == ''){
	// 		$_POST['X1itemname'] = $_POST['X1itemname'];
	// 	}else{
	// 		$_POST['X1itemname'] = $_POST['X1itemname'];
	// 	}
		
	// 	if (isset($_POST['X2itemname']) == ''){
	// 		$_POST['X2itemname'] = $_POST['X2itemname'];
	// 	}else{
	// 		$_POST['X2itemname'] = $_POST['X2itemname'];
	// 	}
		
	// 	if (isset($_POST['X3itemname']) == ""){
	// 		$_POST['X3itemname'] = $_POST['X3itemname'] ;
	// 	}else{
	// 		$_POST['X3itemname'] = $_POST['X3itemname'] ;
	// 	}


	
	// if (isset($_POST['X1quantity']) == " "){
	// 	$_POST['X1quantity'] = "*";
	// }else{
	// 	$_POST['X1quantity'] = $_POST['X1quantity'] ;
	// }
	
	// if (isset($_POST['X2quantity']) == " "){
	// 	$_POST['X2quantity'] = "*";
	// }else{
	// 	$_POST['X2quantity'] =  $_POST['X2quantity'];
	// }
	
	// if (isset($_POST['X3quantity']) == " "){
	// 	$_POST['X3quantity'] = "*";
	// }else{
	// 	$_POST['X3quantity'] = $_POST['X3quantity'];
	// }
	
	// $fildsatu = $this->input->post('X1itemname');
	// $filddua = $this->input->post('X2itemname');
	// $fildtiga = $this->input->post('X3itemname');
	// $isisatu = $this->input->post('X1quantity');
	// $isidua = $this->input->post('X2quantity');
	// $isitiga = $this->input->post('X3quantity');


	
//---Filter Saringan air

// if(($fildsatu != '') && (($filddua != '') && ($fildtiga != ''))){	
// $x['data2']=$this->m_login->lihat_user($fildsatu,$filddua,$fildtiga,$isisatu,$isidua,$isitiga);
// $this->load->view('tabulasi1',$x);
// }

// if(($kolum1 != '') && (($kolum2 != '') && ($kolum3  == 'ALL2'))){	
// $x['data3']=$this->m_login->lihat_usertiga($kolum1,$kolum2,$isikol1,$isikol2);
// $this->load->view('tabulasi2',$x);
// }

// if(($fildsatu != '') && (($filddua != '') && ($fildtiga == 'ALL'))){	
// $x['data3']=$this->m_login->lihat_usertiga($fildsatu,$filddua,$isisatu,$isidua);
//$this->load->view('tabulasi1',$x);
//}

// if(($fildsatu == '$fildsatu') && (($filddua == 'ALL') && ($fildtiga == '$fildtiga'))){	
// $x['data2']=$this->m_login->lihat_userdua($fildsatu,$fildtiga,$isisatu,$isitiga);
// $this->load->view('tabulasi1',$x);
// }

// if(($fildsatu == '$fildsatu') && (($filddua == 'ALL2') && ($fildtiga == '$fildtiga'))){	
// $x['data2']=$this->m_login->lihat_userdua($fildsatu,$fildtiga,$isisatu,$isitiga);
// $this->load->view('tabulasi1',$x);
// }

// if(($fildsatu == '$fildsatu') && (($filddua == 'ALL') && ($fildtiga == 'ALL2'))){	
// $x['data2']=$this->m_login->lihat_userempat($fildsatu,$isisatu);
// $this->load->view('tabulasi1',$x);
// }


// if(($fildsatu == '$fildsatu') && (($filddua == 'ALL2') && ($fildtiga == 'ALL'))){	
// $x['data2']=$this->m_login->lihat_userempat($fildsatu,$isisatu);
// $this->load->view('tabulasi1',$x);
// }

// if(($filddua == 'ALL') && (($fildtiga =='ALL2'))){
// 	$x['data2']=$this->m_login->lihat_user($fildsatu,$isisatu);
// 	}else{
// 		$x['data2']=$this->m_login->lihat_user($fildsatu,$filddua,$fildtiga,$isisatu,$isidua,$isitiga);
// 	}

// 	if(($filddua == 'ALL2') && (($fildtiga =='ALL'))){
// 	$x['data2']=$this->m_login->lihat_user($fildsatu,$isisatu);
// 	}else{
// 		$x['data2']=$this->m_login->lihat_user($fildsatu,$filddua,$fildtiga,$isisatu,$isidua,$isitiga);
// 	}


// 	if(($filddua == '$filddua') && (($fildtiga =='ALL'))){
// 		$x['data2']=$this->m_login->lihat_user($fildsatu,$filddua,$isisatu,$isidua);
// 		}else{
// 			$x['data2']=$this->m_login->lihat_user($fildsatu,$filddua,$fildtiga,$isisatu,$isidua,$isitiga);
// 		}

// 		if(($filddua == '$filddua') && (($fildtiga =='ALL2'))){
// 			$x['data2']=$this->m_login->lihat_user($fildsatu,$filddua,$isisatu,$isidua);
// 			}else{
// 				$x['data2']=$this->m_login->lihat_user($fildsatu,$filddua,$fildtiga,$isisatu,$isidua,$isitiga);
// 			}
		

// 	if(($filddua == 'ALL') && (($fildtiga =='$fildtiga'))){
// 		$x['data2']=$this->m_login->lihat_user($fildsatu,$fildtiga,$isisatu,$isitiga);
// 		}else{
// 			$x['data2']=$this->m_login->lihat_user($fildsatu,$filddua,$fildtiga,$isisatu,$isidua,$isitiga);
// 		}

// 		if(($filddua == 'ALL2') && (($fildtiga =='$fildtiga'))){
// 			$x['data2']=$this->m_login->lihat_user($fildsatu,$fildtiga,$isisatu,$isitiga);
// 			}else{
// 				$x['data2']=$this->m_login->lihat_user($fildsatu,$filddua,$fildtiga,$isisatu,$isidua,$isitiga);
// 			}
	

			
// 			if(($filddua == 'ALL') && (($fildtiga =='$fildtiga'))){
// 				$x['data2']=$this->m_login->lihat_user($fildsatu,$fildtiga,$isisatu,$isitiga);
// 				}else{
// 					$x['data2']=$this->m_login->lihat_user($fildsatu,$filddua,$fildtiga,$isisatu,$isidua,$isitiga);
// 				}

	//$x['data2']=$this->m_login->lihat_user($fildsatu,$filddua,$fildtiga,$isisatu,$isidua,$isitiga);
	//echo json_encode($x);


	//$data_session = array('nama' => $nokim,'penerima' => $penerima, 'namapen' =>$tally,'status' => "login");
		 // $this->load->library('session');
		//$this->session->set_userdata($data_session);

	// $this->load->view('tabulasi1',$Trans_Id,$Trans_Number,$Customer_Country_Code,$Customer_ID,$Dist_Name,$Csd_Id);
	//if(isset($x)){
	//  $this->load->view('tabulasi1',$x);
	//}
}

//Development phase: View Transaction Detail (product purchase, total payment, discount, delivery fee, payment channel, list of transaction under same delivery, etc)

function ViewTransactionDetail(){
	$ida = $this->input->get('id');
//echo $ida;
$lihat = $this->m_login->lihat_tabel($ida);

if($lihat > 0){
		
	$data_session3 = array('ida' => $ida);

$this->session->set_userdata($data_session3);
// $this->load->view('tabulasi4',$data_session3);
$this->load->view('v_adminT4',$data_session3);
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