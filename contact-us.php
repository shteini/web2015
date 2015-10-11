<?php 
session_start(); 
$pageTitle = "Contact Us";
?>

<!DOCTYPE html>
<html lang="en">
<?php include("head.php"); ?>
<body>

	
	
	<div class="content-container">
		<?php include("header.php"); ?>
		<div id="contactus-container">
			<form id="form-content" action="http://titan.csit.rmit.edu.au/~e54061/wp/testcontact.php" method="post">
				
					
					<label for="email">Email</label> 
					<input id="email" type="email" name="email" autofocus="true" required placeholder="example@email.com">
					<br>
					<label for="subject">Subject</label> 
					<select name="subject" id="subject">
						<option value="General Enquiry">General Enquiry</option>
						<option value="Group and Corporate Bookings">Group and Corporate Bookings</option>
						<option value="Suggestions and Complaints">Suggestions and Complaints</option>
					</select>
					<br>
					<label for="message:">Message</label>
					<textarea name="message" id="message" cols="30" rows="10" placeholder="Write your message here" required></textarea>
					<br>
					<br>

					<input id="submit" type="submit" value="Send Message">
					
			</form>

			<div id="map">
				
			</div>
		</div>

	<script src="https://maps.googleapis.com/maps/api/js"></script>
	<script src="js/map.js"></script>
	<script type="text/javascript">
			google.maps.event.addDomListener(window, 'load', initialize);
	</script>
	
	<?php include("footer.php"); ?>
	

	</div>
</body>

</html>





