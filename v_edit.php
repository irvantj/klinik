<!DOCTYPE html>
<html>
<head>
	<title>Edit Dokter</title>
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

	<nav class="navbar navbar-light bg-light" style=" height: 50px; margin-bottom: 50px;">
	<a class="navbar-brand" style="color: #66ccff; font-weight: bold;">Kelola Pasien</a>
	</nav>

	<center>
		<h3 style="margin-bottom: 50px;">Edit Pasien</h3>
	</center>

	<div class="container" style="width: 400px; margin-bottom: 100px;">
	<?php foreach($pasien as $p){ ?>
		<form action="<?php echo site_url('Crud/update'); ?>" method="post">
			<div class="form-group">
				<label for="id_pasien">Id Pasien</label>
				<input type="hidden" class="form-control" name="id" value="<?php echo $p->id ?>">
				<input type="text" class="form-control" name="id_pasien" value="<?php echo $p->id_pasien ?>">
			</div>
			<div class="form-group">
				<label for="nama">nama</label>
				<input type="text" class="form-control" name="nama" value="<?php echo $p->nama ?>">
			</div>
			<div class="form-group">
				<label for="alamat">alamat</label>
				<input type="text" class="form-control" name="alamat" value="<?php echo $p->alamat ?>">
			</div>
			<div class="form-group">
				<label for="noHp">No Telepon</label>
				<input type="text" class="form-control" name="noHP" value="<?php echo $p->noHP ?>">
			</div>
			<div class="form-group">
				<label for="tglmasuk">Tanggal Masuk</label>
				<input type="date" class="form-control" name="tglmasuk" value="<?php echo $p->tglmasuk ?>">
			</div>
			<div class="form-group">
				<label for="penyakit">Penyakit</label>
				<input type="text" class="form-control" name="penyakit" value="<?php echo $p->penyakit ?>">
			</div>
			<div class="form-group">
				<label for="dokter">Dokter</label>
				<input type="text" class="form-control" name="dokter" value="<?php echo $p->dokter ?>">
			</div>
			<div class="form-group">
				<label for="obat">Obat</label>
				<input type="text" class="form-control" name="obat" value="<?php echo $p->obat ?>">
			</div>
			<button type="submit" class="btn btn-primary" value="Simpan" style="width: 370px;">Simpan</button>
		</form>
	<?php } ?>
	</div>

	<footer id="sticky-footer" class="py-4 bg-light text-white-50" style="margin-top: 200px;">
		<div class="container text-center">
			<small> </small>
		</div>
  	</footer>

</body>
</html>