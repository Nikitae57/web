<!DOCTYPE html>
<html lang="ru">
 
<head>
	<meta charset="UTF-8">
	<title>Мини-блог</title>
	<link rel="stylesheet" type="text/css" href="css/style.css">
</head>

<body>
	<?php
		include_once "header.php";
		include_once "footer.php";
	?>
	<div id="registration_container">
		<form id="registration_form" 
			action="save_bio.php" 
			method="post" 
			accept-charset="utf-8">
			<p><textarea id="registration_bio" name="bio"><?php echo trim($_GET["bio"])?></textarea></p>

			<p><input type="submit" name="registrate" value="Сохранить"></p>
		</form>
	</div>
</body>
</html>