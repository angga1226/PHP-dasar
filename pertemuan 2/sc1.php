
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Pengulangan</title>
</head>
<body>
</body>
	<table border="1" cellpadding="10" cellspacing="0">
		<?php for ($i = 1; $i <= 6; $i++) : ?>
			<tr>
				<?php for ($j = 1; $j <= 8; $j++) : ?>
					<td><?= "$i, $j"; ?></td>
				<?php endfor; ?>
			</tr>
		<?php endfor; ?>	
	</table>


</body>
</html>