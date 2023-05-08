<?php 
//menamplkan hari tanggal bulan dan tahun

	// echo date("l, d-M-Y");

//menghitung hari kedepan dan kebelakang

	// echo date("l", time()+60*60*24*2);

//menghiung hari saat kita lahir
//mktime(0,0,0,0,0,0)
//jam, menit, detik, bulan, tanggal, tahun

	// echo date("l", mktime(0,0,0,12,26,2005));


function calling($time = 'Datang', $name = 'Admin')
{
	return "Selamat $time, $name tersayangku";
}



?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Function</title>
</head>
<body>

	<h1><?= calling("morning", "Mudia"); ?></h1>

</body>
</html>