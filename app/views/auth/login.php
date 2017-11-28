<!DOCTYPE html>
<html>
<head>
	<title></title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/css/bootstrap.min.css" integrity="sha384-/Y6pD6FV/Vv2HJnA6t+vslU6fwYXjCFtcEpHbNJ0lyAFsXTsjBbfaDjzALeQsN6M" crossorigin="anonymous">
	<link rel="stylesheet" type="text/css" href="http://localhost/Edvinas/gameMVC/app/views/assets/css/style.css">
	<link href="https://fonts.googleapis.com/css?family=Indie+Flower" rel="stylesheet">
	<script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
</head>

<body>
	<div class="container-fluid">
		<div id="header" class="row">
			<h1>Dice game</h1>
			<?php

			if ($this->errors) {
				foreach ($this->errors as $error) {
					echo "<div class='alert alert-danger'>" . $error . "</div>";
				}
			}
			if ($this->messages) {
				foreach ($this->messages as $message) {
					echo "<div class='alert alert-success'>" . $message . "</div>";
				}
			}

			?>
		</div>
		<div id="log" class="row">
			<div class="col-sm-8">
			</div>
			<div class="col-sm-4">
				<form action="http://localhost/Edvinas/gameMVC/auth/login" method="POST">
					<input name="username" class="form-control form-control-lg" placeholder="Username" type="text">
					<input name="password" class="form-control" placeholder="Password" type="password">
					<button type="submit" class="btn btn-success btn-block">Login</button>
				</form>
				<br><a class="btn btn-sm btn-outline-warning btn-block" href="http://localhost/Edvinas/gameMVC/auth/regForm">Register</a>
			</form>
		</div>
	</div>
</div>

</body>
</html>