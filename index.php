<?php
session_start();

	include("connection.php");
	include("functions.php");

	$user_data = check_login($con);

?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="icon" type="image/png" href="images/favicon.png"/>
	<title>Funds</title>
	<link rel="preconnect" href="https://fonts.gstatic.com">
	<link href="https://fonts.googleapis.com/css2?family=Lato&display=swap" rel="stylesheet">
	<link rel="stylesheet" href="index44.css">
	<!-- Global site tag (gtag.js) - Google Analytics -->
	<script async src="https://www.googletagmanager.com/gtag/js?id=G-0PZH8E61PS"></script>
	<script>
		window.dataLayer = window.dataLayer || [];
		function gtag(){dataLayer.push(arguments);}
		gtag('js', new Date());

		gtag('config', 'G-0PZH8E61PS');
	</script>
</head>
<body style="background-color:#09232eff;">
	<div class="container">
		<div class="nav-wrapper">
			<div class="left-side">
				<div class="nav-link-wrapper active-nav-link">

					<a href="index.html"><p>FUNDS</p></a>
				</div>
				<div class="nav-link-wrapper">
					<a href="about.html"><p>ABOUT</p></a>
				</div>
				<div class="nav-link-wrapper">
					<a href="about.html"><p>CONTACT US</p></a>
				</div>
			</div>
			<div class="middle-side">
				<a href="about.html"><img src="02_Marketing_copy/images/Hyphy_Logo.png" style="width:120px;height:65px;"></img></a>
			</div>
			<div class="right-side">
				<div class="login nav-link-wrapper">
					<!-- Trigger/Open The Modal -->
					<a href="logout.php">Logout</a>
					<!-- The Modal -->
				</div>
				<div class="brand">
					<p><a href="https://metamask.io/" class="button-wallet" target="_blank"> Connect Metamask</a></p>
				</div>
			</div>
		</div>
	</div>
	<br>
	Hello, <?php echo $user_data['user_name']; ?>
</body>
</html>
