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
		#search{
			margin-bottom: 20px;
		}
		#book_search{
			margin-top: 20px;
			border-radius: 5px;
		}
		#input{
			width: 300px;
			padding-left: 20px;
			border-radius: 5px;
		}
		#book{
			float: left;
			margin: 30px;
			padding: 10px;
			width: 200px;
			height: 300px;
			background: lightblue;
			transition: 0.5s;
		}
		#book:hover{
			background: #f2d13e;
			transition: 0.5s;
		}
		#book_image{
		}
		#book_footer{
			margin-top: 255;
			background: white;
		}
		#book_name{
			font-size: 20px;
			font-weight: bold;
		}
		#book_author{
			font-size: 17px;
			color: gray;
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
				<li> <a href="about.php"> ABOUT </a> </li>
				<li> <a href="dashboard.php"> DASHBOARD </a> </li>
				<li> <a style="color: #f2d13e;" href="main_user.php"> HOME </a> </li>
				
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
		
		<div id="book_search">
			<center>
				<form action=" " method="POST">
					<input id="input" type="search" name="book_name" placeholder="search book" autofocus="true" />
					<input id="search" results="2" style="width: 100px;" type="submit" name="submit" value="Search" />
				</form>
			</center>
		</div>
		<?php
			if(isset($_POST['submit'])){
				$book_name = $_POST['book_name'];
				$query = "SELECT * FROM books WHERE book_name LIKE '$book_name%'";
				$result = mysqli_query($connection,$query);
				if(!$result){
					die("query failed at searching");
				}
				else{
					while($list = mysqli_fetch_array($result)){
									//output data from each row
								$book_name = $list['book_name'];
								$status = $list['status'];
								echo "<span style='padding-left:20px; padding-right:20px; background:darkblue; color:white; margin:20px'>".$book_name."</span> <br/>";
					}
				}
			}
		?>

	</div>
	<?php include_once("tools/footer.php"); ?>
</body>
</html>