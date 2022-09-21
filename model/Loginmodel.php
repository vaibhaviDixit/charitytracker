<?php 

require_once("model/database.php");


class Loginmodel{

	private $db_handle;

	function __construct(){

		$this->db_handle=new Database();
	}

	function AdminLogin($uname,$pwd){

		$sql="select * from admin where uname='$uname' ";
		$result=$this->db_handle->runBasicQuery($sql);

		if(count($result)>0){
			if (password_verify($pwd, $result[0]['pass'])){
				return true;
			}
		}
		return false;

	}

	function adminData(){

		$sql="select * from admin";
		$result=$this->db_handle->runBasicQuery($sql);
		return $result[0];
	}

	function updateAdminPass($pass){

		$data=['pass'=> $pass];

		$sql="update admin set pass=:pass";
		
		return $this->db_handle->runUpdateQuery($sql,$data);


	}
	




}


?>