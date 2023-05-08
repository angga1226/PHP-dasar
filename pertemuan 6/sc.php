<?php 
if(isset($_POST['submit'])) {
	if(isset($_POST['user']) == "admin" && $_POST['pw'] == "admin") {
		header("Location: min.php");
		exit;
	}  else {
	$error = true;
	}
}


?>



<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Halaman Admin</title>
</head>
<body>
	<h1>Lgin Admin</h1>

<?php if(isset($error) ) : ?>
	<p style="color: red; font-style: italic;">username/password yang anda masukan salah</p>
<?php endif; ?>

	<form action="" method="post">
		<li>
			<label for="12">Username : </label>
			<input type="text" name="user" id="12">
		</li>
		<li>
			<label for="123">Password : </label>
			<input type="password" name="pw" id="123">
		</li>
		<li>
			<button type="submit" name="submit">Send</button>
		</li>
	</form>

</body>
</html>