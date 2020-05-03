<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
	session_start();
class M_login extends CI_Controller {

	public function __construct()
	{

		parent::__construct();
		$this->load->library('session');

	}
	
    public function login_user($nokim,$penerima) {
    	$data = array();
		
		$this->dblib_shop->db_open(); // membuka koneksi database
		
		$q = "select * from Trans_Header where Customer_Id = '$nokim' And Dist_Name = '$penerima'";  // query string
        $rs = $this->dblib_shop->query($q); // syntax untuk menjalankan query
				
	    // if ($rs !=''){
		// 	echo $nokim;
		// 	echo $penerima;
		// 	echo "DATA ADA";
        //     return true;
        // }
        // else{
        //     return false;
        // }
		
		while (!$rs->EOF){  // syntax untuk fetch result query
			
			// --------- parsing result ke array ------- //
			$data = array();
			foreach ($rs->Fields as $v) {
				$data[$v->Name] = trim($v->value);
			}
			// ------------------------------------------//
			
			echo $data['Trans_Id']."<br/>"; // menampilkan value dari field
			echo $data['Receiver_Name']."<br/>"; // menampilkan value dari field
			
			$cek=1;
			$nokim;
			$penerima;
			// $jack= $this->field_data(array('Trans_Delivery_Number'=>$nokim,'Receiver_Name'=>$penerima));
			//return true;
			
			$rs->moveNext(); // syntax untuk melanjutkan ke row berikutnya... wajib ada!!
			return true;
		}

		//   if ($data[] !=''){
			
		// 	echo "DATA ADA";
        //     return true;
        // }
        // else{
        //     return false;
        // }
		
		$this->dblib_shop->db_close(); // menutup koneksi database
		

	}
	public function lihat_user($fildsatu,$filddua,$fildtiga,$isisatu,$isidua,$isitiga) {
    	$data2 = array();
		
		$this->dblib_shop->db_open(); // membuka koneksi database

		// $fildsatu = $satu;
		// $filddua = $dua;
		// $fildtiga = $tiga;
		
        //$q = "select * from Trans_Header where Customer_Id = '$nokim' And Dist_Name = '$penerima'";  // query string
		// $w = "select * from Trans_Header where '$fildsatu' = '$isisatu' And '$filddua' = '$isidua' And '$fildtiga' = '$isitiga'";  // query string
		//$w = "select * from Trans_Header where Trans_Id = '$isisatu' And Trans_Number = '$isidua' And Customer_ID = '$isitiga'";  // query string
		$w = "select * from Trans_Header where $fildsatu = '$isisatu' And $filddua = '$isidua' And $fildtiga = '$isitiga'";  // query string
        $rs2 = $this->dblib_shop->query($w); // syntax untuk menjalankan query
				
	    // if ($rs !=''){
		// 	echo $nokim;
		// 	echo $penerima;
		// 	echo "DATA ADA";
        //     return true;
        // }
        // else{
        //     return false;
        // }
		
		while (!$rs2->EOF){  // syntax untuk fetch result query
			
			// --------- parsing result ke array ------- //
			$data2 = array();
			foreach ($rs2->Fields as $v) {
				$data2[$v->Name] = trim($v->value);
			}
			// ------------------------------------------//
			$Trans_Id=$data2['Trans_Id'];
			$Trans_Number=$data2['Trans_Number'];
			$Trans_Number_Origin=['Trans_Number_Origin'];
			$Customer_Country_Code=['Customer_Country_Code'];
			$Customer_ID=['Customer_ID'];
			$Dist_Name=['Dist_Name'];
			$Csd_Id=['Csd_Id'];
			// echo $data2['Trans_Id']."<br/>"; // menampilkan value dari field
			// echo $data2['Trans_Number']."<br/>";
			// echo $data2['Trans_Number_Origin']."<br/>";
			// echo $data2['Customer_Country_Code']."<br/>";
			// echo $data2['Customer_ID']."<br/>";
			// echo $data2['Dist_Name']."<br/>"; // menampilkan value dari field
			// echo $data2['Csd_Id']."<br/>";
			
			// $cek=1;
			// $nokim;
			// $penerima;
			// $jack= $this->field_data(array('Trans_Delivery_Number'=>$nokim,'Receiver_Name'=>$penerima));
			//return true;
			
			$rs2->moveNext(); // syntax untuk melanjutkan ke row berikutnya... wajib ada!!
			
		}

		$this->dblib_shop->db_close(); // menutup koneksi database
		return $data2;
		//$this->load->view('tabulasi1', $data2);

	}
	

