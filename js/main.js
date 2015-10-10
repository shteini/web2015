$(document).ready(function(){
	
	$.post("https://titan.csit.rmit.edu.au/~e54061/wp/moviesJSON.php",function(data,success){

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



/* initialises the google map on contact us page
** Currently this function is being called on window
** load for every page, meed to fix this */







