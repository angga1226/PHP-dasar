<?php  
 if(isset($_POST['send']) ) {
 	if(isset($_POST['username']) == "Tanggang" && $_POST['password'] == "admin") {
 		header("Location: admin.php");
 		exit;
 	} else {
 		$Eror = true;
 	}
 }
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>LOGIN</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>

<div class="h1"><h1>SIGN UP</h1></div>
<br><br>

<?php if(isset($Eror) ) : ?>
<p style="color: red; font-style: italic; text-align: center;">username/passwod yang anda masukan salah</p>
<?php endif; ?>


<div class="foam">
	<form action="" method="post"><table border="3" cellpadding="15" cellspacing="0" class="margin">
	<tr>
		<td colspan="4"><label for="login">Username : </label><input type="text" name="username" id="login"></td>
	</tr>
	<tr>
		<td colspan="4"><label for="pw">Password : </label><input type="password" name="password" id="pw"></td>
	</tr>
	<tr>
		<td><input type="radio" name="gender" id="man"><label for="man">Male</label>
		<input type="radio" name="gender" id="woman"><label for="woman">Female</label></td>
	</tr>
	<tr>
		<td><input type="checkbox" name="Rek" id="12"><label for="12">BCA</label>
		<input type="checkbox" name="Rek" id="14"><label for="14">BRI</label>
		<input type="checkbox" name="Rek" id="16"><label for="16">PayPall</label></td>
	</tr>
	<tr>
		<td><label>Jenis Rumah</label>
		<select>
			<option>KPR</option>
			<option>Subsidi</option>	
		</select></td>
	</tr>
	<tr>
		<td colspan="4">
			<textarea style="margin: auto;"></textarea>
		</td>
	</tr>
		<tr>
		<td colspan="4">
			<button type="submit" name="send" style="width: 95%; margin: auto;" class="button">SEND</button>
		</td>
	</tr>
</div>




</form></table>

</body>
</html>
