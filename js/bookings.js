
$(document).ready(function(){
	$('.ticketing').change(function(){
		
		$('#total-price').val(0);
		var inputs = $('.ticketing').get();
		updateTotalPrice(inputs);
	})

	$('#movies').change(function(){
		var currentMovie = $(this).val().toLowerCase();
		var genre = getMovieGenre(currentMovie);
		
		removePricesAndValues();
		$('#movietype').prop("disabled",false);
		setupGenre($('#movietype > option'), genre);
		setupDayOptions(genre);
		$('#time').prop("disabled",true);
		$("#time > option[value='']").prop("selected",true);
	})
	$('#day').change(function(){

		var day = $(this).val().toLowerCase();
		var genre = $('#movietype option:selected').val();
		var timeOptions = $('#time > option');

		setupTimeOptions(genre,day,timeOptions);
		$('#time').trigger("change");
	})

	$('#time').change(function(){
		var day = $('#day option:selected').val().toLowerCase();
		var time = $(this).val();
		removePricesAndValues();
		setupPrices(day,time);
	})

	//initial values for all input type number
	$('input[type=number]').val("0");

	//update all selects with selected values
	//disable all non valid values in selects
	if(getUrlVariable("movie"))
	{
		$("#movies > option[value='']").hide();
	    var movie = insertSpace(getUrlVariable("movie"));
	    var elementID = "movies";
	    setupSelectElement(elementID, movie);
	    var genre = getMovieGenre(movie);
		$('#movietype').prop("disabled",false);
		setupGenre($('#movietype > option'), genre);
		setupDayOptions(genre);
		var day = getUrlVariable("day");
		setupSelectElement("day",day);
		var timeOptions = $('#time > option');
		setupTimeOptions(genre,day,timeOptions);
		var time = insertSpace(getUrlVariable("time"));
		setupSelectElement("time",time);
		setupPrices(day,time);
	}
	else
	{
		$("#movies > option[value='']").prop("selected",true);
		$("#movies > option[value='']").hide();
		$('#movietype').prop("disabled",true);
		$('#day').prop("disabled",true);
		$('#time').prop("disabled",true);
	}
})

function getMovieGenre(currentMovie)
{
	switch(currentMovie)
	{
		case "mission impossible": return 'AC';
						 break;
		case "girlhood": return 'AF';
								 break;
								 
		case "inside out": return 'CH';
						   break;
						   
		case "train wreck": return 'RC';
							 break;
	}
}

function setupTimeOptions(genre, day, timeOptions)
{
	$('#time').prop("disabled",false);
	
	switch(genre)
	{
		case 'AC': setupTimes(["9 PM"],timeOptions);
				   break;
				   


		case 'AF': if(day == "monday" || day == "tuesday")
				   {
				       setupTimes(["6 PM"],timeOptions);
				   }
				   else
				   {
				       setupTimes(["3 PM"],timeOptions);
				   }
				   break;


		case 'CH': if(day == "monday" || day == "tuesday")
				   {
				       setupTimes(["1 PM"],timeOptions);
				   }
				   else if(day == "saturday" || day == "sunday")
				   {
				       setupTimes(["12 PM"],timeOptions);
				   }
				   else
				   {
				       setupTimes(["6 PM"],timeOptions);
				   }
				   break;

		case 'RC': if(day == "monday" || day == "tuesday")
				   {
				       setupTimes(["9 PM"],timeOptions);
				   }
				   else if(day == "saturday" || day == "sunday")
				   {
				       setupTimes(["6 PM"],timeOptions);
				   }
				   else
				   {
				       setupTimes(["1 PM"],timeOptions);
				   }
				   break;


		default: console.log("Error with genre");
				 break;
	}
}

function setupDayOptions(genre)
{
	$('#day').prop("disabled",false);
	var dayOptions = $('#day > option');
	


	switch(genre)
	{
		case 'AC': setupDays(["wednesday","thursday","friday","saturday","sunday"],dayOptions);
				   //setupTimes({"9 PM"});
				   break;


		case 'AF': setupDays(["monday","tuesday","saturday","sunday"],dayOptions);
				   //setupTimes({"6 PM","3 PM"});
				   break;


		case 'CH': setupDays(["monday","tuesday","wednesday","thursday","friday","saturday","sunday"],dayOptions);
				   //setupTimes({"1 PM","6 PM","12 PM"}); 
				   break;

		case 'RC': setupDays(["monday","tuesday","wednesday","thursday","friday","saturday","sunday"],dayOptions);
				   //setupTimes({"9 PM","1 PM","6 PM"});
				   break;


		default: console.log("Error with genre");
				 break;
	}
}

