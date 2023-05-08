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
	<link rel="stylesheet" type="text/css" href="skin.css">
</head>
<body>

<div class="h1">Daftar Nasabah Resmi</div>
<a href="insert.php" ><button title="submit" style="	
	border: none;
	background-color: salmon;
	font-size: 20px;
	color: white;
	border-radius: 50px;
	margin: 0 0 100px 500px;
	transition-duration: 0.4s;
	width: 340px; 
	padding: 12px 24px;
	cursor: pointer;">SIGN ACCOUNT</button></a>

	<div class="container">
	<table border="3" cellpadding="5" cellspacing="0" class="aa">
		<tr>
			<th>No.</th>
			<th>Aksi</th>
			<th>Nama</th>
			<th>Nomor</th>
			<th>Foto Profil</th>
			<th>Status</th>
			<th>Email</th>
		</tr>

		<?php $i = 1; ?>
		<?php foreach ($nasabah as $nas) : ?>
		<tr>
			<td><?= $i; ?></td>
			<td>
				<a href="ubah.php?ID=<?= $nas["ID"]; ?>">Ubah</a> |
				<a href="hapus.php?ID=<?= $nas["ID"]; ?>" onclick="return confirm('yakin');">Hapus</a>
			</td>
			<td><?= $nas["nama"]; ?></td>
			<td><?= $nas["nomor"]; ?></td>
			<td><img src="img/<?= $nas["gambar"]; ?>" width="70px"></td>
			<td><?= $nas["status"]; ?></td>
			<td><?= $nas["email"]; ?></td>
		</tr>
		<?php ++$i; ?>
		<?php endforeach; ?>
	</table></div>
</body>
</html>