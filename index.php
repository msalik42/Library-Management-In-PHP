<?php
	session_start() ;
	session_destroy() ;
	include_once("php/connection.php");
?>
<!DOCTYPE html>
<html>
<head>
	<title>Librery Management</title>
	<link rel="stylesheet" type="text/css" href="css/index_style.css" />
	<link rel="stylesheet" type="text/css" href="css/book.css" />
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
	<?php include_once("tools/header.php"); ?>
	<div id="content" style="float: left;">
		<div id="book">
			<div id="main_body">
				<div id="book_search">
					<center>
						<form action=" " method="POST">
							<input id="input" type="search" name="book_name" placeholder="search book" autofocus="true" />
							<input id="search" results="2" style="width: 100px;" type="submit" name="submit" value="Search" />
							<button id="search" onclick="reset()">Clear</button>
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
										echo "<h1 style='text-align:center; opacity: 0.9; background:black; color: white; width 200px;'>".$book_name."</h1> <br/>";
							}
						}
					}
				?>

			</div>
		</div>
		<div id="read_online">
			<?php include_once("tools/read_online.php"); ?>
		</div>
	</div>
	<?php include_once("tools/footer.php"); ?>
</body>
</html>