function setupTimes(times,timeOptions)
{
	$.each(timeOptions,function(){
		
		if($.inArray($(this).val(),times) != -1)
		{
			$(this).show();
			$(this).prop("selected",true);
		}
		else
		{
			$(this).hide();
		}
	})
}

function setupDays(days,dayOptions)
{
	$.each(dayOptions,function(){
		
		if($(this).val() == "")
		{
			$(this).prop("selected",true);
		}
		if($.inArray($(this).val().toLowerCase(),days) != -1)
		{
			$(this).show();
		}
		else
		{
			$(this).hide();
		}

	})
	$()
}

function setupGenre(options, selectedOption)
{
	
	$.each(options,function(){

		if($(this).val() == selectedOption)
		{
			$(this).prop('selected',true);
		}
		else
		{
			$(this).hide();
		}

	})
			
}

function setupSelectElement(elementID, selectedOption)
{
	$("#"+elementID+" > option").each(function(){
		
		if($(this).val().toLowerCase() == selectedOption)
		{
			$(this).prop("selected",true);
		}
	})
}

// This function was adapted from an example on https://css-tricks.com
function getUrlVariable(variable)
{
	//retrieves the url path and removes the ?
	var path = window.location.search.substring(1);
	var keyValuePairs = path.split("&");

	for(var i = 0; i < keyValuePairs.length; i++)
	{
		var keyValuePair = keyValuePairs[i].split('=');
		if(keyValuePair[0] == variable)
		{
			return keyValuePair[1];
		}
	}
	return(false)
}

function insertSpace(name)
{
	name = name.replace(/_/g," ");
	name = name.replace(/%27/g,"'");
	return name;
}

function updateTotalPrice(inputs)
{	
	var totalPrice = 0;

	$.each(inputs,function(){

		var input = $(this);
		var name = input.attr('name');
		var value = input.val();
		var label = $("label[for='"+name+"']").text();
		var price = parseFloat(label.substring(label.indexOf("$")+1));
		totalPrice+= price * value;

	})
	$('#total-price').val(totalPrice.toFixed(2));
}

function removePricesAndValues()
{

	$('.ticketing').each(function(){
		var name = $(this).attr('name');
		var label = $("label[for='"+name+"']");
		var labelText = label.text().split('$')[0];
		label.text(labelText);

	})
	
	$('#total-price').val((0).toFixed(2));
	$('input[type=number]').val("0");
}

function setupPrices(day, time)
{
	if( (day == "monday" || day == "tuesday") || (day == "wednesday" && time == "1 PM") || (day == "thursday" && time == "1 PM") || (day == "friday" && time == "1 PM") )
	{
		var label = $("label[for='ticket[SA]']");
		var labelText = label.text();
		label.text(labelText.toString() + " $12");

		var label = $("label[for='ticket[SP]']");
		var labelText = label.text();
		label.text(labelText.toString() + " $10");

		var label = $("label[for='ticket[SC]']");
		var labelText = label.text();
		label.text(labelText.toString() + " $8");

		var label = $("label[for='ticket[FA]']");
		var labelText = label.text();
		label.text(labelText.toString() + " $25");

		var label = $("label[for='ticket[FC]']");
		var labelText = label.text();
		label.text(labelText.toString() + " $20");

		var label = $("label[for='ticket[B1]']");
		var labelText = label.text();
		label.text(labelText.toString() + " $20");
		
		var label = $("label[for='ticket[B2]']");
		var labelText = label.text();
		label.text(labelText.toString() + " $20");
		
		var label = $("label[for='ticket[B3]']");
		var labelText = label.text();
		label.text(labelText.toString() + " $20");
		
	}
	else
	{
		var label = $("label[for='ticket[SA]']");
		var labelText = label.text();
		label.text(labelText.toString() + " $18");

		var label = $("label[for='ticket[SP]']");
		var labelText = label.text();
		label.text(labelText.toString() + " $15");

		var label = $("label[for='ticket[SC]']");
		var labelText = label.text();
		label.text(labelText.toString() + " $12");

		var label = $("label[for='ticket[FA]']");
		var labelText = label.text();
		label.text(labelText.toString() + " $30");

		var label = $("label[for='ticket[FC]']");
		var labelText = label.text();
		label.text(labelText.toString() + " $25");

	var label = $("label[for='ticket[B1]']");
		var labelText = label.text();
		label.text(labelText.toString() + " $30");
		
		var label = $("label[for='ticket[B2]']");
		var labelText = label.text();
		label.text(labelText.toString() + " $30");
		
		var label = $("label[for='ticket[B3]']");
		var labelText = label.text();
		label.text(labelText.toString() + " $30");
	}
	
}








