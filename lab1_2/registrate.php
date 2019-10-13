<?php  
	include_once 'db_connection.php';
	
	$username = $_POST['username'];
	$password = $_POST['password'];
	$bio = $_POST['bio'];

	$query = "INSERT user_data(username, biography, password)
				VALUES ('$username', '$bio', '$password')";

	$conn = OpenDbConnection();
	$result =  $conn -> query($query);

	if ($result) {
		$cookie = $username . ":" . $password;
		$time = time() + 60*60*24;
		setcookie('MINI_BLOG_SESSION', $cookie, $time, null, null, null, false);

		header("Location: index.php", true, 301);
 		exit();
	} else {
		echo "<h1>Произошла ошибка регистрации</h1>";
	}
	CloseDbConnection($conn);
?>