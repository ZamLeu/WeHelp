<?php
include("include/connection.php");

	if(isset($_POST['sign_up'])){

		$name = htmlentities(mysqli_real_escape_string($con, $_POST['user_name']));
		$pass = htmlentities(mysqli_real_escape_string($con, $_POST['user_pass']));
		$email = htmlentities(mysqli_real_escape_string($con, $_POST['user_email']));
		$age = htmlentities(mysqli_real_escape_string($con, $_POST['user_age']));
		$gender = htmlentities(mysqli_real_escape_string($con, $_POST['user_gender']));
		$rand = rand(1,2);

		if($name == ''){
			echo "<script>alert('we cant verify ur name')</script>";
		}
		if(strlen($pass)<8){
			echo "<script>alert('WEAK PASS! Must be 8 characters long')</script>";
			exit();
		}
		
		$check_email = "select * from users where user_email='$email'";
		$run_email = mysqli_query($con, $check_email);

		$check = mysqli_num_rows($run_email);

		if($check==1){

			echo "<script>alert('email already exist')</script";
			echo "<script>window.open('signup.php', '_self')</script>";
			exit();
		}

		if($rand == 1)
			$profile_pic = "img/6.jpg";
		else if($rand == 2)
			$profile_pic = "img/3.jpg";

		$insert = "INSERT INTO users (user_name, user_pass, user_email, user_profile, user_age, user_gender) VALUES ('$name', '$pass', '$email', '$profile_pic', '$age', '$gender')";

		$query = mysqli_query($con, $insert);

		if($query){

			echo "<script>alert('Congratulations $name, your account has been created sucessfully')</script>";
			echo "<script>window.open('signin.php', '_self')</script>";
		}
		else{

			echo "<script>alert('Registration failed')</script>";
			echo "<script>window.open('signup.php', '_self')</script>";
		}
		
}

?>

