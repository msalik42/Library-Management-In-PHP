<?php
	session_start();
	require_once("connection.php");
	if(isset($_POST['submit'])){
		$username = $_POST['username'];
		$password = $_POST['password'];
		$type_of_user = $_POST['type_of_user'];
		$query = "SELECT * FROM users WHERE `username` = '$username' AND `password` = '$password' AND `type_of_user` = '$type_of_user' ";
		$result = mysqli_query($connection, $query);
		if(!$result){
			die("query failed at time of login".mysqli_error($connection));
		}
		else{
			$row = mysqli_fetch_array($result);
			$_SESSION['row'] = $row;
			if($row['username'] == $username && $row['password'] == $password ){
				if($type_of_user == "Admin"){
					header("Location: ../main_admin.php?id={$row['id']}");
				}
				else if($type_of_user == "Librarian"){
					header("Location: ../main_librarian.php?id={$row['id']}");
				}
				else{
					header("Location: ../main_user.php?id={$row['id']}");
				}
			}
			else{
				echo "oh!! somthig wronng!!!";
			}
			mysqli_free_result($result);
		}
	}

?>