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

			//read from database
			$query = "select * from users where user_name = '$user_name' limit 1";
			$result = mysqli_query($con, $query);

			if($result)
			{
				if($result && mysqli_num_rows($result) > 0)
				{

					$user_data = mysqli_fetch_assoc($result);

					if($user_data['password'] === $password)
					{

						$_SESSION['user_id'] = $user_data['user_id'];
						header("Location: index.php");
						die;
					}
				}
			}

			echo "wrong username or password!";
		}else
		{
			echo "wrong username or password!";
		}
	}

?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Login</title>
    <link rel="stylesheet" href="login_index40.css">
  </head>
<body  style="background-color:#09232eff;">
	<div class="modal-content">
		<a href="index.html"><span class="close">&times;</span></a>
		<h1>Login</h1>
		<form method="post">
			<div class="txt_field">
				<input type="text" name="user_name">
				<span></span>
				<label>Username</label>
			</div>
			<div class="txt_field">
				<input type="password" name="password">
				<span></span>
				<label>Password</label>
			</div>
			<div class="pass">Forgot Password?</div>
			<input type="submit" value="Login">
			<div class="signup_link">
				Not a member? <a href="signup.php">Signup</a>
			</div>
		</form>
	</div>
</body>
</html>
