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
				<li id="AF">
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
						  	
						</div>
						<video controls class="videoStyle">
						</video>
						
					</div>
				</li>
				<li id="CH">
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
						  	
						</div>
						<video controls class="videoStyle">
						</video>
						
					</div>
				</li>
				

				<li id="RC">
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
							
						</div>
						<video controls class="videoStyle">
						</video>
						
					</div>
				</li>
				

				<li id="AC">
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
