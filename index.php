<?php 
session_start();
$pageTitle = "Home"; 
?>

<!DOCTYPE html>
<html lang="en">

	<?php include("head.php"); ?>

	<body>
		

		<div class="content-container">

			<?php include("header.php"); ?>
			
			<div id="poster">
				
				<img id="goposter" src="css/resources/openingposter.jpg" alt="Grand Opening" />
				
			</div>

			<div class="carousel">

				<div><a class="carousel-link" href="movies.php?#AF"><img class="carousel-movie" src="" alt=""></a></div>
				<div><a class="carousel-link" href="movies.php?#CH"><img class="carousel-movie" src="" alt=""></a></div>
				<div><a class="carousel-link" href="movies.php?#RC"><img class="carousel-movie" src="" alt=""></a></div>
				<div><a class="carousel-link" href="movies.php?#AC"><img class="carousel-movie" src="" alt=""></a></div>
				
			</div>
			
			<div id="index-info">
				<div id="swirls">
					<img id="swirlTop" src="css/resources/wswirl.png" width="227px" height="78px" alt="swirl"/>
				</div>	
				<p>"We are a small cinema business that is located in the little town you call home! We have been 
				going through renovations for the past few months and have now opened again! With our new features,
				we have upgraded the cinema. New seatings! New 3D screening available! New Dolby lighting and new Dolby 
				sound system!
				
				There will be a Grand Opening on the 30th of September at 5PM, bring along your family and friends and take
				them away to a great movie! </p>
				<div id="swirls">
					<img id="swirlBottom" src="css/resources/wswirl.png" width="227px" height="78px" alt="swirl"/>
				</div>	
			
				
			</div>
			
			
			<script src="js/slick.min.js"></script>
			<script src="js/main.js"></script>
			<?php include("footer.php"); ?>
		</div>

	</body>
</html>
