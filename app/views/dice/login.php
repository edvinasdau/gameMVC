<!DOCTYPE html>
<html>
<head>
	<title></title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/css/bootstrap.min.css" integrity="sha384-/Y6pD6FV/Vv2HJnA6t+vslU6fwYXjCFtcEpHbNJ0lyAFsXTsjBbfaDjzALeQsN6M" crossorigin="anonymous">	
	<link rel="stylesheet" type="text/css" href="../app/views/assets/css/style.css">
		<link href="https://fonts.googleapis.com/css?family=Indie+Flower" rel="stylesheet"> 
	<link rel="stylesheet" href="../../font-awesome/css/font-awesome.min.css">	
	<script src="https://code.jquery.com/jquery-3.2.1.min.js"></script> 	   
</head>

<body>
	<div class="container-fluid">
		<div id="header" class="row">
			<h1><i class="fa fa-cubes" aria-hidden="true"></i> Dice game <i class="fa fa-cubes" aria-hidden="true"></i></h1>
		</div>
		<div id="log" class="row">
			<div class="col-sm-8">
			</div>
			<div class="col-sm-4">
				<form method="POST">
					<input type="text" name="username" placeholder="username">&nbsp
					<input type="password" name="password" placeholder="password">&nbsp
					<button class="btn btn-success">Login</button>
					<a href="../dice/register" class="btn btn-warning">Register</a>
				</form>	
			</div>
		</div>
	</div>

</body>
</html>