$(document).ready(function() {

	$(".qty").change(function() {

		var currentQty = $(this).val();

		var price = $(this).parent("td").find("#ticket-price").val();

		var subTotal = $(this).parent("td").find("#sub-total");

		var newTotal = price*currentQty;

		subTotal.val(newTotal);

		



	})
})