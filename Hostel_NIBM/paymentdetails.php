<!DOCTYPE html>
<html>
<head>
	<title>Payment</title>
	<link rel="stylesheet" type="text/css" href="styleeee.css">
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css"  >
</head>
<body>
<div class="wrapper">
	<h2>Payment Form</h2>
	<form name="Payment" method="post" action="payment.php">
		<h4>Account</h4>
		<div class="input_group">
			<div class="input_box">
				<input type="text" placeholder="Full Name" required class="name" name="txtFN">
				<i class="bi bi-person-fill"></i>
			</div>
			<div class="input_box">
				<input type="text" placeholder="Name On Card" required class="name" name="txtNOC">
				<i class="bi bi-person-fill"></i>
			</div>
		</div>
		<div class="input_group">
			<div class="input_box">
				<input type="email" placeholder="Email Address" required class="name" name="txtEmail">
				<i class="bi bi-envelope-fill"></i>
			</div>
		</div>
		
		<div class="input_group">
			<div class="input_box">
				<h4>Payment Details</h4>
				<input type="radio" name="pay" class="radio" id="bc1" checked>
				<label for="bc1">
					<span>
						<i class="bi bi-credit-card-fill"></i>Credit Card
					</span></label>
					<input type="radio" name="pay" class="radio" id="bc2" checked>
				<label for="bc2">
					<span>
						<i class="bi bi-paypal"></i>Paypal
					</span></label>
			</div>
		</div>
		<div class="input_group">
			<div class="input_box">
				<input type="tel" class="name" placeholder="Card
				Number 1111-2222-3333-4444" required name="txtCN">
				<i class="bi bi-credit-card-fill"></i>
			</div>
		</div>
		<div class="input_group">
			<div class="input_box">
				<input type="tel" class="name" placeholder="Card
				CVC 632" required name="txtCVC">
				<i class="bi bi-person-fill"></i>
			</div>
		</div>
		<div class="input_group">
			<div class="input_box">
				<input type="number" class="name" placeholder="Exp Month" required name="txtEM">
				<i class="bi bi-calendar-fill"></i>
			</div>
		</div>
		<div class="input_group">
			<div class="input_box">
				<input type="number" class="name" placeholder="Exp Year" required name="txtEY">
				<i class="bi bi-calendar-fill"></i>
			</div>
		</div>
		<div class="input_box">
				<input type="number" class="name" placeholder="Enter Amount" required name="txtA">
				<i class="bi bi-cash"></i>
			</div>
			<div class="input_group">
			<div class="input_box">
				<button type="submit" name="btnsubmit" onclick="validation();">Pay Now</button>
			</div>
		</div>

	</form>
</div>
</body>
</html>