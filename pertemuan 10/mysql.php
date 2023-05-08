<?php
//menyambungkan file
require 'funcs.php';


$nasabah = query("SELECT * FROM nasabah ")
//tambhakan kode ini jika ingin mengurutkan dari yg terbaru = ORDER BY ID DES

?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Perum Djohan</title>
	<link rel="stylesheet" type="text/css" href="skin.css">
  <style type="text/css">
    form {
  text-align: center;
  margin-bottom: 20px;
}

form input[type="search"] {
  background-color: #f2f2f2;
  border: none;
  padding: 10px;
  border-radius: 5px;
  width: 250px;
  font-size: 16px;
}

form button[type="submit"] {
  background-color: #4CAF50;
  border: none;
  color: white;
  padding: 10px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 16px;
  margin: 4px 2px;
  border-radius: 5px;
  cursor: pointer;
}

  </style>
</head>
<body>

<div class="h1">Daftar Nasabah Resmi</div>
<a href="insert.php" ><button title="submit" style="	
	border: none;
	background-color: salmon;
	font-size: 20px;
	color: white;
	border-radius: 50px;
  display: block;
	margin: 0 auto;
  outline: none;
	transition-duration: 0.4s;
	width: 340px; 
	padding: 12px 24px;
	cursor: pointer;">SIGN ACCOUNT</button></a>

	<form action="" method="post">
		<input type="search" name="keyword" placeholder="Search">
		<button type="submit" name="cari">CARI</button>
	</form>

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