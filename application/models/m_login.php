<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
	session_start();
class M_login extends CI_Controller {

	public function __construct()
	{

		parent::__construct();
		

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
}