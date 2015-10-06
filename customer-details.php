<?php session_start(); 
	session_destroy();  //REMOVE THIS WHEN TESTING THE SUBMISSION TO NEXT PAGE !!!!
?>

<!DOCTYPE html>
<html lang="en">
<?php include("head.php");?>
<body>
	<div class="content-container">
		<?php include("header.php");?>
		<div id="contactus-container">
			<form id="form-content" action="ticket.php" method="post">
				
					<label for="name">Name:</label>  <!-- Sorry but this regex doesnt work properly either -->
					<input id="name" class="customer-details" type="text" name="name" pattern= "[A-Za-z]{15}" autofocus="true" required>
					<br>
					<label for="lastname">Lastname:</label> 
					<input id="lastname" class="customer-details" type="text" name="lastname">
					<br>
					<label for="email">Email</label> 
					<input id="email" type="email" name="email" autofocus="true" required placeholder="example@email.com">
					<br>
					<label for ="mobno">Mobile number:</label>   <!-- Phone number pattern needs to work with +61 as well, lat digit will not be read at the moment -->
					<input id="mobno" class="customer-details" type="text" name="mobno" patter="((04)|04|+61)([ ]?\d{4})([ ]?\d{4})" title="Australian mobile number required">
					<br>
					<br>

					<input id="submit" type="submit" value="Submit">
					
			</form>
		</div>

		<?php include("footer.php");?>
    </div>
</body>
</html>