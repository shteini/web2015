$(document).ready(function(){
	
	$.post("https://titan.csit.rmit.edu.au/~e54061/wp/moviesJSON.php",function(data,success){

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
			// NEED TO DO SESSIONS WITH JSON AS WELL


			$(htmlElement).parents("li").find("video").attr("src",movie.trailer);
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

