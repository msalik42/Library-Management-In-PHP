<?php 
	session_start();
	$_SESSION['row'] = 0;
?>
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
	<center>
	<div style="margin-bottom: 110px; " id="content">
		<div id="form">
			<form action="php/signin_process.php" method="POST">
				<span style="font-size: 30px; color: #f2d13e">Sigin: As </span>
				<span id="type" style="font-size: 30px; color: #f2d13e">Student</span>
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
									<input onclick="radio_fun()" id="radio1" type="radio" checked="checked" name="type_of_user" value="User" />
									<label>User</label>
								
									<input onclick="radio_fun()" id="radio2" type="radio" name="type_of_user" value="Librarian" />	
									<label>Librarian</label>

									<input onclick="radio_fun()" id="radio3" type="radio" name="type_of_user" value="Admin" />	
									<label>Admin</label>
						</td>
					</tr>

					<tr>
						<td>
								<input id="submit" type="submit" name="submit" value="Login"/>	
						</td>
					</tr>
					<tr>
						<td>
							<a style="color: white;" href="signup.php">Create an account ?</a>
						</td>
					</tr>
				</table>
				
			</form>
			<script>
				function radio_fun() {
			    var x, text;
			    if(document.getElementById("radio1").checked){
			    	x = document.getElementById("radio1").value;
			    }
			    else if(document.getElementById("radio2").checked){
			    	x = document.getElementById("radio2").value;
			    }
			    else{
			    	x = document.getElementById("radio3").value;
			    }
			    document.getElementById("type").innerHTML = x;
			}
			</script>
		</div>
		</div>
	</center>
	<?php include_once("tools/footer.php"); ?>

</body>
</html>