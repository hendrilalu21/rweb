<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>BPBD | Data Laporan Bencana</title>
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
					<h5 class="font-weight-bold">Data Laporan Bencana</h5>
				</div>
			</div>
		</div>

		<div class="row pl-1 pr-1 bg-light ml-3 mr-3 mb-3 rounded-lg shadow ">
			<div class="col-lg-12">
				<div class="d-flex">
					
						<table class="table table-striped">
						  <thead>
						    <tr>
						      <th scope="col">Nama</th>
						      <th scope="col">Email</th>
						      <th scope="col">No. Hp</th>
						      <th scope="col">Isi Laporan</th>
						      <th scope="col">Status (Disetujui/Ditolak) </th>
						      <th scope="col">Aksi </th>
						    </tr>
						  </thead>
						 
							<?php foreach ($lapor_bencana as $tampil): ?>

								<tr>
									<td hidden="hidden"><?php echo $tampil['id']; ?></td>
									<td><?php echo $tampil['nama']; ?></td>
									<td><?php echo $tampil['email']; ?></td>
									<td><?php echo $tampil['no_hp']; ?></td>
									<td><?php echo $tampil['laporan']; ?></td>
									<td><?php echo $tampil['status']; ?></td>

									<td>

										<div class="button" onclick="javacript: return confirm('Yakin hapus?')">
											<?php echo anchor('lapor/hapus_laporan_bencana/'.$tampil['id'],'Hapus'); ?>
										</div>
									

									
										
										<div class="button">
											<?php echo anchor('lapor/edit_laporan_bencana/'.$tampil['id'],'Edit'); ?>
										</div>

									</td>


								</tr>
		
	<?php endforeach ?>


						</table>






				</div>
			</div>
		</div>


	</div>
	
</body>
</html>