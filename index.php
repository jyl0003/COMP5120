<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap 4 Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
</head>
<body>
	<?php
		$DBHost = "acadmysql.duc.auburn.edu";
		$DBUser = "mts0040";
		$DBPass = "0040";
		$DBName = "mts0040db";
		$test = "test";
		mysql_connect($DBHost, $DBUser, $DBPass) or die("unable to connect to server");
		mysql_select_db($DBName) or die("Unable to select database");
		//echo "Connected Successfully\n";
		//echo "Hello World!";
	?>
<div class="alert alert-success alert-dismissible">
		<a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
		<strong><center>Connection to database was successful!</center></strong> 
</div>

			
<div class="container-fluid">
  <h1><center>Welcome to our Online Bookstore</h1>

  <p>Come and take a look at what we have</p>
</div>

</body>
</html>