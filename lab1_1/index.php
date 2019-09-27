<?php
	ini_set('display_errors', 1);
	ini_set('display_startup_errors', 1);
	error_reporting(E_ERROR);
	session_start();
	if (isset($_GET[content]) && strpos($_GET[content], "lab") === false) {

		include 'db_connection.php';
		$contentStr = $_GET[content];
		$query = "SELECT file_link.file_uri as f FROM content
			INNER JOIN file_link
				ON content.file_link_id = file_link.id_file_link
			WHERE content.label = '$contentStr' LIMIT 1";

		$conn = OpenDbConnection();
		$result =  $conn -> query($query);
 		$row = mysqli_fetch_assoc($result);
 		CloseDbConnection($conn);

 		if (mysqli_num_rows($result) > 0) {
	 		header("Location: ". $row['f'], true, 302);
 			exit();
 		} else {
 			echo "404";
 			exit();
 		}
	}
?>

<!DOCTYPE html>
<html lang="ru">
 
<head>
	<meta charset="UTF-8">
	<title>Мини-блог</title>
	<link rel="stylesheet" type="text/css" href="css/style.css">
</head>

<body>
	<?php
		session_start();
		include 'db_connection.php';
		include 'credentials.php';
 		$conn = OpenDbConnection();
		include_once "header.php";

		if (!isset($_COOKIE['MINI_BLOG_SESSION']) && !isset($_SESSION['MINI_BLOG_SESSION'])) {
			include_once "navigation_logged_out.php";
		} else {
			$username = getCreds()[0];
			$query = "SELECT is_admin FROM user_data 
				WHERE username = '$username' AND is_admin IS NOT NULL AND is_admin != 0";
			$result = $conn -> query($query);
	 		$row = mysqli_fetch_assoc($result);

	 		if (mysqli_num_rows($result) > 0) {	
	 			include_once "navigation_admin.php";
	 		} else {
	 			include_once "navigation_logged_in.php";
	 		}
		}
		
		include_once "menu.php";
		include_once "footer.php";

		if (isset($_GET[content])) {
			$contentStr = $_GET[content];
			
			if (strpos(contentStr, "lab") === FALSE) {
	 			$labNumber = str_replace("lab", "", $contentStr);
		 		$query = "SELECT title.text as t, content.text as c FROM lab
		 			INNER JOIN title
			 			ON lab.title_id = title.id_title
			 		INNER JOIN content
			 			ON lab.content_id = content.id_content
			 		WHERE lab.order_number = $labNumber LIMIT 1";
		 		$result =  $conn -> query($query);
		 		$row = mysqli_fetch_assoc($result);
		 		
		 		if (mysqli_num_rows($result) > 0) {
			 		echo "<div id='content'>";
			 		echo $row["t"];
			 		echo $row["c"];
			 		echo "</div>";
		 		} else {
		 			echo "<h1>Такой лабораторной работы не найдено</h1>";
		 		}
			}
		} else {
			header("Location: http://127.0.0.1/?content=lab1", true, 302);
 			exit();
		}
		CloseDbConnection($conn);
	?>
</body>
</html>