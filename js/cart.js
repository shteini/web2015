$(document).ready(function() {

	$(".qty").change(function() {

	var quantaties = [];

	$(".qty").each(function(){

		var value = parseInt($(this).val(), 10);

		quantaties.push({"qty": value});
	});

	var data = JSON.stringify(quantaties);
		


		$.ajax({
			type: "POST",
			url: "cart-change.php",
			data: data,
			dataType: "json"
		})	

	})
})