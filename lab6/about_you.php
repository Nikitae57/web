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

		if (!isset($_COOKIE['MINI_BLOG_SESSION'])) {
			echo "<h1>Произошла ошибка</h1>";
			exit();
		}
		include_once "navigation_logged_in.php";
		
		include_once "menu.php";
		include_once "footer.php";

		include 'db_connection.php';
		$conn = OpenDbConnection();

		$username = explode(':', $_COOKIE["MINI_BLOG_SESSION"])[0];
		$query = "SELECT biography as b FROM user_data 
			WHERE username = '$username'";

		$result =  $conn -> query($query);
		$bio = mysqli_fetch_assoc($result)["b"];

		echo 
		"<div id='content'>
			<p class='text_content'>	
				{$bio}
			</p>
			<p class='text_content'>
				<a href='edit_bio.php?bio={$bio}' style='color:#000; border:1px solid black'>Редактировать</a>
			</p>
		</div>";
	?>
</body>
</html>