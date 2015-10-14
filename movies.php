<?php 
session_start(); 
$pageTitle = "Now Showing";
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
		<script>
		$(document).ready(function(){
			$.post("https://<?php echo $_SERVER['SERVER_NAME'];?>/~e54061/wp/moviesJSON.php",function(data,success){

				var dataObj = JSON.parse(data);
				$.each(dataObj,function(i, movie){

				var li = $("#"+i);
				var htmlElement = $(li).find(".movie-item");
				$(htmlElement).find(".movie-img").attr("src",movie.poster);
				var description = movie.description[1];

				var title = movie.title;
				var rating = movie.rating;
				var summary = movie.summary; // Not being used atm

				$(htmlElement).find(".movie-information").find(".movieName").html(title);
				$(htmlElement).find(".movie-information").find(".rating").attr("src",rating);
				$(htmlElement).find(".movie-information").find(".movie-description").html(description);
				var screenings = movie.screenings;
				var sessionContainer = $(li).find(".sessions-container");
				$.each(screenings, function(key,name){
					var string = $("<div class='session'><p>"+key+"</p><p><a href='/bookings.php?movie="+movie.title.toLowerCase()+"&day="+key.toLowerCase()+"&time="+name+"'>"+name+"</a></p></div>");
					$(sessionContainer).append(string);
			});

			$(htmlElement).parents("li").find("video").attr("src",movie.trailer);
		})
		
	})


		})

		</script>

		<?php include("footer.php"); ?>

	</div>
</body>
</html>
