
	<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>BPBD | Edit Lapor Pengungsi</title>
    <link href="<?php echo base_url('../assets/bootstrap/css/bootstrap.min.css') ?>" rel="stylesheet">
    <link href="<?php echo base_url('assets/bootstrap/css/bootstrap.css') ?>" rel="stylesheet">
    <link href="<?php echo base_url('assets/bootstrap/css/bootstrap-theme.css') ?>" rel="stylesheet">
 
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

</head>
<body>

  <div class="container-fluid">
    <div class="row p1 m-3 border rounded-lg shadow-lg " style="background-color: #958B8B">
      <div class="col-lg-12">
        <div class="judul">
          <h5 class="font-weight-bold">Persetujuan Laporan Pengungsi</h5>
        </div>
      </div>
    </div>

    <div class="row pl-1 pr-1 bg-light ml-3 mr-3 mb-3 rounded-lg shadow ">
      <div class="col-lg-12">
        <div class="d-flex justify-content-start">


	<?php foreach($lapor_pengungsi as $tampil){ ?>


	<form action="<?php echo base_url(). 'lapor/edit_data_laporan_bencana'; ?>" method="post">

<div class="row">
      <div class="col">
      Nama  
    </div><br>
    <div class="col">
     
	<input type="text" name="nama"  readonly="readonly" value="<?php echo $tampil->nama ?>"><br><br>
    </div>

    </div>

    <div class="row">
      <div class="col">
      Email
    </div>
    <div class="col">
      <input type="text" name="email" readonly="readonly" value="<?php echo $tampil->email ?>"><br><br>
    </div>
    </div>

    <div class="row mt-2">
      <div class="col">
      No. HP
    </div>
    <div class="col">
     <input type="text" readonly="readonly" name="no_hp" value="<?php echo $tampil->no_hp ?>"><br><br>
    </div>
    </div>

    <div class="row mt-2">
       <div class="col">
     Laporan Bencana
    </div>
    <div class="col">
        <input type="text" name="laporan" readonly="readonly" value="<?php echo $tampil->laporan ?>">
    </div>
    </div>

    <div class="row mt-2">
      <div class="col">
      Status Persetujuan
    </div>
    <div class="col">
     <input type="radio" name="status" value="disetujui"> Disetujui   <input type="radio" name="status" value="ditolak"> Ditolak
    </div>
    </div>

	<div class="row">
		<div class="col">
			<button class="btn-success mt-3 mb-1" type="submit">Update Persetujuan</button>
		</div>
	</div>
		

	</form>	
	<?php } ?>






        </div>
      </div>
    </div>


  </div>
  
</body>
</html>

