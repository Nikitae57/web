<?php  
	include 'db_connection.php';
	
	$content = $_POST['content'];
	$label = $_POST['label'];

	$query = 
	"UPDATE content
		SET text = '$content'
		WHERE label = '$label'";

	$conn = OpenDbConnection();
	$result =  $conn -> query($query);

	if ($result) {
		header("Location: index.php?content=$label", true, 302);
 		exit();
	} else {
		echo "<h1>Произошла ошибка редактирования</h1>";
	}
	CloseDbConnection($conn);
?> 
