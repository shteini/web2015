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
			<script>
			$(document).ready(function(){

				$.post("https://<?php echo $_SERVER['SERVER_NAME'];?>/~e54061/wp/moviesJSON.php",function(data,success){

					var carouselLinks = $(".carousel-link").toArray();
					var i = 0;
					var dataObj = JSON.parse(data);
					$.each(dataObj,function(){
						var htmlElement = carouselLinks[i];
						$(htmlElement).find(".carousel-movie").attr("src",this.poster);
						$(htmlElement).find(".carousel-movie").attr("alt",this.title);
						i++;
					})

					$('.carousel').slick({
					slidesToShow: 3,
				  	slidesToScroll: 1,
				 	autoplay: false,
				  	autoplaySpeed: 2500,
					});
					
					$(window).resize(function()
					{
						var windowSize = $(window).width();
						
						if(windowSize > 900)
						{
							$('.carousel').slick("slickSetOption","slidesToShow",3,true);
							
						}
						else if(windowSize < 900 && windowSize > 600)
						{
							$('.carousel').slick("slickSetOption","slidesToShow",2,true);
							$('.carousel').slick("slickSetOption","arrows",true,true);
						}
						else if(windowSize <= 600)
						{
							$('.carousel').slick("slickSetOption","slidesToShow",1,true);
							$('.carousel').slick("slickSetOption","arrows",false,true);
						}
					})
					
					$(window).trigger("resize");
						
				})	
	
			})
			</script>
			<?php include("footer.php"); ?>
		</div>

	</body>
</html>
