<?php 
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<?php include("head.php"); ?>
<body>

	
	<div class="content-container">
	<?php include("header.php"); ?>

			<form id="bookings-form" action="cart-session.php" method="post">
				<div id="form-columns">

				<div id="left-side">
						<!-- NEED TO PUT PRICE SELECTION INPUTS HERE
						**** They should automatically style themselves as I've set it up
						**** that way. Let me know if I can help :-) Hope you're having a good day today! -->

						<label for="ticket[SA]">Adult:</label>
						<input name="ticket[SA]" class="ticketing" type="number" min="0">
						<br>
						<label for="ticket[SP]">Concession:</label>
						<input name="ticket[SP]"class="ticketing" type="number" min="0">
						<br>
						<label for="ticket[SC]">Child:</label>
						<input name="ticket[SC]"class="ticketing" type="number" min="0">
						<br>
						<label for="ticket[FA]">First Class - Adult:</label>
						<input name="ticket[FA]"class="ticketing" type="number" min="0">
						<br>
						<label for="ticket[FC]">First Class - Child:</label>
						<input name="ticket[FC]"class="ticketing" type="number" min="0">
						<br>
						<label for="ticket[B1]">First Class - Adult and Child Beanbag:</label>
						<input name="ticket[B1]"class="ticketing" type="number" min="0">
						<br>
						<label for="ticket[B2]">First Class - 2 Adults Beanbag:</label>
						<input name="ticket[B2]"class="ticketing" type="number" min="0">
						<br>
						<label for="ticket[B3]">First Class - 3 Children Beanbag:</label>
						<input name="ticket[B3]"class="ticketing" type="number" min="0">
						<br>
						
					</div>
					<div id="right-side">
						<label for="movies">Movie</label>
						<select name="movie_name" id="movies" required>
						<option value="">Select a movie</option>
						<option value="Girlhood">Girlhood</option>	
						<option value="Inside Out">Inside Out</option>
						<option value="Train Wreck">Train Wreck</option>
						<option value="Mission Impossible">Mission Impossible: Rogue Nation</option>
						</select>
						<br>

						<label for="movietype">Movie Type</label>
						<select name="movie" id="movietype">
						<option value="AC">Action Movie</option>	
						<option value="CH">Children's Movie</option>
						<option value="AF">Art / Foreign Movie</option>
						<option value="RC">Romantic Comedy Movie</option>
						</select>
						<br>

						<label for="bookingday">Day</label>
						<select name="day" id="day" required>
						<option value="">Select a day</option>
						<option value="Monday">Monday</option>	
						<option value="Tuesday">Tuesday</option>
						<option value="Wednesday">Wednesday</option>
						<option value="Thursday">Thursday</option>
						<option value="Friday">Friday</option>
						<option value="Saturday">Saturday</option>
						<option value="Sunday">Sunday</option>
						</select>
						<br>

						<label for="movietime">Time</label>
						<select name="time" id="time">
						<option value="">Select a Time</option>
						<option value="12 PM">12 PM</option>
						<option value="1 PM">1 PM</option>	
						<option value="3 PM">3 PM</option>
						<option value="6 PM">6 PM</option>
						<option value="9 PM">9 PM</option>
						</select>
						<div id="total-price-container">
							<label id="price-label" for="price">Total:$</label>
							<input id="total-price" type="text" readonly value="0.00">
						</div>
					</div>
				</div>
				<input id="submit-booking" type="submit" value="Buy"/>
			
			</form>
		
	
	<script src="js/bookings.js"></script>
	

	<?php include("footer.php"); ?>
	</div>
</body>
</html>