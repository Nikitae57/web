<?php  
	include_once 'db_connection.php';
	include_once 'credentials.php';
	
	$username = getCreds()[0];
	$bio = $_POST['bio'];
	$query = "UPDATE user_data
		SET biography = '$bio'
		WHERE username = '$username'";

	$conn = OpenDbConnection();
	$result =  $conn -> query($query);

	if ($result) {
		header("Location: about_you.php", true, 302);
 		exit();
	} else {
		echo "<h1>Произошла ошибка редактирования</h1>";
	}
	CloseDbConnection($conn);
?> 
