<?php 
session_start(); 
?>

<!DOCTYPE html>
<html lang="en">
<?php include("head.php"); ?>
<body>

	
	
		
	<div class="content-container">
		<?php include("header.php"); ?>
		<div id="movies-body-container">

			<ul>
				<li id="girlhood">
					<div class="movie-item">

						<img class="movie-img" src="" alt="">

						<div class="movie-information">
							<h2 class="movieName"></h2>
							<img class="rating" src="" alt="">
							<p class="movie-description"></p>
						</div>
						
					</div>
					<button class='displaySessionTimes'>Movie Session Times</button>
					<div class="sessionTimes">
						<div class="sessions-container">
							<div class="session">
								<p>Monday</p>
								<p><a href="/bookings.php?movie=girlhood&day=monday&time=6_PM">6:00pm</a></p>
							</div>
							<div class="session">
								<p>Tuesday</p>
								<p><a href="/bookings.php?movie=girlhood&day=tuesday&time=6_PM">6:00pm</a></p>
							</div>
							<div class="session">
								<p>Saturday</p>
								<p><a href="/bookings.php?movie=girlhood&day=saturday&time=3_PM">3:00pm</a></p>
							</div>
							<div class="session">
								<p>Sunday</p>
								<p><a href="/bookings.php?movie=girlhood&day=sunday&time=3_PM">3:00pm</a></p>
							</div>
						  	
						</div>
						<video controls class="videoStyle">
						</video>
						
					</div>
				</li>
				<li id="insideout">
					<div class="movie-item">
						<img class="movie-img" src="" alt="">
						<div class="movie-information">
							<h2 class="movieName"></h2>
							<img class="rating" src="" alt="">
							<p class="movie-description"></p>
						</div>
						

					</div>
					<button class='displaySessionTimes'>Movie Session Times</button>
					<div class="sessionTimes">
						<div class="sessions-container">
						  	<div class="session">
								<p>Monday</p>
								<p><a href="/bookings.php?movie=inside_out&day=monday&time=1_PM">1:00pm</a></p>
							</div>
							<div class="session">
								<p>Tuesday</p>
								<p><a href="/bookings.php?movie=inside_out&day=tuesday&time=1_PM">1:00pm</a></p>
							</div>
							<div class="session">
								<p>Wednesday</p>
								<p><a href="/bookings.php?movie=inside_out&day=wednesday&time=6_PM">6:00pm</a></p>
							</div>
							<div class="session">
								<p>Thursday</p>
								<p><a href="/bookings.php?movie=inside_out&day=thursday&time=6_PM">6:00pm</a></p>
							</div>
							<div class="session">
								<p>Friday</p>
								<p><a href="/bookings.php?movie=inside_out&day=friday&time=6_PM">6:00pm</a></p>
							</div>
							<div class="session">
								<p>Saturday</p>
								<p><a href="/bookings.php?movie=inside_out&day=saturday&time=12_PM">12:00pm</a></p>
							</div>
							<div class="session">
								<p>Sunday</p>
								<p><a href="/bookings.php?movie=inside_out&day=sunday&time=12_PM">12:00pm</a></p>
							</div>
						</div>
						<video controls class="videoStyle">
						</video>
						
					</div>
				</li>
				

				<li id="trainwreck">
					<div class="movie-item">
						<img class="movie-img" src="" alt="">
						<div class="movie-information">
							<h2 class="movieName"></h2>
							<img class="rating" src="" alt="">
							<p class="movie-description"></p>
						</div>

					</div>
					<button class='displaySessionTimes'>Movie Session Times</button>
					<div class="sessionTimes">
						<div class="sessions-container">
							<div class="session">
								<p>Monday</p>
								<p><a href="/bookings.php?movie=train_wreck&day=monday&time=9_PM">9:00pm</a></p>
							</div>
							<div class="session">
								<p>Tuesday</p>
								<p><a href="/bookings.php?movie=train_wreck&day=tuesday&time=9_PM">9:00pm</a></p>
							</div>
							<div class="session">
								<p>Wednesday</p>
								<p><a href="/bookings.php?movie=train_wreck&day=wednesday&time=1_PM">1:00pm</a></p>
							</div>
							<div class="session">
								<p>Thursday</p>
								<p><a href="/bookings.php?movie=train_wreck&day=thursday&time=1_PM">1:00pm</a></p>
							</div>
							<div class="session">
								<p>Friday</p>
								<p><a href="/bookings.php?movie=train_wreckl&day=friday&time=1_PM">1:00pm</a></p>
							</div>
							<div class="session">
								<p>Saturday</p>
								<p><a href="/bookings.php?movie=train_wreck&day=saturday&time=6_PM">6:00pm</a></p>
							</div>
							<div class="session">
								<p>Sunday</p>
								<p><a href="/bookings.php?movie=train_wreck&day=sunday&time=6_PM">6:00pm</a></p>
							</div>
						</div>
						<video controls class="videoStyle">
						</video>
						
					</div>
				</li>
				

				<li id="missionimpossible">
					<div class="movie-item">

						<img class="movie-img" src="" alt="">
						<div class="movie-information">
							<h2 class="movieName"></h2>
							<img class="rating" src="" alt="">
							<p class="movie-description"></p>
						</div>

					</div>
					<button class='displaySessionTimes'>Movie Session Times</button>
					<div class="sessionTimes">
						<div class="sessions-container">
							<div class="session">
								<p>Wednesday</p>
								<p><a href="/bookings.php?movie=mission_impossible&day=wednesday&time=9_PM">9:00pm</a></p>
							</div>
							<div class="session">
								<p>Thursday</p>
								<p><a href="/bookings.php?movie=mission_impossible&day=thursday&time=9_PM">9:00pm</a></p>
							</div>
							<div class="session">
								<p>Friday</p>
								<p><a href="/bookings.php?movie=mission_impossible&day=friday&time=9_PM">9:00pm</a></p>
							</div>
							<div class="session">
								<p>Saturday</p>
								<p><a href="/bookings.php?movie=mission_impossible&day=saturday&time=9_PM">9:00pm</a></p>
							</div>
							<div class="session">
								<p>Sunday</p>
								<p><a href="/bookings.php?movie=mission_impossible&day=sunday&time=9_PM">9:00pm</a></p>
							</div>
						</div>
						<video controls class="videoStyle">
						</video>
						
					</div>
				</li>
				
			</ul>

		</div>


		<script src="js/movies.js"></script>

		<?php include("footer.php"); ?>

	</div>
</body>
</html>
