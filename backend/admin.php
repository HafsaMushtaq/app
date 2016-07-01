<form action="saveimage.php" enctype="multipart/form-data" method="post">
    <input  name="files[]" type="file">
    <input  name="files[]" type="file">
    <input  name="files[]" type="file">
    <input type="submit" value="Upload File" name="submit" id="upload">
    
</form>
<?php 
	for($i=0; $i<count($_FILES['upload']['name']); $i++) {
  //Get the temp file path
  $tmpFilePath = $_FILES['upload']['tmp_name'][$i];

  //Make sure we have a filepath
  if ($tmpFilePath != ""){
    //Setup our new file path
    $TARGET_PATH= "carouselimage" . strtolower($_FILES['upload']['name'][$i]);

    //Upload the file into the temp dir
    if( move_uploaded_file($tmpFilePath, $TARGET_PATH) ) {

      //Handle other code here
       $sql = "UPDATE carousel SET image".($i+1)."='$TARGET_PATH' WHERE id=1"; 
       // Run your query 

    }
  }
}
 ?>