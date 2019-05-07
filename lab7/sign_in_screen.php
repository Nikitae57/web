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
	
	<h1 id="registration_title">Войти</h1>

	<div id="registration_container">
		<form id="registration_form" 
			action="sign_in.php" 
			method="post" 
			accept-charset="utf-8">

			<p><input type="text" name="username" placeholder="Никнейм"></p>
			<p><input type="password" name="password" placeholder="Пароль"></p>

			<p><input type="submit" name="sign_in" value="Войти"></p>
			<p>
				<input type="radio" name="auth_way" value="cookie" id="rbtn_cookie" checked="true">
				<label for="rbtn_cookie">cookie</label>
				<input type="radio" name="auth_way" value="session" id="rbtn_session">
				<label for="rbtn_session">session</label>
			</p>
		</form>
	</div>
</body>
</html> 
