<?php
	$server = "localhost";
	$username = "root";
	$password = "";
	$database = "library";
	$connection = mysqli_connect($server,$username,$password,$database);
	if(!$connection){
		die("Databese is not connected");
	}
?>