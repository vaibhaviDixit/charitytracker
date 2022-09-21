<?php 
require("model/Homemodel.php");
require("model/Loginmodel.php");

$Homemodel=new Homemodel();
$Loginmodel=new Loginmodel();

$donations=$Homemodel->getAllDonations();

$last=$Homemodel->getLastReceiptId();
$rid=$last+1;
$name="";
$phone="";
$addr="";
$totalamt="";

if(isset($_POST['adminlogin'])){
		$uname=$_POST['uname'];
		$pass=$_POST['pass'];

		if ($Loginmodel->AdminLogin($uname, $pass)) {
			$_SESSION['USER']="admin";
			redirect(SITE_PATH."?page=list");
		} else {
			alertMsg("Invalid username or password!");
			redirect(SITE_PATH."?page=login");
		}

		
}


if(isset($_POST['oldPass']) && isset($_POST['newPass']) && isset($_POST['renewp'])){


	$oldp=$_POST['oldPass'];
	$newp=$_POST['newPass'];
	$renewp=$_POST['renewp'];


	if($newp == $renewp){

		$adminRow=$Loginmodel->adminData();
		$dbpass=$adminRow['pass'];

		if(password_verify($oldp,$dbpass)){
			$insertPass = password_hash($newp, PASSWORD_BCRYPT);
		    
			if($Loginmodel->updateAdminPass($insertPass)){
				alertMsg("Password Changed Successfully!");
			}
			else{
				alertMsg("Unable to Update Password!");	
			}
		}
		else{
			alertMsg("Incorrect Old Password!");
		}

	}
	else{
			alertMsg("Password Not Matching!");
	}


}



if(isset($_GET['id']) && $_GET['id']>0){

	$id=$_GET['id'];
	$donation=$Homemodel->getDonationById($id);

	$rid=$donation['receiptnum'];
	$name=$donation['name'];
	$phone=$donation['phone'];
	$addr=$donation['address'];
	$totalamt=$donation['totalamt'];

}


if(isset($_POST['donate'])){

	if(!isset($_GET['id'])){

		if($Homemodel->checkRid($_POST)){
			alertMsg("Receipt Id already exists!");
		}
		else{

			$result=$Homemodel->saveNewDonor($_POST);
			if($result>0){
				alertMsg("Donor Added!");
				redirect(SITE_PATH."?page=list");
			}

		}
	}
	else{
			$result=$Homemodel->updateDonor($id,$_POST);
			if($result==1){
				redirect(SITE_PATH."?page=list");
			}
			else{
				alertMsg("Failed to update");
			}
		
	}
	
}

if(isset($_POST['pay'])){

	$result=$Homemodel->makePayment($_POST);
			if($result>0){
				alertMsg("Payment Added!");
				redirect(SITE_PATH."?page=list");
			}

}

?>