<?php 
	if (isset($_COOKIE['MINI_BLOG_SESSION'])) {
	    setcookie('MINI_BLOG_SESSION', '', -1);
	    header("Location: index.php", true, 302);
 		exit();
 		echo "ok";
	} else {
		echo "<h1>Произошла ошибка</h1>";
	}
?>