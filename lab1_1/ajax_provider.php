<?php
include 'db_connection.php';

$id = (int) $_REQUEST['id'];
$query = "SELECT text as t FROM ajax
	WHERE ajax.id = $id LIMIT 1";

$conn = OpenDbConnection();
$result =  $conn -> query($query);
$row = mysqli_fetch_assoc($result);
CloseDbConnection($conn);

$text = '';
if (mysqli_num_rows($result) > 0) {
	$text = $row['t'];
} else {
	$text = 'NO_MORE_CONTENT';
}

echo $text;
?> 
