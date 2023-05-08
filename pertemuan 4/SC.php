<?php
$students = 
[
	["Herlangga Djohan", "00058xxxx", "Administrasi Perkantoran", "herlangxxxxxx@gmail.com"],
	["Mudia Aprianti", "00057xxxx","Administrasi Perkantoran", "Mudiaxxxxxx@gmali.com"],
	["Bayu Chitato", "00059xxxx", "Multimedia", "Tanggang@gmail.com"],
	["Rudy Batagor", "000511xxx", "Teknologi Komputer Jaringan", "Rudy@gmail.com"]
];
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Daftar Siswa Mafia</title>
</head>
<body>

	<h1>Daftar Siswa Mafia</h1>

	<?php foreach ($students as $student) : ?>
		<ul>
			<li>Nama	:<?= $student [0]; ?></li>
			<li>NIS 	:<?= $student [1]; ?></li>
			<li>Jurusan :<?= $student [2]; ?></li>
			<li>Email	:<?= $student [3]; ?></li>
		</ul>
	<?php endforeach; ?>	
</body>
</html>