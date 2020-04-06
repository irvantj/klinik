<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Pasien</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
	<style>

		.table{
			width: 1100px;
			margin-left: 10px;
		}
		 .panel-body{
			width: 100px;
		}
	</style>
</head>

<body>


	<nav class="navbar navbar-light bg-light" style="margin-bottom: 50px; width:100%;">
		<a class="navbar-brand" style="color: #66ccff; font-weight: bold;">Kelola Pasien</a>
	</nav>

<div class="container">
			<div class="form-group col-4" style="margin-left: 10px;">
				<button type="submit" class="btn btn-success"><a href="<?php echo base_url('Crud/tambah'); ?>" style="color: white;">Tambah Pasien</a></button>
			</div>

			<div class="row" style="margin-left: 650px;">
				<form class="navbar-form" action="<?php echo site_url('Crud/search')?>" method="post">
					<div class="form-row">
						<div class="form-group col-4">
							<select class="form-control" name="jeniscari">
								<option value="">---- Pilih ----</option>
								<option value="id_pasien"> Id Pasien </option>
								<option value="nama"> Nama </option>
								<option value="alamat"> Alamat </option>
								<option value="noHP"> No Handphone </option>
								<option value="tglmasuk"> tanggal masuk </option>
								<option value="penyakit"> Penyakit </option>
								<option value="obat"> obat </option>
							</select>
						</div>
						<div class="form-group col-4">
								<input type="text" name="tekscari" class="form-control" placeholder="Search">
						</div>
						<div class="form-group col-2">
							<button type="submit" class="btn btn-info"> Search </button>
						</div>
						<div class="form-group col-1">
							<button type="button" class="btn btn-secondary"><a href="<?php echo base_url('Crud/index'); ?>" style="color: white;">Reload</a></button>
						</div>
					</div>
				</form>
			</div>


			<div class="col-md-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">
			<table id="dtBasicExample" class="table table-hover">
				<tr>
					<th>NO</th>
					<th>Id Pasien</th>
					<th>Nama</th>
					<th>Alamat</th>
					<th>NoHP</th>
					<th>Tanggal Masuk</th>
					<th>Penyakit</th>
					<th>Dokter</th>
					<th>Obat</th>
					<th><center>Action</th>
				</tr>
				<?php
				$no = 1;
				foreach($pasien as $p){
				?>
				<tr>
					<td><?php echo $no++ ?></td>
					<td><?php echo $p->id_pasien ?></td>
					<td><?php echo $p->nama ?></td>
					<td><?php echo $p->alamat ?></td>
					<td><?php echo $p->noHP ?></td>
					<td><?php echo $p->tglmasuk ?></td>
					<td><?php echo $p->penyakit ?></td>
					<td><?php echo $p->dokter ?></td>
					<td><?php echo $p->obat ?></td>
						<td>
							<a class="btn btn-warning" href="<?php echo base_url('Crud/edit/'.$p->id) ?>" title="Edit Pasien ini" onclick="return confirm('Apakah Anda yakin akan mengedit data ini?');"> <span class="glyphicon glyphicon-edit"></span> Edit</a>
				    		<a class="btn btn-danger" href="<?php echo base_url('Crud/hapus/'.$p->id) ?>" title="Hapus Pasien ini" onclick="return confirm('Apakah Anda yakin akan hapus data ini?');"><span class="glyphicon glyphicon-trash"></span> Hapus</a></td>
						</td>
				</tr>
				<?php } ?>
			</table>
			<div class="footer" style="margin-bottom: 100px;">
			</div>
	</div>
</div>

</body>
</html>