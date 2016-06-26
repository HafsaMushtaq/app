<head>
	<?php include "connect.php";  ?>	

</head>

<?php
	$target_dir = "images/";
	$tmp_name = $_FILES['fileToUpload']['tmp_name'];
	$img_name = $_FILES['fileToUpload']['name'];
	$final_path = $target_dir.$img_name;
	move_uploaded_file($tmp_name, $final_path);
    $query = "INSERT INTO images ( image_name, image_path) VALUES ('$img_name', '$final_path')";
	$res= $connect->query($query);
	
	if ($connect->affected_rows) 
	{
		echo "Image added to database"; 
		
	}
	else
	{
		echo "Image not added to database"; 	
	}
	?>

	
</body>