<!DOCTYPE html>
<html lang="ru">
 
<head>
	<meta charset="UTF-8">
	<title>Мини-блог</title>

	<!-- bootstrap -->
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</head>

<body>
	<?php
		include_once'credentials.php';
		include_once "navigation.php";
		include_once "footer.php";

		include_once 'db_connection.php';
		$conn = OpenDbConnection();

		$username = getCreds()[0];
		$query = "SELECT biography as b FROM user_data 
			WHERE username = '$username'";

		$result =  $conn -> query($query);
		$bio = mysqli_fetch_assoc($result)["b"];

		echo 
		"<div class='container mt-3'>
			<h1 class='text-center mt-3'>Биография</h1>
			<p id='bioTextArea'>
				{$bio}
			</p>
			<a href='edit_bio.php?bio={$bio}'>
				<button id='edit_bio_btn' class='btn btn-primary btn-block' type='button'>
					Редактировать
				</button>
			</a>
		</div>";
	?>
</body>
</html>