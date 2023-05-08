<?php
//menyambungkan file
require 'funcs.php';
$nasabah = query("SELECT * FROM nasabah")
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Perum Djohan</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>

<div class="h1">Daftar Nasabah Resmi</div>
	<div class="container">
	<table border="3" cellpadding="7" cellspacing="0">
		<tr>
			<th>No.</th>
			<th>Aksi</th>
			<th>Nama</th>
			<th>Nomor</th>
			<th>Foto Profil</th>
			<th>Jenis KPR</th>
			<th>Status</th>
			<th>Email</th>
		</tr>

		<?php $i = 1; ?>
		<?php foreach ($nasabah as $nas) : ?>
		<tr>
			<td><?= $i; ?></td>
			<td>
				<a href="">Ubah</a> |
				<a href="">Hapus</a>
			</td>
			<td><?= $nas["Nama"]; ?></td>
			<td><?= $nas["Nomor Pembelian"]; ?></td>
			<td><img src="img/<?= $nas["Gambar"]; ?>" width="70px"></td>
			<td><?= $nas["Jenis KPR"]; ?></td>
			<td><?= $nas["Status"]; ?></td>
			<td><?= $nas["Email"]; ?></td>
		</tr>
		<?php ++$i; ?>
		<?php endforeach; ?>
	</table></div>
</body>
</html>