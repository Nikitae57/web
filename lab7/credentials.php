<?php 
	session_start();
	function getCreds() {
		session_start();
		if (isset($_COOKIE['MINI_BLOG_SESSION'])) {
			$source = $_COOKIE['MINI_BLOG_SESSION'];
		} else if (isset($_SESSION['MINI_BLOG_SESSION'])) {
			$source = $_SESSION['MINI_BLOG_SESSION'];
		} else {
			return null;
		}
		return explode(':', $source);
	}

	function s() {
		return "asda";
	}

	function logOut() {
		session_start();
		if (isset($_COOKIE['MINI_BLOG_SESSION'])) {
			setcookie('MINI_BLOG_SESSION', '', -1);
			$success = true;
		} else if (isset($_SESSION['MINI_BLOG_SESSION'])) {
			session_destroy();
			$success = true;
		} else {
			$success = false;
		}

		return $success;
	}
?> 
