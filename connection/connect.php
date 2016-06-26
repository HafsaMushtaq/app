
<?php
 $connect=new mysqli("localhost","root","","autoparts");
 if ($connect->connect_error) {
   	echo "error in connection";
   	exit;
   }  ?>
