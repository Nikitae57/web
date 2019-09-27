<!DOCTYPE html>
<html lang="ru">
 
<head>
	<meta charset="UTF-8">
	<title>Мини-блог</title>
	<link rel="stylesheet" type="text/css" href="css/style.css">
</head>

<script>
var id = 1
function loadContent() {
  	var xhttp = new XMLHttpRequest();
  	xhttp.onreadystatechange = function() {
	  	var container = document.getElementById("container") 

	    if (this.readyState == 4 && this.status == 200) {
	    	if (this.responseText.trim() === "NO_MORE_CONTENT") {
	    		document.getElementById("btn").remove();
	    	} else {
		      	var prevContent = container.innerHTML
		      	container.innerHTML = prevContent + '<p>' + this.responseText + '</p>';
		      	id++
	    	}
	    }
  	};
  	xhttp.open("GET", "ajax_provider.php?id=" + id, true);
  	xhttp.send();
}
</script>

<body>
	<?php
		include_once "header.php";
		include_once "navigation_ajax.php";
		include_once "menu.php";
		include_once "footer.php";
	?>
	<div id="container" style="overflow-y: scroll"></div>
	<button id="btn" type="button" onclick="loadContent()">Загрузить контент</button> 
</body>
</html> 

 