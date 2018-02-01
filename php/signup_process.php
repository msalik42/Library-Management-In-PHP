<?php
	session_start();
	require_once("connection.php");
	if(isset($_POST['submit'])){
		$username = $_POST['username'];
		$password = $_POST['password'];
		$first_name = $_POST['first_name'];
		$last_name = $_POST['last_name'];
		$user_id = rand(0000,99999);
		$query = "SELECT * FROM users WHERE `username` = '$username'";
		$result = mysqli_query($connection,$query);
		$row_count = mysqli_num_rows($result);
		if($row_count <= 0 ){
			$query = "INSERT INTO users (`username`, `password`, `first_name`, `last_name`, `user_id`,`type_of_user`)
						VALUES('$username', '$password', '$first_name', '$last_name', '$user_id', 'pending') ";
			$result = mysqli_query($connection, $query);
			if(!$result){
				die("Insertion failed".mysqli_error($connection));
			}
			else{
				$row = mysqli_fetch_array($result);
				echo "User successfully registerd.";
				$query = " SELECT * FROM users WHERE `username` = '{$username}' ";
				$result = mysqli_query($connection, $query);
				if(!$result){
					die("query failed at time of retriving data".mysqli_error($connection));
				}
				else{
					$row = mysqli_fetch_array($result);
					echo "your id is: ".$row['user_id'];
				}
			}
		}
		else{
			die("user already exist");
		}

	}
?>