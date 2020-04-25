<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Dblib_shop {
	public $myServer = "192.168.0.11";
	public $myUser = "sa";
	public $myPass = "m15h4rm0n1";
	public $myDB = "HDI_STORE_DEV";
    public $conn;
	public $connStr;
	
	public function __construct()
    {
        $this->ci =& get_instance();
        $this->ci->output->set_header("HTTP/1.0 200 OK");
        $this->ci->output->set_header("HTTP/1.1 200 OK");
        $this->ci->output->set_header('Last-Modified: '.gmdate('D, d M Y H:i:s').' GMT');
        $this->ci->output->set_header("Cache-Control: no-store, no-cache, must-revalidate");
        $this->ci->output->set_header("Cache-Control: post-check=0, pre-check=0", false);
        $this->ci->output->set_header("Pragma: no-cache");		
    }
	
	public function db_open(){
        $this->conn = new COM ("ADODB.Connection") or die("Cannot start ADO");
        $this->connStr = "PROVIDER=SQLOLEDB;SERVER=".$this->myServer.";UID=".$this->myUser.";PWD=".$this->myPass.";DATABASE=".$this->myDB;
        $this->conn->open($this->connStr);
    }
	
	public function db_begin_trans(){
		$this->conn->BeginTrans();
	}
	
	public function db_commit_trans(){
		$this->conn->CommitTrans();
	}
	
	public function db_rollback_trans(){
		$this->conn->RollbackTrans();
	}
	
	public function db_close(){
        $this->conn->Close();
        $this->conn = null;
    }	
	
	
	public function query($query){
        return $this->conn->execute($query);
    }
	

	public function errMsg(){
        return $this->conn->Errors();
    }	
	
	public function getLastID(){
    	$id = '';
    	 $rs = $this->conn->execute("select @@identity as _id");
    	 if (!$rs->EOF){
    	 	$id = $rs->Fields['_id']->value;
    	 }

    	 return $id;
    }
	
	
	public function getLastID2(){
		$id = $this->conn->insert_id();
    	return $id;
    }
	
}
