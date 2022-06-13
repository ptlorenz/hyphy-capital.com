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
	<link rel="stylesheet" href="index_php52.css">
	<!-- Global site tag (gtag.js) - Google Analytics -->
	<script async src="https://www.googletagmanager.com/gtag/js?id=G-0PZH8E61PS"></script>
	<script>
		window.dataLayer = window.dataLayer || [];
		function gtag(){dataLayer.push(arguments);}
		gtag('js', new Date());

		gtag('config', 'G-0PZH8E61PS');
	</script>
</head>
<body style="background-color:#09232eff;background-image: linear-gradient(to right, rgb(14, 47, 61),rgb(23, 130, 125))">
	<div class="container">
		<div class="nav-wrapper" style="background-image: linear-gradient(to right, #17181f , #282c3c, #17181f )">
			<div class="left-side">
				<div class="nav-link-wrapper active-nav-link">

					<a href="index"><p>FUNDS</p></a>
				</div>
				<div class="nav-link-wrapper">
					<a href="about"><p>ABOUT</p></a>
				</div>
				<div class="nav-link-wrapper">
					<a href="about"><p>CONTACT US</p></a>
				</div>
			</div>
			<div class="middle-side">
				<a href="about"><img src="images/Hyphy_Logo.png" style="width:120px;height:65px;"></img></a>
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
	<div class="blocker-wrapper"></div>
	<div class="description-wrapper">
		<div class="description-header">Hello, <?php echo $user_data['user_name']; ?> &nbsp; &#128075;&#127996;</div>
		<div class="description-text">
			<p>You are succesfully logged into your account</p>
			<p></p>
		</div>
	</div>
	<div class="account-functions">
		<div class="description-text-php">
			<div class="profile-buttons">
				<div class="selected-first"><a href="loggedin_profile"><p>&#128100; &nbsp;&nbsp;Profile</p></a></div>
				<div class="selected"><a href="loggedin_investooor"><p>&#128640; &nbsp;&nbsp;Investooor</p></a></div>
				<div class="selected"><a href="loggedin_profile"><p>&#128200; &nbsp;&nbsp;Open Positions</p></a></div>
				<div class="selected"><a href="loggedin_profile"><p>&#128201; &nbsp;&nbsp;Closed Positions</p></a></div>
				<div class="selected-last"><a href="loggedin_profile"><p>&#128736; &nbsp;&nbsp;Settings</p></a></div>
			</div>
			<div class="contents">
				Click through the navigation bar on the right to check out your account features and try out the INVESTOOOR for unparalleled yield farming opportunities on the Ethereum Blockchain.
			</div>
		</div>
	</div>
	</div>

</body>
</html>
