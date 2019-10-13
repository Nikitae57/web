<?php
	ini_set('display_errors', 1);
	ini_set('display_startup_errors', 1);
	error_reporting(E_ERROR);
	session_start();
	if (isset($_GET[content]) && strpos($_GET[content], "lab") === false) {

		include_once 'db_connection.php';
		$contentStr = $_GET[content];
		$query = "SELECT file_link.file_uri as f FROM content
			INNER JOIN file_link
				ON content.file_link_id = file_link.id_file_link
			WHERE content.label = '$contentStr' LIMIT 1";

		$conn = OpenDbConnection();
		$result =  $conn -> query($query);
 		$row = mysqli_fetch_assoc($result);
 		CloseDbConnection($conn);

 		if (mysqli_num_rows($result) > 0) {
	 		header("Location: ". $row['f'], true, 302);
 			exit();
 		} else {
 			echo "404";
 			exit();
 		}
	}
?>

<!DOCTYPE html>
<html lang="ru">
 
<head>
	<meta charset="UTF-8">
	<title>Мини-блог</title>
	<!-- <link rel="stylesheet" type="text/css" href="css/style.css"> -->

	<!-- bootstrap -->
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</head>

<body>
	<?php
		session_start();
		include_once'credentials.php';
		include_once "navigation.php";
	?>

	<div class="container-fluid">
		<div class="row">
			<div class="col-sm-3 pl-3">
				<?php include_once "menu.php"; ?>
			</div>
			<div class="col-sm-6">
				<?php include_once "content.php"; ?>
			</div>
		</div>
	</div>

	<?php include_once "footer.php"; ?>
</body>
</html>