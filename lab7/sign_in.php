<?php  
	session_start();
	include 'db_connection.php';
	
	$username = $_POST['username'];
	$password = $_POST['password'];

	$query = "SELECT * FROM user_data
		WHERE username = '$username' AND password = '$password'";

	$conn = OpenDbConnection();
	$result =  $conn -> query($query);

	if ($result) {
		$auth_way = $_POST['auth_way'];
		$creds = $username . ":" . $password;

		if ($auth_way == 'cookie') {
			$time = time() + 60*60*24;
			setcookie('MINI_BLOG_SESSION', $creds, $time, null, null, null, false);
		} else {
			session_start();
			$_SESSION['MINI_BLOG_SESSION'] = $creds;
		}


		header("Location: index.php", true, 302);
 		exit();
	} else {
		echo "<h1>Произошла ошибка входа</h1>";
	}
	CloseDbConnection($conn);
?>