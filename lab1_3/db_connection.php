<?php
	function OpenDbConnection() {
		$dbhost = "localhost";
		$dbuser = "root";
		$dbpass = "password";
		$db = "mydb";
		$conn = new mysqli($dbhost, $dbuser, $dbpass, $db) 
			or die("Connect failed: %s\n". $conn -> error);
		$conn -> set_charset('utf8');

		return $conn;
	}

	function CloseDbConnection($conn) {
		$conn -> close();
	}
?>