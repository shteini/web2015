$(document).ready(function(){
	
	//$.post("https://titan.csit.rmit.edu.au/~e54061/wp/moviesJSON.php",function(data,success){

		var dataObj = {"AF":{"title":"Girlhood","summary":"This is not the Louvre","poster":"https:\/\/titan.csit.rmit.edu.au\/~e54061\/wp\/movie-service\/AF.jpg","trailer":"https:\/\/titan.csit.rmit.edu.au\/~e54061\/wp\/movie-service\/AF.mp4","rating":"https:\/\/titan.csit.rmit.edu.au\/~e54061\/wp\/movie-service\/rMA.jpg","description":["The hugely anticipated new film from writer\/director C\u00e9line Sciamma (Tomboy, Water Lilies), GIRLHOOD is a sensational story of female empowerment set in the tough neighbourhoods of Paris.","Mariame (an incendiary, star-making performance from Karidja Tour\u00e9) is a shy 16-year-old who lives with her mostly absent mother, a domineering older brother, and two younger sisters of whom she largely takes responsibility for caring. Left behind at high school where she’s told her grades are too poor to continue, Mariame is soon lured out of her shell by three vivacious neighborhood teens. Enthralled by their bravado and brash energy, Mariame quickly adopts their flashier look and adapts to their bolder and often reckless behavior, making both foolish and brave choices as she struggles towards independence.","Depicting a side of Paris unseen from the top of the Eiffel Tower, GIRLHOOD finds irresistible energy in these young characters for whom attitude is everything. Featuring sumptuous cinematography and a jubilant soundtrack, the film builds momentum with every scene, and exudes life from every frame."],"screenings":{"Monday":"6pm","Tuesday":"6pm","Saturday":"3pm","Sunday":"3pm"}},"CH":{"title":"Inside Out","summary":"Herman's Head Reloaded","poster":"https:\/\/titan.csit.rmit.edu.au\/~e54061\/wp\/movie-service\/CH.jpg","trailer":"https:\/\/titan.csit.rmit.edu.au\/~e54061\/wp\/movie-service\/CH.mp4","rating":"https:\/\/titan.csit.rmit.edu.au\/~e54061\/wp\/movie-service\/rG.jpg","description":["Do you ever look at someone and wonder what is going on inside their head? Disney\/Pixar's semi-original new film \"Inside Out\" ventures inside the mind to find out.","Based in Headquarters, the control center inside 11-year-old Riley’s mind, five Emotions are hard at work, led by lighthearted optimist Joy (voice of Amy Poehler), whose mission is to make sure Riley stays happy. Fear (voice of Bill Hader) heads up safety, Anger (voice of Lewis Black) ensures all is fair and Disgust (voice of Mindy Kaling) prevents Riley from getting poisoned-both physically and socially.","Sadness (voice of Phyllis Smith) isn’t exactly sure what her role is, and frankly, neither is anyone else."],"screenings":{"Monday":"1pm","Tuesday":"1pm","Wednesday":"6pm","Thursday":"6pm","Friday":"6pm","Saturday":"12pm","Sunday":"12pm"}},"RC":{"title":"Train Wreck","summary":"Don't be a Princess","poster":"https:\/\/titan.csit.rmit.edu.au\/~e54061\/wp\/movie-service\/RC.jpg","trailer":"https:\/\/titan.csit.rmit.edu.au\/~e54061\/wp\/movie-service\/RC.mp4","rating":"https:\/\/titan.csit.rmit.edu.au\/~e54061\/wp\/movie-service\/rR.jpg","description":["Since she was a little girl, Amy has been brought up by her strict authoritatian father to believe that monogamy is the root of all evil. Now a magazine writer, Amy follows her father’s advice to the letter, sleeping with every man she can, giving this film a well deserved R rating.","Whilst writing about a successful sports doctor who looks a bit like Dexter’s younger weedy brother, she finds herself falling in love with someone who has a \"nice personality\". Was her father’s fatherly advice flawed?","Amy realises that she must choose between her future happiness and her father’s love and respect."],"screenings":{"Monday":"9pm","Tuesday":"9pm","Wednesday":"1pm","Thursday":"1pm","Friday":"1pm","Saturday":"6pm","Sunday":"6pm"}},"AC":{"title":"Mission Impossible: Rogue Nation","summary":"Tom Needs a Wife","poster":"https:\/\/titan.csit.rmit.edu.au\/~e54061\/wp\/movie-service\/AC.jpg","trailer":"https:\/\/titan.csit.rmit.edu.au\/~e54061\/wp\/movie-service\/AC.mp4","rating":"https:\/\/titan.csit.rmit.edu.au\/~e54061\/wp\/movie-service\/rM.jpg","description":["With the IMF disbanded and another marriage on the rocks, Ethan (Tom Cruise) is out in the cold with another large divorce payout looming. The team now faces off against a network of highly skilled special agents, the Syndicate.","These highly trained operatives are hellbent on creating a new world order through an escalating series of terrorist attacks. Ethan gathers his team and joins forces with disavowed British agent Ilsa Faust (Rebecca Ferguson), who may or may not be a member of this rogue nation, as the group faces their most impossible mission yet.","Will Tom find true love on set, or will we have to wait for the next MIP episode?"],"screenings":{"Wednesday":"9pm","Thursday":"9pm","Friday":"9pm","Saturday":"9pm","Sunday":"9pm"}}};
		var movieItems = $(".movie-item").toArray();
		var i = 0;
		$.each(dataObj,function(){

			var htmlElement = movieItems[i];
			$(htmlElement).find(".movie-img").attr("src",this.poster);
			var description = this.description[1];
			var rating = this.rating;
			var summary = this.summary;
			$(htmlElement).find(".movie-description").html(description + rating + summary); //And fix this to use correct descriptions

			$(htmlElement).parents("li").find("video").attr("src",this.trailer);
			i++;
		})
		
	//})


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

