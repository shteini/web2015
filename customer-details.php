<?php session_start(); 
$pageTitle = "Customer Details";
//var_dump($_SESSION);

?>

<!DOCTYPE html>
<html lang="en">
<?php include("head.php");?>
<body>
	<div class="content-container">
		<?php include("header.php");?>
		<div id="contactus-container">
			<form id="customer-details-form" action="ticket.php" method="post">
				
					<label for="name">Name:</label>
					<input id="name" class="customer-details" type="text" name="name" pattern="[A-Za-z'-]{2,}" autofocus="true" required>
					<br>
					<label for="lastname">Lastname:</label>
					<input id="lastname" class="customer-details" type="text" name="lastname" pattern="[A-Za-z'-]{2,}">
					<br>
					<label for="email">Email:</label> 
					<input id="email" type="email" name="email" autofocus="true" required placeholder="example@email.com" required>
					<br>
					<label for ="mobno">Mobile number:</label>
					<input id="mobno" class="customer-details" type="text" name="mobno" pattern="(\(04\)|04|\+614)[ ]?\d{4}[ ]?\d{4}" title="Australian mobile number required" required>
					<br>
					<br>
					<input id="submit" type="submit" value="Submit">
			</form>

			<div id="voucher-details">
				<label for='voucher'>Voucher:</label>
				<input type='text' name='voucher' id='voucher' pattern='^(\d{5})[-](\d{5})[-]([A-Z][{2})$'>
				<p id='status'></p>
			</div>
		</div>
		<script src="js/customer-details.js"></script>
		<?php include("footer.php");?>
    </div>
</body>
</html>