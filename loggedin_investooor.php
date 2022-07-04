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
<body style="background-color:#09232eff;background-image: linear-gradient(to right, rgb(14, 47, 61),rgb(23, 130, 125))"">
	<div class="container">
		<div class="nav-wrapper">
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
					<a href="logout">Logout</a>
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
				<div class="selected select"><a href="loggedin_investooor"><p>&#128640; &nbsp;&nbsp;Investooor</p></a></div>
				<div class="selected"><a href="loggedin_profile"><p>&#128200; &nbsp;&nbsp;Open Positions</p></a></div>
				<div class="selected"><a href="loggedin_profile"><p>&#128201; &nbsp;&nbsp;Closed Positions</p></a></div>
				<div class="selected-last"><a href="loggedin_profile"><p>&#128736; &nbsp;&nbsp;Settings</p></a></div>
			</div>	
			<div class="contents">
				<p>Available in wallet</p>
				<p>INVESTOOR</p>
				<div class="description-card-text"> <p>Determine your individual and personalized portfolio exposure via the slider below</p>
          			<div class="form-group">
    				<label class='form-invest' for="price">Initial Investemnt</label>
    				<input type="text" name="price" value="1000" class="form-control">
    				</div>
				<div class="range">
					<div class="sliderValue">
					<label for="quantity"><span name='slider_span'>0</span></label>
					</div>
					<div class="field">
						<div class="value left"> RETAIL ONLY</div>
						<input name="slider_input" type="range" min="-100" max="100" value="0" steps="1">
						<div class="value right">QUANT ONLY</div>
					</div>
					</div>
					<div class="individ-apy-wrapper">
					<div class="drawdown-investor">
						<div class="apy-investor-text">CALCULATED APY</div>
						<span name='total2'>0</span>
					</div>
					<div class="apy-investor">
						<div class="drawdown-investor-text">MAX DRAWDOWN</div>
						<span name='total'>0</span>
					</div>
					</div>
					<script>
					const slideValue = document.querySelector("[name=slider_span]");
					const inputSlider = document.querySelector("[name=slider_input]");
					inputSlider.oninput = (()=>{
						let value = inputSlider.value;
						slideValue.textContent = value;
						slideValue.style.left = (value/2) + "%";
						slideValue.classList.add("show");
					});

					</script>
					<script type="text/javascript">
					// Grab the things I need in the DOM

					const priceInput = document.querySelector("[name=price]");
					const quantityInput = document.querySelector("[name=slider_input]");
					const total = document.querySelector("[name=total]");
					const total2 = document.querySelector("[name=total2]");
					const quantityLabel = document.querySelector("[name=slider_span]");

					// Write the function here
					function calculateDrawdownCost() {
						const price = priceInput.value;
						const quantity = quantityInput.value;
						const cost = price * quantity;
						console.log(cost);
						total.innerText = cost.toFixed(1) + "%";
					}
					function calculateApyCost() {
						const price = priceInput.value;
						const quantity = quantityInput.value;
						const cost = price * quantity;
						console.log(cost);
						total2.innerText = cost.toFixed(1) + "%";
					}

					//on first run
					calculateDrawdownCost();
					calculateApyCost();

					// Add Events Listeners
					priceInput.addEventListener("[name=price]", calculateDrawdownCost);
					quantityInput.addEventListener("input", calculateDrawdownCost);
					quantityInput.addEventListener("input", calculateApyCost);
					quantityInput.addEventListener("[name=slider_input]", updateQuantityLabel);

					</script>
					<div class="generate-contract">
					<a href="retail.html" class="sc-button"> Generate Smart Contract</a>
					</div>
				</div>
				<p> help</p>
				
				
		</div>
	</div>

</body>
</html>
