$(document).ready(function(){
	
	$(".displaySessionTimes").click(function showSessionTimes()
	{
		$(this).parents("li").find(".sessionTimes").slideToggle(300);



	})
	
	$(".movie-img").click(function(){
		var windowSize = $(window).width();
		if(windowSize < 481)
		{
			$(this).next(".movie-description").slideToggle();
		}
		
		
	})
	
})

