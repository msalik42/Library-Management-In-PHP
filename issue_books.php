<?php 
	session_start();
	include_once("php/connection.php");
	if(!isset($_SESSION['row'])){
		header('Location: signin.php');
	}
	else{
		$row = $_SESSION['row'];
	}

?>
<html>
<head>
	<title>Library</title>
	<link rel="stylesheet" type="text/css" href="css/main.css" />
</head>
<body>
	<div id="navigation">
		<div id="nav_body">
			<div id="first_div">
			<h1 style="padding-top: 20px; margin: 0; padding-left: 100px;"><a style="font-size: 40px; color: #f2d13e;" href="main.html">Library</a></h1>
			</div>
			<div id="second_div">
			<ul style="padding-top: 20px;">
				<li> <a href="index.php"> LOGOUT </a> </li>
				<li> <a href="about.php"> ABOUT US </a> </li>
				<li> <a style="color: #f2d13e;" href="Issue_books.php"> ISSUE BOOKS </a> </li>
				<li> <a href="main_librarian.php"> HOME </a> </li>
				
			</ul>
			</div>
			<div style="padding-top: 70px;  float: right;">  <!--name and light -->
				<div style="float: left;">
				<span style="padding-right:20px; color: white">Welcome: </span>
				<?php 
				$username = "username"; 
				echo "<a style='color: green;font-weight:bold;'>".$row[$username]."</a>"; ?>
				</div>
				<div style=" float:left; margin-top:5px; margin-left:10px; border-radius:10px; box-shadow: 0px 0px 10px 2px green; position:relative; width: 10px; height: 10px; background: green;">
				</div>
			</div>
		</div>
	</div>	
	<div id="main_body">
		<div id="search_user">
			<center>
				<form action=" " method="post">
					<input id="input" type="text" name="user_id" placeholder="Type User_Id" required="true" />
					<input id="search" type="submit"  name="submit" value="Search" required="true" />
				</form>
			</center>	
		</div>
		<?php 
			if(isset($_POST['submit'])){
				$user_id = $_POST['user_id'];
				$_SESSION['user_id'] = $user_id;
				$query = "select * from users where `user_id` = '$user_id' ";
				$result = mysqli_query($connection, $query);
				if(!$result){
					die("query failed when librarian search for book ");
				}
				else{
					$user = mysqli_fetch_array($result);
					$_SESSION['user'] = $user;
					echo "Username: ".$user['username']."<br/>";
					echo "User Id: ".$user['user_id'];
				}
			}
		?>
		<div id="user_details">
			<center>
			<?php 
			if(isset($_POST['submit'])){
			echo "<h1> ISSUE BOOK: </h1>" ;
			echo"	<form action='' method='POST'>
						Book id <input style='width:150px;' id='input' type='text' name='book_id' />
						Book Name <input style='width:150px;' id='input' type='text' name='book_name' />

						<input type='submit' name='submit2' value='Issue' />
					</form>";
			}
			?>

			<?php
				if(isset($_POST['submit2'])){
					$book_id = $_POST['book_id'];
					$book_name = $_POST['book_name'];
					$user_id = $_SESSION['user_id'];	
					$issued_date = date("Y-m-d");
					$query = "INSERT INTO issued(`book_name`, `book_id`, `user_id`, `issue_date`) VALUES('$book_name', '$book_id', '$user_id', '$issue_date')";
					$result = mysqli_query($connection, $query);
					if(!$result)
					{
						die("query failed at time of retriving data".mysqli_error($connection));
					}
					else
						echo " Book Issued ";
				}
			?>
			</center>
		</div>
	</div>
	<div id="footer">
		<div id="footer_body">
			<center style="padding-top: 20px;">
				<b> &copy Copyright 2017 Mohammad Salik | Privacy | Powered by <a target="_blank" style="color: lightblue;"href="http://www.saysalik.com">saysalik.com</a></b>
			</center>
		</div>
	</div>
</body>
</html>