<!DOCTYPE html>
<html lang="en">

	<?php include("head.php"); ?>

	<body>
		
		<p></p>

		<div class="content-container">

			<?php include("header.php"); ?>
			
			<div id="poster">
				
				<img id="goposter" src="resources/openingposter.jpg" alt="Grand Opening" />
				
			</div>

			<div class="carousel">

				<div><a href="movies.php?#ironman"><img class="carousel-movie" src="resources/ironman.jpg" alt="ironman"></a></div>
				<div><a href="movies.php?#tinkerbell"><img class="carousel-movie" src="resources/tinkerbell.jpg" alt="tinkerbell"></a></div>
				<div><a href="movies.php?#dancer"><img class="carousel-movie" src="resources/art.jpg" alt="Mao's Last Dancer"></a></div>
				<div><a href="movies.php?#proposal"><img class="carousel-movie" src="resources/rom-com.jpg" alt="The Proposal"></a></div>
				
			</div>
			
			<div id="index-info">
				<div id="swirls">
					<img id="swirlTop" src="resources/wswirl.png" width="227px" height="78px" alt="swirl"/>
				</div>	
				<p>"We are a small cinema business that is located in the little town you call home! We have been 
				going through renovations for the past few months and have now opened again! With our new features,
				we have upgraded the cinema. New seatings! New 3D screening available! New Dolby lighting and new Dolby 
				sound system!
				
				There will be a Grand Opening on the 30th of September at 5PM, bring along your family and friends and take
				them away to a great movie! </p>
				<div id="swirls">
					<img id="swirlBottom" src="resources/wswirl.png" width="227px" height="78px" alt="swirl"/>
				</div>	
			
				
			</div>
			
			<?php include("footer.php"); ?>

		</div>

	</body>
</html>
