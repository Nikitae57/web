<?php
ini_set("log_errors", 1);
ini_set("error_log", "'/home/nikita/c.txt'");
error_log( "Hello, errors!" );


set_error_handler(
    function ($severity, $message, $file, $line) {
        throw new ErrorException($message, $severity, $severity, $file, $line);
    }
);

try {
	fopen("/home/nikita/a/b.txt", "w");
	fopen("/home/nikita/a/c.txt", "w");
	l(1);
} catch (Exception $e) {
	die($e);
}

try {
	l(2);
	// l(3);
	if (array_key_exists('update_link_following_count', $_REQUEST)) {
		updateLinkFollowingCounter();
		l(4);
	}
} catch (Exception $e) {
	die($e);
}

function l($msg) {
	try {
		$file = '/home/nikita/a/b.txt';
		$content = file_get_contents($file);
		$content .= $msg . "\n";
		file_put_contents("/home/nikita/a/b.txt", $content);
	} catch (Exception $e) {
		die($e);
	}
}

function updateHitCounter() {
	try {
	    l("updateHitCounter");
	    include_once 'db_connection.php';
		
		$currentUrl = $_SERVER['REQUEST_URI'];
		$query = "UPDATE analytics as a SET a.hit_count = a.hit_count + 1";
		$conn = OpenDbConnection();
		$conn -> query($query);
	    
	    session_start();
	    if (empty($_SESSION['visited'])) {
	    	$query = "UPDATE analytics as a 
	    		SET a.hit_count_unique = a.hit_count_unique + 1";
			$result =  $conn -> query($query);
	 		// $row = mysqli_fetch_assoc($result);
	    }

	 	CloseDbConnection($conn);
	    $_SESSION['visited'] = TRUE;
	} catch (Exception $e) {

	}
}

function updateLinkFollowingCounter() {
	try {
		l("updateLinkFollowingCounter");
		include_once 'db_connection.php';
		
		$query = "UPDATE analytics as a
			SET a.link_following_count = a.link_following_count + 1";
		$conn = OpenDbConnection();
		$conn -> query($query);
		CloseDbConnection($conn);
	} catch (Exception $e) {
		die($e);
	}
}
?> 
