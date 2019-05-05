<?php  
	include 'db_connection.php';
	
	$username = $_POST['username'];
	$password = $_POST['password'];

	$query = "SELECT * FROM user_data
		WHERE username = '$username' AND password = '$password'";

	$conn = OpenDbConnection();
	$result =  $conn -> query($query);

	if ($result) {
		$cookie = $username . ":" . $password;
		$time = time() + 60*60*24;
		setcookie('MINI_BLOG_SESSION', $cookie, $time, null, null, null, false);

		header("Location: index.php", true, 302);
 		exit();
	} else {
		echo "<h1>Произошла ошибка входа</h1>";
	}
	CloseDbConnection($conn);
?>