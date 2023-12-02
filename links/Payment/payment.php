<?php
    include_once '../../configuration/config.php';
	session_start();
?>	

<?php 
	$_SESSION["getid"] = $_GET['name'];
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge" />
	<meta
	name="viewport"
	content="width=device-width,
			initial-scale=1.0"/>
	<link rel="stylesheet" href="../../Styles/paymentStyles.css?v=<?php echo time(); ?>"/>
	<script src="../../Javascript/newJava.js"></script>
</head>

<body style="background-image: url('../../pics/1920x1080-light-blue-solid-color-background.jpg');">

	<div class="container">
	<div class="main-content"></div>
	<div class="centre-content">
		<h1 class="price">100<span>/-</span></h1>
		<p class="course">
		Tourist Bus Fee Now Reduced!
		</p>
	</div>

	<div class="last-content">
		<center>
			<button type="button" name="coupon" class="pay-now-btn" onclick="enterCouponNo('coupon')">
				Apply Coupons for free bookings
			</button>
			<p id="result" style="font-size: large;"></p>
		</center>
	</div>

	<div class="card-details">
		<p>Pay using Credit or Debit card</p>

		<form method="POST" action="./submitPayment.php">
			<div class="card-number">
			<label> Card Number </label>
			<input
				id="cardNo"
				type="text"
				name="card_no"
				class="card-number-field"
				pattern="[0-9]{4}-[0-9]{4}-[0-9]{4}-[0-9]{4}"
				maxlength="19"
				placeholder="####-####-####-####"
				onkeyup="addHyphen(this)"
				required/>
			</div>

			<br/>

			<div class="date-number">
			<label> Expiry Date </label>
			<input type="month" 
					class="date-number-field"
					name="expiry"
					required/>
			</div>

			<div class="cvv-number">
			<label> CVV number </label>
			<input type="text" 
					name="cvv"
					class="cvv-number-field"
					pattern="[0-9][0-9][0-9]" 
					maxlength="3"
					size="3"
					placeholder="XXX"
					required/>
			</div>

			<div class="nameholder-number">
			<label> Card Holder name </label>
			<input
				type="text"
				name="name"
				class="card-name-field"
				placeholder="Enter your Name"
				required/>
			</div>

			<center>
				<br>
				
    			<input type="submit" value="PAY" class="submit-now-btn">

			</center>
		</div>
	</form>
	</div>
</body>
</html>