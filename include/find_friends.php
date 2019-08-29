<!DOCTYPE html>
<?php
session_start();
include("include/connection.php");

if(!isset($_SESSION['user_email'])){
	header("location:signin.php");
}
else { ?>
<html>
<head>
	<title>Search for Friends</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="css/home.css">
	<link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
	
</head>
<body>
	<nav>
		<nav class="navbar-brand" href="#">
			<a class="navbar-brand" href="#">
				<?php
					$user = $_SESSION['user_email'];
					$get_user = "select * from users where user_emails='$user'";
					$run_user = mysqli_query($con, $get_user);
					$row = mysqli_fetch_array($run_user);

					$user_name = $row['user_name'];
					echo" <a href="../home.php?user_name=$user_name" 


					?>
	</nav>
</body>
</html>
<?php } ?>