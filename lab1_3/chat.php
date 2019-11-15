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

<script>
	var serverUrl = 'ws://localhost:9000';
	var socket;

	function init() {
		try {
			socket = new WebSocket(serverUrl);

			socket.onopen = function(msg) {
				writeTextToContainer('Вы успешно подключились');
			};

			socket.onmessage = function(msg) {
				writeTextToContainer('Принято: ' + msg.data);
			};

			socket.onclose = function(msg) {
				writeTextToContainer('Вы успешно отключились');
			};
		} catch (ex) {
			writeTextToContainer(ex);
		}
	}

	function sendMessage() {
		var msgText = $('#msg-text-area').val();
		
		if (!msgText) { return; }
		
		try {
			socket.send(msgText);
			writeTextToContainer('Отправлено: ' + msgText);
			$('#msg-text-area').val('');
		} catch(ex) {
			writeTextToContainer(ex);
		}
	}

	function disconnect() {
		if (socket != null) {
			socket.close();
			socket = null;
		}
	}

	function writeTextToContainer(text) {
		$('#message-container').append(text + '<br>');
		// container.text(container.val() + '\n' + text);
	}

	function reconnect() {
		disconnect();
		init();
	}

	function checkForEnter(event) {
		// enter == 13
		if (event.keyCode == 13) {
			sendMessage();
		}
	}
</script>

<body onload="init()">
	<?php include_once "navigation.php"; ?>

	<div class="container mt-3 pb-5 mb-5">
		<div class="text-right">
			<button class="btn btn-success" type="button" 
				onclick="reconnect()">Подключиться
			</button>
			<button class="btn btn-danger" type="button" 
				onclick="disconnect()">Отключиться
			</button>
		</div>

		<div id="message-container" class="border ml-auto mr-auto mt-4" 
			style="height:40em;overflow-y: auto;">
		</div>
		
		<div class="row mt-4">
			<div class="col-sm-10">
				<input id="msg-text-area" type="text" class="form-control form-control" 
					placeholder="Сообщение" onkeypress="return checkForEnter(event)">
			</div>
			<div class="col-sm-2 ml-auto text-right">
				<button class="btn btn-primary btn-block" type="button" 
					onclick="sendMessage()">Отправить
				</button>
			</div>
		</div>
	</div>

	<?php include_once "footer.php"; ?>
</body>
</html> 

  
