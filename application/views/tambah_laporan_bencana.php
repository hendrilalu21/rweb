<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>BPBD | Lapor Bencana</title>
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
          <h5 class="font-weight-bold">Form Lapor Bencana</h5>
        </div>
      </div>
    </div>

    <div class="row pl-1 pr-1 bg-light ml-3 mr-3 mb-3 rounded-lg shadow ">
      <div class="col-lg-12">
        <div class="d-flex justify-content-start">




<form method="post" action="<?php echo base_url().'lapor/proses_tambah_laporan_bencana'; ?>">



    <div class="row mt-1">
      <div class="col">
      Nama  
    </div><br>
    <div class="col">
      <input type="text" name="nama" required=""><br><br>
    </div>

    </div>

    <div class="row">
      <div class="col">
      Email
    </div>
    <div class="col">
      <input type="email" name="email" required="">
    </div>
    </div>

    <div class="row mt-4">
      <div class="col">
      No. HP
    </div>
    <div class="col">
      <input type="text" name="no_hp" required="required">
    </div>
    </div>

    <div class="row mt-4">
       <div class="col">
      Isi Laporan
    </div>
    <div class="col">
        <textarea name="laporan" id="" cols="18" rows="4" required="required"></textarea>
    </div>
    </div>

    <div class="row mt-3 mb-4">
      <div class="col">
        <input type="radio" name="status" value="belum ada" checked="checked" hidden="hidden">

  <input class="btn-success" type="submit" value="Simpan">
      </div>
    </div>


    
    
    
   
  

  

</form>





        </div>
      </div>
    </div>


  </div>
  
</body>
</html>