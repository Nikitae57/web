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
			action="save_content.php" 
			method="post" 
			accept-charset="utf-8">
			<p><textarea id="registration_bio" name="content"><?php 
					include_once 'db_connection.php';
 					$conn = OpenDbConnection();
					$labNumber = str_replace("lab", "", $_GET["content"]);
		 			$query = "SELECT content.text as c FROM lab
			 			INNER JOIN content
				 			ON lab.content_id = content.id_content
				 		WHERE lab.order_number = $labNumber LIMIT 1";
			 		$result =  $conn -> query($query);
			 		$row = mysqli_fetch_assoc($result);
			 		
			 		if (mysqli_num_rows($result) > 0) {
				 		echo $row["c"];
			 		} else {
			 			echo "Ошибка";
			 		}
				?></textarea></p>

			<p><input type="submit" name="save" value="Сохранить"></p>
			<input type="hidden" name="label" value=<?php echo $_GET["content"]?> />
		</form>
	</div>
</body>
</html> 
