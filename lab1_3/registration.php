<!DOCTYPE html>
<html lang="ru">
 
<head>
	<meta charset="UTF-8">
	<title>Мини-блог</title>
	<link rel="stylesheet" type="text/css" href="css/style.css">


	<script src="analytics.js"></script></head>

<body>
	<?php
		include_once "header.php";
		include_once "footer.php";
	?>
	
	<h1 id="registration_title">Регистрация</h1>

	<div id="registration_container">
		<form id="registration_form" 
			action="registrate.php" 
			method="post" 
			accept-charset="utf-8">

			<p><input required type="text" name="username" placeholder="Никнейм"
				pattern="^[A-Za-z]+$"></p>
			<p><input required type="password" name="password" placeholder="Пароль"></p>
			<p><textarea id="registration_bio" name="bio" placeholder="Биография"></textarea></p>

			<p><input type="submit" name="registrate" value="Зарегистрироваться"></p>
		</form>
	</div>
</body>
</html>