<html>
	<head>
		<title>Log In Form</title>
	</head>	
	<body style = "background-color:darkcyan";>
		<div id = "one">
		<?php echo "<h1> Please Login To Continue... </h1>" ?>
		</div>
		<form action = "welcome.php" method = "post">
			<div class = "one">
			<h2> Username : <input type = "text" name = "username" value = ""> <br />  </h2>
			<h2> Password : <input type = "password" name = "password" value = ""> <br />  </h2>
		</div>
		<div id = "two">
			<input type = "submit" name = "submit" value = "Log In">
			</div>
		
		</form>
		
	
	</body>
</html>