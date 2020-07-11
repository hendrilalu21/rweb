<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">

	 <!-- Bootstrap -->
    <link href="<?php echo base_url('../assets/bootstrap/css/bootstrap.min.css') ?>" rel="stylesheet">
    <link href="<?php echo base_url('assets/bootstrap/css/bootstrap.css') ?>" rel="stylesheet">
    <link href="<?php echo base_url('assets/bootstrap/css/bootstrap-theme.css') ?>" rel="stylesheet">
 
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

	<title>Login | BPBD Yogayakarta</title>
</head>
<body>

	 <div class="container">
      <div class="row justify-content-center mt-5">
        <div class="col-md-4">
          <div class="card">
            <div class="card-header  mb-0" style="background-color: #E76005;"><h5 class="text-center"> <span class="font-weight-bold text-white">LOGIN ADMIN</span></h5></div>
            <div class="card-body">
              <form action="" method="post">
              	  <?php echo validation_errors(); ?>
 				          <?php echo form_open('Lapor/aksi'); ?>
                <div class="form-group">
                  <input type="text" name="username" class="form-control" placeholder="Username" required="isi username">
                </div>
                <div class="form-group">
                  <input type="password" name="password" class="form-control" placeholder="Password" required="isi password">
                </div>
                
                <div class="form-group">
                  <input type="submit" value="Login" class="btn btn-dark btn-block">
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
</body>
</html>

