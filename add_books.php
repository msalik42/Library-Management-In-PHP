<?php 
	require_once("php/connection.php");
	session_start();
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
				<li> <a style="color: #f2d13e;" href="add_books.php"> ADD BOOKS </a> </li>
				<li> <a href="main_admin.php"> HOME </a> </li>
				
			</ul>
			</div>
		</div>
	</div>	
	<div id="main_body">
		<div id="search_user">
			<center>
				<form action=" " method="post">
					Book Name <input style="width: 150px;" id="input" type="text" name="book_name" placeholder="Book Name" />
					Book ID <input style="width: 150px;" id="input" type="text" name="book_id" placeholder="Book_Id" />
					<input id="search" type="submit" name="submit" value="ADD" />
				</form>
			</center>	
		</div>
		<?php 
			if(isset($_POST['submit'])){
				$_SESSION['book_name'] = $_POST['book_name'];
				$_SESSION['book_id'] = $_POST['book_id'];
				$book_name = $_SESSION['book_name'];
				$book_id = $_SESSION['book_id'];
				$query = "INSERT INTO books(`book_name`,`book_id`,`status`) VALUES('$book_name','$book_id','free')";
				$result = mysqli_query($connection, $query);
				if(!$result){
					die("query failed when librarian search for book ");
				}
				else{
					echo "book added";
				}
			}
		?>
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