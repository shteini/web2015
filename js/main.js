$(document).ready(function(){
	
	
	$('.carousel').slick({
	slidesToShow: 3,
  	slidesToScroll: 1,
 	autoplay: true,
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



/* initialises the google map on contact us page
** Currently this function is being called on window
** load for every page, meed to fix this */







