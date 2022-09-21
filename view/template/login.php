<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title><?php echo SITE_NAME; ?></title>

   <!-- favicon-->
  <link rel="shortcut icon" href="view/static/img/favicon.png" type="image/svg+xml">

  <!-- CSS -->
  <link href="<?php echo SITE_PATH;?>view/static/css/bootstrap.min.css" rel="stylesheet">

     <!-- Font Awesome CSS -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

  <style type="text/css">

    .card{
      background: #010929 !important;
      color: #fff !important;
    }

  </style>
</head>

<body>


  <div class="container d-flex flex-column">
      <div class="row vh-100">
        <div class="col-sm-10 col-md-8 col-lg-6 mx-auto d-table h-100">
          <div class="d-table-cell align-middle">

            <div class="text-center mt-2">
              <h1 class="h3">Admin Login</h1>
              
            </div>

            <div class="card">
              <div class="card-body">
                <div class="m-sm-4">
                  <form method="post">
                    <div class="mb-4 forminput">
                      <label class="form-label formlabel">Username</label>
                      <input class="form-control form-control-lg fs-6" type="text" name="uname" placeholder="Enter your Username" />
                    </div>
                    <div class="mb-4 forminput">
                      <label class="form-label formlabel">Password</label>
                      <input class="form-control form-control-lg fs-6" type="password" name="pass" placeholder="Enter your password" />
                      
                    </div>
                    <div>
                      
                    </div>
                    <div class="text-center mt-3">
                      
                      <div class="text-center mt-3">
                        <button type="submit" class="btn btn-primary" name="adminlogin">Log in</button>
                      </div>
                    
                      </div>
                    </div>
                  </form>
                </div>
              </div>
            </div>

          </div>
        </div>
      </div>
    </div>



<!-- js -->
    <script src="<?php echo SITE_PATH;?>view/static/js/jquery.min.js"></script>
    <script src="<?php echo SITE_PATH;?>view/static/js/main.js"></script>
    <script src="<?php echo SITE_PATH;?>view/static/js/bootstrap.min.js"></script>
   <script src="<?php echo SITE_PATH; ?>view/static/js/datatables.js"></script>

</body>
</html>