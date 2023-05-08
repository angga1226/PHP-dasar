<?php 
//pengulangan pda array
$book = [1,22,34,45,67,78,26,17,20];

 ?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Array</title>
	<style>
		.bulat {
			width: 50px;
			height: 50px;
			background-color: aqua;
			text-align: center;
			line-height: 50px;
			margin: 3px;
			float: left;
		}	
	</style>
</head>
<body>

	<?php foreach ($book as $books) : ?>
		<div class="bulat"><?= $books; ?></div>
	<?php endforeach; ?>


</body>
</html>