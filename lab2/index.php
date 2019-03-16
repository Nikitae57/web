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
 		include_once "navigation.php";
 		include_once "menu.php";
 		if (isset($_GET[content])) {
 			$filePath = "contents/" . $_GET[content] . ".php";
 			
 			if (file_exists($filePath)) {
				include_once $filePath;
 			} else {
 				echo "<h1>Такой лаборатоной работы не найдено</h1>";
 			}
		} else {
			include_once("contents/content_lab1.php");
		}
 		include_once "footer.php";
 	?>
 </body>
 </html>