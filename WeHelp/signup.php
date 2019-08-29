<!DOCTYPE html>
<html>
<head>
	<title>CREATE NEW ACC</title>
	<meta charset="utff-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link href="http://fonts.googleapis.com/css?family=Roboto|Courgette|Pacifico:400,700" rel="stylesheet">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	<link rel="stylesheet" type="text/css" href="css/signup.css">
</head>
<body>
	<div class="signup-form">
		<form action="signup_user.php" method="post">
			<div class="form-header">
				<h2>Sign Up</h2>
				<p>Fill out this form and start a session</p>
			</div>
			<div class="form-group">
				<label>Username</label>
				<input type="text" class="form-control" name="user_name" placeholder="exp : azam" autocomplete="off" required>
			</div>
			<div class="form-group">
				<label>Password</label>
				<input type="password" class="form-control" name="user_pass" placeholder="Password" autocomplete="off" required>
			</div>
			<div class="form-group">
				<label>Email Address</label>
				<input type="email" class="form-control" name="user_email" placeholder="someone@site.com" autocomplete="off" required>
			</div>

				<div class="form-group">
				<label>Age</label>
				<select class="form-control" name="user_age" required>
					<option disabled="">Select Your Age</option>
					<option>12-16</option>
					<option>17-21</option>
					<option>22-35</option>
					<option>36+</option>
				</select>
			</div>
			<div class="form-group">
				<label>Gender</label>
				<select class="form-control" name="user_gender" required>
					<option disabled="">Select Your Gender</option>
					<option>Male</option>
					<option>Female</option>
					<option>Others</option>
				</select>
			</div>
			<div class="form-group">
				<label class="checkbox-inline"><input type="checkbox" required>I accept the <a href="#">Terms of Use &amp; <a href="#">Privacy Policy</a></label>
			</div>

			
			<div class="form-group">
				<button type="submit" class="btn btn-primary btn-block-lg" name="sign_up">Sign Up</button>
			</div>
			<?php include("signup_user.php"); ?>
		</form>
		<div class="text-center small" style="color: yellow;">Already have an acc? <a href="signin.php">Sign Here</a></div>


</body>
</html> 