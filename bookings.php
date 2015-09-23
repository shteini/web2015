<!DOCTYPE html>
<html lang="en">
<?php include("head.php"); ?>
<body>

	
	<div class="content-container">
	<?php include("header.php"); ?>

			<form id="bookings-form" action="http://titan.csit.rmit.edu.au/~e54061/wp/testbooking.php" method="post">
				<div id="form-columns">

				<div id="left-side">
						<!-- NEED TO PUT PRICE SELECTION INPUTS HERE
						**** They should automatically style themselves as I've set it up
						**** that way. Let me know if I can help :-) Hope you're having a good day today! -->
						<label for="SA">FullPrice:</label>
						<input name="SA" class="ticketing" type="number" min="0">
						<br>
						<label for="SP">Concession:</label>
						<input name="SP"class="ticketing" type="number" min="0">
						<br>
						<label for="SC">Child:</label>
						<input name="SC"class="ticketing" type="number" min="0">
						<br>
						<label for="FA">First Class - Adult:</label>
						<input name="FA"class="ticketing" type="number" min="0">
						<br>
						<label for="FC">First Class - Child:</label>
						<input name="FC"class="ticketing" type="number" min="0">
						<br>
						<label for="B1">First Class - Adult and Child Beanbag:</label>
						<input name="B1"class="ticketing" type="number" min="0">
						<br>
						<label for="B2">First Class - 2 Adults Beanbag:</label>
						<input name="B2"class="ticketing" type="number" min="0">
						<br>
						<label for="B3">First Class - 3 Children Beanbag:</label>
						<input name="B3"class="ticketing" type="number" min="0">
						<br>
						
					</div>
					<div id="right-side">
						<label for="movies">Movie</label>
						<select name="movie" id="movies" required>
						<option value="">Select a movie</option>
						<option value="Iron Man">Iron Man</option>	
						<option value="Mao's Last Dancer">Mao's Last Dancer</option>
						<option value="Tinkerbell">TinkerBell</option>
						<option value="The Proposal">The Proposal</option>
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
							<input name="price" id="total-price" type="text" readonly value="0.00">
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