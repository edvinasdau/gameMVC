<!DOCTYPE html>
<html>
<head>
	<title></title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/css/bootstrap.min.css" integrity="sha384-/Y6pD6FV/Vv2HJnA6t+vslU6fwYXjCFtcEpHbNJ0lyAFsXTsjBbfaDjzALeQsN6M" crossorigin="anonymous">
	<link rel="stylesheet" type="text/css" href="../assets/css/style.css">
	<link href="https://fonts.googleapis.com/css?family=Indie+Flower" rel="stylesheet">
	<script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
</head>

<body>
	<div class="container-fluid">
		<div id="header" class="row">
			<h1> Dice game </h1>
		</div>
		<div id="log" class="row">
			<div class="col-sm-8">
			</div>
			<div class="col-sm-4">
				<form method="POST">
					<input id="username" type="text" name="username" placeholder="username">
					<input id="pw" type="password" name="password" placeholder="password">
					<input id="pw_r" type="password" name="repeat_password" placeholder="repeat_password">
					<input id="reg" type="submit" name="registruotis" class="btn btn-warning" value="Register">
					<a href="login.php" class="btn btn-success">Login</a>
				</form>
			</div>
		</div>
	</div>

</body>
</html>