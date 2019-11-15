<!DOCTYPE html>
<html lang="ru">
 
<head>
	<meta charset="UTF-8">
	<title>Мини-блог</title>
	<!-- <link rel="stylesheet" type="text/css" href="css/style.css"> -->

	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

	<script src="analytics.js"></script>
</head>
</head>

<script>
var isLoadingContent = false
var id = 1
function loadContent() {
	if (isLoadingContent) {
		return;
	}

	isLoadingContent = true;
  	var xhttp = new XMLHttpRequest();
  	xhttp.onreadystatechange = function() {
	  	var container = document.getElementById("container") 

	    if (this.readyState == 4 && this.status == 200) {
	    	if (this.responseText.trim() !== "NO_MORE_CONTENT") {
	    		var prevContent = container.innerHTML
		      	container.innerHTML = prevContent + '<p>' + this.responseText + '</p>';
		      	id++
	    	}
	    	isLoadingContent = false;
	    }
  	};
  	xhttp.open("GET", "ajax_provider.php?id=" + id, true);
  	xhttp.send();
}

loadContent();

window.onscroll = function(ev) {
    if ((window.innerHeight + window.scrollY) >= document.body.offsetHeight) {
    	loadContent();
        console.log('At the bottom');
    }
};
</script>

<body>
	<?php
		include_once "navigation.php";
	?>
	<div id="container" class="container mt-5 pb-5 mb-5">
		
	</div>
	<?php include_once "footer.php"; ?>
<!-- 	<div id="container" style="overflow-y: scroll"></div>
	<button id="btn" type="button" onclick="loadContent()">Загрузить контент</button>  -->
</body>
</html> 

 