<!DOCTYPE html>
<html>
<head>
	<title>Tambah Pasien</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
	<style>
		.table{
			margin-left: 120px;
		}
		.panel-body{
			width: 100px;
		}
	</style>
</head>
<body>
	<nav class="navbar navbar-light bg-light" style="margin-bottom: 50px;">
		<a class="navbar-brand"></a>
	</nav>
	<center>
		<h3 style="margin-bottom: 50px;">Tambah Pasien baru</h3>
	</center>

	<div class="container" style="width: 400px; margin-bottom: 100px;">

		<form action="<?php echo site_url('crud/tambah_aksi'); ?>" method="post">
		<div class="form-group">
				<label for="id_pasien">id pasien</label>
				<input type="text" class="form-control" name="id_pasien" aria-describedby="id_pasien" placeholder="id pasien">
			</div>
			<div class="form-group">
				<label for="nama">Nama</label>
				<input type="text" class="form-control" name="nama" aria-describedby="nama" placeholder="Nama">
			</div>
			<div class="form-group">
				<label for="alamat">alamat</label>
				<input type="text" class="form-control" name="alamat" placeholder="Alamat">
			</div>
			<div class="form-group">
				<label for="noHp">No Telepon</label>
				<input type="text" class="form-control" name="noHP" placeholder="No Telepon">
			</div>
			<div class="form-group">
				<label for="tglmasuk">Tanggal Masuk</label>
				<input type="date" class="form-control" name="tglmasuk" placeholder="Tanggal Masuk">
			</div>
			<div class="form-group">
				<label for="penyakit">Penyakit</label>
				<input type="text" class="form-control" name="penyakit" placeholder="Penyakit">
			</div>
			<div class="form-group">
				<label for="dokter">Dokter</label>
				<input type="text" class="form-control" name="dokter" placeholder="Dokter">
			</div>
			<div class="form-group">
				<label for="obat">Obat</label>
				<input type="text" class="form-control" name="obat" placeholder="Obat">
			</div>

			<button type="submit" class="btn btn-primary" value="Tambah" style="width: 370px;">Tambah</button>

		</form>
	</div>
</body>
</html>