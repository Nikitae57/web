<?php 
	include_once 'db_connection.php';
	$conn = OpenDbConnection();

		$contentStr = $_GET[content];
		if ($contentStr == null || strpos($contentStr, "lab") === FALSE) {
			echo 'content.php: Ошибка';
			exit();
		}

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
	// if (isset($_GET[content])) {
	// } else {
	// 	echo 'Ошибка';
	// 	exit();
	// }
	CloseDbConnection($conn);
?> 
