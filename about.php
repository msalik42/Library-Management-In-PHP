<?php
	include_once("php/connection.php");
?>
<!DOCTYPE html>
<html>
<head>
	<title>Librery Management</title>
	<link rel="stylesheet" type="text/css" href="css/index_style.css" />
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
		#input{
			border-radius: 5px;
			margin-top: 20px;
			padding-left: 10px;
			border:2px solid #8794DF;
			box-shadow: 1px 1px 10px #8794DF;
		}
	</style>
</head>
<body>
	<?php include_once("tools/header.php"); ?>]
	<div id="content" style="margin-bottom: 20px; float: left;">
		<div style="margin-bottom: 100px; margin-top: 40px;  margin-left: 20%; background: white; width: 60%; border: 2px solid darkred;">
			<div style="margin: 0;height: 40px; background: darkred">
				<h1 style="color: white;text-align: center; margin:0">Central Library</h1>
			</div>
			<div style="padding:26px;">
			<img src="image/lib1.jpg" style= 'border:3px solid darkred;' width="350px;" height="300px" />
			<img src="image/lib2.jpg" style= 'border:3px solid darkred; margin-left: 40px' width="350px;" height="300px" />
			</div>
			<div style="padding: 20px; ">
			<p>
				The University has state of the art computer center. The center is well equipped with computing resources and caters to the academic needs of the University. The computer center provides hands on experience to the users and always keeps pace with the advancement of technology. The faculty and students in the university campus have free access to the computer center and use internet facility available therein. The Centre is equipped with the most advanced computer systems, line printers, laser printers, scanner, CD writers, zip drives etc.
			</p>
			<p>
				The computer center also offers courses like Diploma in Computer application (D.C.A.), Post Graduate Diploma in Computer Sciences (P.G.D.C.S.) and Certificate courses in Computer Sciences. This Center also carries out compilation and processing of data after the completion of examinations and is responsible for the preparation and timely declaration of the results.
			</p>
			<p>
			Board of Studies, Academic Council and Executive Council helps in the formulation and implementation of new academic programmes.
			</p>
			</div>
		</div>
	</div>
	<?php include_once("tools/footer.php"); ?>

</body>
</html>