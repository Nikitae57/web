<?php 
	include_once 'db_connection.php';
	$conn = OpenDbConnection();

	if (!isset($_COOKIE['MINI_BLOG_SESSION']) 
		&& !isset($_SESSION['MINI_BLOG_SESSION'])) {
		
		include_once "navigation_logged_out.php";
	} else {
		include_once 'credentials.php';
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

	CloseDbConnection($conn);
?> 
