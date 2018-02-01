<!DOCTYPE html>
<html>
<head>
	<title>Librery Management</title>
	<link rel="stylesheet" type="text/css" href="css/index_style.css" />
	<link rel="stylesheet" type="text/css" href="css/form.css" />
	<meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
	<style type="text/css">
		body{  
		background: url(image/2.jpg) no-repeat center center fixed; 
		-webkit-background-size: cover;
		-moz-background-size: cover;
		-o-background-size: cover;
		background-size: cover;
		margin: 0;
		padding: 0;
		}
	</style>
</head>
<body>
	<?php include_once("tools/header.php"); ?>
	<div style="margin-bottom: 110px; " id="content">
		<center>
		<div id="form">
			<form action="php/signup_process.php" method="POST">
				<span style="font-size: 30px; color: #f2d13e">Signup</span>
				<table>
					<tr>
						<td>
								<label id="label" >Username </label><input id="input" type="text" name="username" />	
						</td>
					</tr>

					<tr>
						<td>
								<label id="label" >Password</label><input id="input" type="password" name="password" />	
						</td>
					</tr>
										<tr>
						<td>
								<label id="label" >First Name</label><input id="input" type="password" name="first_name" />	
						</td>
					</tr>
										<tr>
						<td>
								<label id="label" >Last Name</label><input id="input" type="password" name="last_name" />	
						</td>
					</tr>

					<tr>
						<td>
								<input id="submit" type="submit" name="submit" value="Signup"/>	
						</td>
					</tr>
					<tr>
						<td>
							<a style="color: white;" href="signin.php">Already have an account ??</a>
						</td>
					</tr>
				</table>
				
			</form>
		</div>
		</center>
	</div>
	<?php include_once("tools/footer.php"); ?>
	

</body>
</html>