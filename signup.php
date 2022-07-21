<?php
session_start();

	include("connection.php");
	include("functions.php");


	if($_SERVER['REQUEST_METHOD'] == "POST")
	{
		//something was posted
		$user_name = $_POST['user_name'];
		$password = $_POST['password'];

		if(!empty($user_name) && !empty($password) && !is_numeric($user_name))
		{

			//save to database
			$user_id = random_num(20);
			$query = "insert into users (user_id,user_name,password) values ('$user_id','$user_name','$password')";

			mysqli_query($con, $query);

			header("Location: account_login.php");
			die;
		}else
		{
			echo "Please enter some valid information!";
		}
	}
?>


<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Login</title>
    <link rel="stylesheet" href="login_index41.css">
  </head>
<body style="background-color:#09232eff;background-image: linear-gradient(to right, rgb(14, 47, 61),rgb(23, 130, 125))">
	<div class="modal-content">
		<a href="index"><span class="close">&times;</span></a>
		<h1>Sign Up</h1>
		<form method="post">
			<div class="txt_field">
				<input type="text" name="user_name">
				<span></span>
				<label>Choose a Username</label>
			</div>
			<div class="txt_field">
				<input type="password" name="password">
				<span></span>
				<label>Choose a Password</label>
			</div>
			<input id="button" type="submit" value="Signup">
			<p>If you already have an Account -
			<a href="account_login">Click here to Login</a></p>
		</form>
	</div>
</body>
</html>
