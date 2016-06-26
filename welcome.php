<html>
	<head>
		<title>Welcome</title>
		<style>
		a:link{color:gold;}
		a:visited{color:gold;}
		</style>
	<?php include "connect.php";  ?>	
		</head>
	<body style = "background-color:darkcyan";>
		<?php
		//form submitted
		$username = $_POST["username"];
		$password = $_POST["password"];
		

		$result = "SELECT username, password FROM user_info WHERE username = '$username'";
		$res=$connect->query($result);


		while ($row=$res->fetch_assoc()) {
			if($row["username"] == $username && $row["password"] == $password){
									
			echo "Add New Images To The Database";
		

		
			?>
			<form action = "upload.php" method = "post" enctype = "multipart/form-data">
		<div id = "one">
		Select image to upload :
		</div>
		<input type = "file" name = "fileToUpload" id = "fileToUpload">
		<input type = "submit" value = "Upload Image" name = "submit">
	</form>
		<?php
		}

			
		else
			echo "Invalid credentials";
		}
		?>

	</body>
</html>