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
	
	<form action="registration_submit" method="post" accept-charset="utf-8">
		<p><input type="text" name="username" placeholder="Никнейм"></p>
		<p><input type="password" name="password" placeholder="Пароль"></p>
	</form>
</body>
</html>