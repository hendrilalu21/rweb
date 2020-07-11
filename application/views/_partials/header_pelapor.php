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

</head>
<body>

	<div class="container-fluid">
		<div class="row bg-dark">
			<div class="col-lg-12">
				<div class="d-flex justify-content-center pt-3">
					<h3 class="font-weight-bold text-light">Website BPBD Yogyakarta</h3>
				</div>
				
			</div>
			<div class="col-lg-12">
				<div class="d-flex justify-content-center border-bottom pb-5">
					<h5 class="font-weight-bold  text-danger">Lapor Bencana Dan Pengungsi</h5>
				</div>
				
			</div>
		</div>

		<div class="navigasi">
			<div class="row mt-1 p-1" style="background-color: #E76005">
				<div class="col-lg-10">
					<div class="d-flex justify-content-start">
						<ul class="nav">
							  <li class="nav-item">
							    <a class="nav-link font-weight-bold border-left" href="<?php echo site_url('lapor/') ?>" style="color: black; font-size: 1.3vw; ">Home</a>
							  </li>
							  <li class="nav-item">
							     <a class="nav-link font-weight-bold border-left" href="<?php echo site_url('lapor/tambah_laporan_bencana') ?>" style="color: black; font-size: 1.3vw;">Lapor Bencana</a>
							  </li>
							  <li class="nav-item">
							     <a class="nav-link font-weight-bold border-left" href="<?php echo site_url('lapor/tambah_laporan_pengungsi') ?>" style="color: black; font-size: 1.3vw;">Lapor Pengungsi</a>
							  </li>
							  
						</ul>
					</div>
				</div>
				<div class="col-lg-2 pt-2">
					<div class="d-flex justify-content-end">
						<div class="font-weight-bold border bg-light pl-2 pr-2"> <a href="<?php echo site_url('lapor/login') ?>">Login</a> </div>
					</div>
				</div>

			</div>
		</div>
	</div>
	
</body>
</html>