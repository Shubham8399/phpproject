<?php
 $con = mysqli_connect('localhost','root','','db_balas');
 

 if($con->connect_error)
 {
 	echo "Db Connection Error".$con->connect_error;
 }
?>