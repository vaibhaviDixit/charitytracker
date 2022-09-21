<?php 

session_start();

include('settings/constants.php');
include('settings/functions.php');
require('service/donationService.php');

$page="login";

if(isset($_GET['page'])){
	$page=$_GET['page'];
}

if($page=="logout"){
	require('view/template/logout.php');
}

if(isset($_SESSION['USER']) and $_SESSION['USER']=="admin"){

	require('view/template/layout/header.php');

	if($page=="list"){
		require('view/template/index.php');
	}
	elseif($page=="donation"){
		require('view/template/donation.php');
	}
	elseif($page=="changepass"){
		require('view/template/changepass.php');
	}
	

	require('view/template/layout/footer.php');
}
else{
	require('view/template/login.php');
}


?>