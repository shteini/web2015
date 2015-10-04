<?php session_start(); 
	session_destroy();  //REMOVE THIS WHEN TESTING THE SUBMISSION TO NEXT PAGE !!!!
?>

<!DOCTYPE html>
<html lang="en">
<?php include("head.php");?>
<body>
	<div class="content-container">
		<div id="contactus-container">
			<form id="form-content" action="http://titan.csit.rmit.edu.au/~e54061/wp/testcontact.php" method="post">
				
					<label for="name">Name:</label> 
					<input id="name" type="text" name="name" pattern= "[A-Za-z]{15}" autofocus="true" required>
					<br>
					<label for="lastname">Lastname:</label> 
					<input id="lastname" type="text" name="lastname">
					<br>
					<label for="email">Email</label> 
					<input id="email" type="email" name="email" autofocus="true" required placeholder="example@email.com">
					<br>
					<label for ="mobno">Mobile number:</label>
					<input id="mobno" type="text" name="mobno" patter="((04)|04|+61)([ ]?\d{4})([ ]?\d{4})" title="Australian mobile number required">
 					<label for="message">Message</label>
					<textarea name="message" id="message" cols="30" rows="10" placeholder="Write your message here" required></textarea>
					<br>
					<br>

					<input id="submit" type="submit" value="Submit">
					
			</form>

		<?php include("footer.php");?>
    </div>
</body>
</html>