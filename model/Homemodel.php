<?php 

require_once("model/database.php");


class Homemodel{

	private $db_handle;

	function __construct(){

		$this->db_handle=new Database();
	}

	function getAllDonations(){
		$sql="select * from donation order by id desc";
		$result=$this->db_handle->runBasicQuery($sql);
		return $result;
	}

	function getDonationById($id){
		$sql="select * from donation where id='$id' ";
		$result=$this->db_handle->runBasicQuery($sql);
		return $result[0];
	}

	function getLastReceiptId(){
		$sql="SELECT * FROM donation ORDER BY ID DESC LIMIT 1";
		$result=$this->db_handle->runBasicQuery($sql);

		if(!empty($result) && $result[0]['id']!=0){
			return $result[0]['id'];
		}
		return 0;
		
	}


	function saveNewDonor($params=array()){

		$data = [
		    'receiptnum' => $params['rid'],
		    'name' => $params['name'],
		    'phone' => $params['phone'],
		    'address' => $params['addr'],
		    'totalamt' => $params['donation']
		];

		$sql="INSERT INTO `donation`(`receiptnum`, `name`, `phone`, `address`, `totalamt`) VALUES (:receiptnum,:name,:phone,:address,:totalamt) ";
		$result=$this->db_handle->runInsertQuery($sql,$data);
		return $result;
	}

	function updateDonor($id,$params=array()){

		$data = [
		    'receiptnum' => $params['rid'],
		    'name' => $params['name'],
		    'phone' => $params['phone'],
		    'address' => $params['addr'],
		    'totalamt' => $params['donation'],
		    'id'=>$id
		];

		$sql="UPDATE `donation` SET `receiptnum`=:receiptnum,`name`=:name,`phone`=:phone,`address`=:address,`totalamt`=:totalamt WHERE id=:id";
		$result=$this->db_handle->runUpdateQuery($sql,$data);
		return $result;
	}

	function checkRid($params=array()){
		$rid=$params['rid'];
		$sql="select * from donation where receiptnum='$rid' ";
		$result=$this->db_handle->runBasicQuery($sql);

		if(empty($result)){
			return false;
		}
		return true;

	}

	function getPartialPayment($id){

		$sql="SELECT * FROM payments where refid='$id' ";
		$sql2="SELECT sum(amount) as paid FROM payments where refid='$id' ";

		$sum=$this->db_handle->runBasicQuery($sql2);
		$result=$this->db_handle->runBasicQuery($sql);
		$result[0]['paid']=$sum[0]['paid'];

		return $result;

	}

	function makePayment($params=array()){

		$data = [
		    'amount' => $params['amount'],
		    'remarks' => $params['remarks'],
		    'refid' => $params['id']
		];

		$sql="INSERT INTO `payments`(`refid`,`amount`, `remarks`) VALUES (:refid,:amount,:remarks) ";
		$result=$this->db_handle->runInsertQuery($sql,$data);
		return $result;
	}


}


?>