	public function lihat_usertiga($fildsatu,$filddua,$isisatu,$isidua) {
    	$data3 = array();
		
		$this->dblib_shop->db_open(); // membuka koneksi database

		// $fildsatu = $satu;
		// $filddua = $dua;
		// $fildtiga = $tiga;
		
        //$q = "select * from Trans_Header where Customer_Id = '$nokim' And Dist_Name = '$penerima'";  // query string
		// $w = "select * from Trans_Header where '$fildsatu' = '$isisatu' And '$filddua' = '$isidua' And '$fildtiga' = '$isitiga'";  // query string
		//$w = "select * from Trans_Header where Trans_Id = '$isisatu' And Trans_Number = '$isidua' And Customer_ID = '$isitiga'";  // query string
		$w3 = "select * from Trans_Header where $fildsatu = '$isisatu' And $filddua = '$isidua'";  // query string
        $rs3 = $this->dblib_shop->query($w3); // syntax untuk menjalankan query
				
	    // if ($rs !=''){
		// 	echo $nokim;
		// 	echo $penerima;
		// 	echo "DATA ADA";
        //     return true;
        // }
        // else{
        //     return false;
        // }
		
		while (!$rs3->EOF){  // syntax untuk fetch result query
			
			// --------- parsing result ke array ------- //
			$data3 = array();
			foreach ($rs3->Fields as $v) {
				$data3[$v->Name] = trim($v->value);
			}
			// ------------------------------------------//
			$Trans_Id=$data3['Trans_Id'];
			$Trans_Number=$data3['Trans_Number'];
			$Trans_Number_Origin=['Trans_Number_Origin'];
			$Customer_Country_Code=['Customer_Country_Code'];
			$Customer_ID=['Customer_ID'];
			$Dist_Name=['Dist_Name'];
			$Csd_Id=['Csd_Id'];
			// echo $data2['Trans_Id']."<br/>"; // menampilkan value dari field
			// echo $data2['Trans_Number']."<br/>";
			// echo $data2['Trans_Number_Origin']."<br/>";
			// echo $data2['Customer_Country_Code']."<br/>";
			// echo $data2['Customer_ID']."<br/>";
			// echo $data2['Dist_Name']."<br/>"; // menampilkan value dari field
			// echo $data2['Csd_Id']."<br/>";
			
			// $cek=1;
			// $nokim;
			// $penerima;
			// $jack= $this->field_data(array('Trans_Delivery_Number'=>$nokim,'Receiver_Name'=>$penerima));
			//return true;
			
			$rs3->moveNext(); // syntax untuk melanjutkan ke row berikutnya... wajib ada!!
			
		}

		$this->dblib_shop->db_close(); // menutup koneksi database
		return $data3;
		//$this->load->view('tabulasi1', $data2);

    }


	public function lihat_userempat($fildsatu,$isisatu) {
    	$data4= array();
		
		$this->dblib_shop->db_open(); // membuka koneksi database

		
		$q = "select * from Trans_Header where $fildsatu Like '%$isisatu' order by Trans_Id ";  // query string
		$rs4 = $this->dblib_shop->query($q); // syntax untuk menjalankan query
			
		$this->dblib_shop->db_close(); // menutup koneksi database
		$data=array($fildsatu,$isisatu);
		return $data;
	
	}
	

	public function lihat_tabel($ida) {
    	$datas= array();
		
		$this->dblib_shop->db_open(); // membuka koneksi database

		
		$q = "select * from Trans_Header where Trans_id = '$ida'";  // query string
		$rs6 = $this->dblib_shop->query($q); // syntax untuk menjalankan query
			
		$this->dblib_shop->db_close(); // menutup koneksi database
		$datas=array($ida);
		return $datas;
	
    }


}