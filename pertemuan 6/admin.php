<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Account Nasabah</title>
	<style type="text/css">
		.log {
			text-decoration: none;
			color: salmon;
		}
		.log: hover; {
			background-color: blueviolet;
			color: salmon;
			font-size: 25px;
		}
	</style>
</head>
<body>

	<h1>Selamat Datang, <?= $_POST['username']; ?></h1>

	<ul>
		<li><?= $_POST['gender']; ?></li>
		<li><?= $_POST['Rek']; ?></li>
	</ul>

	<div class="log"><a href="login.php">LOGOUT</a></div>

</body>
</html>