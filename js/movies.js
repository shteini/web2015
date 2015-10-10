$(document).ready(function(){
	
	$.post("https://titan.csit.rmit.edu.au/~e54061/wp/moviesJSON.php",function(data,success){

		var movieItems = $(".movie-item").toArray();
		var i = 0;
		var dataObj = JSON.parse(data);
		$.each(dataObj,function(){

			var htmlElement = movieItems[i];
			$(htmlElement).find(".movie-img").attr("src",this.poster);
			var description = this.description[1];

			var title = this.title;
			var rating = this.rating;
			var summary = this.summary; // Not being used atm

			$(htmlElement).find(".movie-information").find(".movieName").html(title);
			$(htmlElement).find(".movie-information").find(".rating").attr("src",rating);
			$(htmlElement).find(".movie-information").find(".movie-description").html(description);

			// NEED TO DO SESSIONS WITH JSON AS WELL


			$(htmlElement).parents("li").find("video").attr("src",this.trailer);
			i++;
		})
		
	})


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

