	<?php
	include_once'signcon.php';
    ?>

	<!DOCTYPE html>
	<html>
	<head>
		<title>signin</title>
		<link rel="stylesheet" type="text/css" href="">

	</head>
	<body>
	<h1>Sign In </h1>
	
		<form method="post" action="signcon.php">

			<input type="text" name="Username" placeholder="Username"><br>
	
			<input type="Password" name="Password" placeholder="Password"><br>
	
			<button type="Submit" name="signin">Sign In</button>

	    </form>
	  
	    <a href="Forgot.php">Forgot Password ?</a>
	</div>
	</body>
	</html>