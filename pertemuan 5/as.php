<?php 
$nasabah = 
[
	["nama" => "Herlangga Djohan Nussy", "nomor" => "000122605", "rek" => "BCA", "status" => "Menikah", "gambar" => "mudia.jpg" ],
	["nama" => "Mudia Aprianti", "nomor" => "000464605", "rek" => "BRI", "status" => "Menikah", "gambar" => "angga.png" ],
	["nama" => "Rian Batagor", "nomor" => "000171905", "rek" => "BTN", "status" => "Belum Menikah", "gambar" => "rian.jpeg" ],
	["nama" => "Parhan Kebab", "nomor" => "000121212", "rek" => "BCA", "status" => "Belum Menikah", "gambar" => "parhan.jpeg" ],
]
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Array Assosiative</title>
</head>
<body>

<h1>Daftar Nama Nasabah</h1>
	
	<?php foreach ($nasabah as $nas) : ?>
		<ul style="display: inline-block;">
			<li><img src="img/<?= $nas["gambar"]; ?>" width="100px"></li>
			<li><?= $nas["nama"]; ?></li>
			<li><?= $nas["nomor"]; ?></li>
			<li><?= $nas["rek"]; ?></li>
			<li><?= $nas["status"]; ?></li>
		</ul>
	<?php endforeach; ?>

</body>
</html>