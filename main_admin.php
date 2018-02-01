<?php 
	session_start();
	require_once("php/connection.php");
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
	<style type="text/css">
		body{
			margin: 0;
			padding: 0;
		}
		#nav_body{
			width: 100%;
			height: 100px;
			background: #222530;
		}
		ul{
			list-style-type: none;
		}
		li{
			float: right;
			font-weight: bold;
		}
		#first_div{
			float: left;
		}
		#second_div{
			float: right;
		}
		ul > li{
			margin-right: 20px;
			color: white;
		}
		a{
			text-decoration: none;
			color: white;
		}
		a:hover{
			color: #f2d13e;
		}
		#main_body{
			padding: 100px;
			padding-top: 10px;
		}
		#search_user{
			margin-top: 20px;
			border-radius: 5px;
		}
		#input{
			width: 300px;
			padding-left: 20px;
			border-radius: 5px;
		}
		#search{
			margin-bottom: 20px;
			border-radius: 5px;
		}
		table{
			width: 100%;
			margin-top: 20px;
		}
		tr:nth-child(even){
			background-color: #f2f2f2;
			border: 1px solid gray;
		}
		th{
			font-weight: bold;
			font-size: 20px;
			padding-bottom: 10px;
			height: 40px;
		}
		td{
			margin-top: 10px;
			font-size: 18px;
			text-align: center;
			height: 30px;
		}
		#return_button{
			background: #f2d13e;
			border: none;
			width: 100px;
			height: 20px;
			transition: 0.3s;
		}
		#return_button:hover{
			transition: 0.3s;
			cursor: pointer;
			box-shadow: 0px 0px 13px 0px gray;
		}
		#footer_body{
			clear: both;
			width: 100%;
			height: 100px;
			background: #463265;
		}
	</style>
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
				<li> <a href="add_books.php"> ADD BOOKS </a> </li>
				<li> <a style="color: #f2d13e;" href="main.html"> HOME </a> </li>
				
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
			echo "<h1> Set Privilage: </h1>" ;
			echo"	<form action='' method='POST'>
						User<input type='radio' name='radio' value='User' />
						Librarian<input type='radio' name='radio' value='Librarian' />
						Admin<input type='radio' name='radio' value='Admin' />
						<br />
						<br />
						<input type='submit' name='submit2' value='Submit' />
					</form>";
			}
			?>

			<?php
				if(isset($_POST['submit2'])){
					$user_id = $_SESSION['user_id'];	
					$query = "UPDATE users SET `type_of_user` = '{$_POST['radio']}' WHERE `user_id` = '{$user_id}'  ";
					$result = mysqli_query($connection,$query);
					if(!$result){
						die ("query not performed at setting previlage");
					}
					else
						echo " User previlage modified ";
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