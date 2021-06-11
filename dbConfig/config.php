<?php
try{
	$con = mysqli_connect("localhost","root","") or die("Unable to connect");
	mysqli_select_db($con,'pizzastore');
}
catch(Exception $e){
	echo 'Message: ' .$e->getMessage();
}
?>
