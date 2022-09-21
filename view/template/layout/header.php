<?php
   
      if(!isset($_SESSION['USER'])){
         redirect(SITE_PATH.'?page=login');
      }

?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title><?php echo SITE_NAME; ?></title>

   <!-- favicon-->
  <link rel="shortcut icon" href="view/static/img/favicon.png" type="image/svg+xml">

  <!-- CSS -->
  <link href="<?php echo SITE_PATH;?>view/static/css/style.css" rel="stylesheet">
  <link href="<?php echo SITE_PATH;?>view/static/css/bootstrap.min.css" rel="stylesheet">

     <!-- Font Awesome CSS -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
</head>

<body>


  <!-- ======= Header ======= -->
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <div class="container-fluid">
    <span class="navbar-brand mb-0 h1"><?php echo SITE_NAME; ?></span>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav">

        <li class="nav-item">
          <a class="nav-link" href="<?php echo SITE_PATH."?page=donation"; ?>">Add Donation</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="<?php echo SITE_PATH."?page=list"; ?>">List Donations</a>
        </li>
         <li class="nav-item">
          <a class="nav-link" href="<?php echo SITE_PATH."?page=changepass"; ?>">Change Password</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="<?php echo SITE_PATH."?page=logout"; ?>">Logout</a>
        </li>
      </ul>
    </div>
  </div>
</nav>

