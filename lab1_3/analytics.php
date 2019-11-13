<?php

$request = $_REQUEST['update_link_following_count'];
$should_update_link_following_count = is_null($request);
if ($should_update_link_following_count) {
	updateLinkFollowingCounter();
}

function updateHitCounter() {
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
}

function updateLinkFollowingCounter() {
	include_once 'db_connection.php';
	
	$query = "UPDATE analytics as a
		SET a.link_following_count = a.link_following_count + 1";
	$conn = OpenDbConnection();
	$conn -> query($query);
	CloseDbConnection($conn);
}
?> 
