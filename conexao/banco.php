<?php

//$con = mysqli_connect("172.16.2.13", "190013", "190013", "190013_web");
$con = mysqli_connect("localhost", "root", "", "190013_web");

if (mysqli_connect_errno())  {
  	 echo "Falha ao se conectar ao MySQL: " . mysqli_connect_error();
 } else {
	 mysqli_select_db($con,"190013_web");
 }

?>
