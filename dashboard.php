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
<!DOCTYPE html>
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
				<li> <a style="color: #f2d13e;" href="dashboard.html"> DASHBOARD </a> </li>
				<li> <a  href="main_user.php"> HOME </a> </li>
				
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
				<div id="user_details">
			<h1><?php echo $row['username']; ?></h1>
			<div id="registerd_book">
				<table>
					<tr>
						<th>Book</th>
						<th>Book Id</th>
					</tr>
					<tr>
						<td>Java (<span>Complete Refrence</span>) </td>
						<td>00591</td>
						<td><button id="return_button">Return</button></td>
					</tr>
					<tr>
						<td>Java (<span>Complete Refrence</span>) </td>
						<td>00591</td>
						<td><button id="return_button">Return</button></td>
					</tr>
					<tr>
						<td>Java (<span>Complete Refrence</span>) </td>
						<td>00591</td>
						<td><button id="return_button">Return</button></td>
					</tr>
				</table>
			</div>
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