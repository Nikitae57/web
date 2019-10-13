<?php 
	include_once 'credentials.php';
	if (logOut()) {
	    header("Location: index.php", true, 302);
 		exit();
	} else {
		echo "<h1>Произошла ошибка</h1>";
	}
?>