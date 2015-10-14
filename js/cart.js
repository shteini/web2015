$(document).ready(function() {

	$(".qty").change(function() {

		var screenings = [];
		$(".ticket-table").each(function(){

			var quantaties = [];
			$(this).find(".qty").each(function(){
				var value = parseInt($(this).val(), 10);
				quantaties.push(value);
			})
			screenings.push(quantaties);
			
		});
		$.post("update-cart.php",{'data':JSON.stringify(screenings)})
			.done(function(data){
				//alert("Data Loaded: " + data);
		});

		var price = $(this).parents('tr').find('.ticket-price').val();
		var qty = $(this).parents('tr').find('.qty').val();
		price = parseInt(price,10);
		qty = parseInt(qty,10);

		$(this).parents('tr').find('.sub-total').val(price*qty);

		$('.sub-total').trigger("change");
		$('.screening-total').trigger("change");

	})

	$('.sub-total').change(function(){

		var grandTotal = 0;

		$('.sub-total').each(function(){
			grandTotal+=parseInt($(this).val(),10);
		})

		$('#grand-total').val(grandTotal.toFixed(2));	
	})

	$('.screening-total').change(function(){
		var screeningTotal = 0;
		$(this).parents('.screening').find('.ticket-row').each(function(){
			var subtotal = $(this).find('.sub-total').val();
			screeningTotal += parseInt(subtotal,10);
		})
		$(this).val(screeningTotal);

	})

	$(".delete-screening").click(function(){
		var screening = $(this).attr('name');
		$(this).parents(".screening").fadeOut("slow","swing",function(){
			$(this).parents(".screening").empty();
			$(this).parents(".screening").remove();
			$.post("delete-screening.php",{'idToRemove':JSON.stringify(screening)})
			$('.sub-total').trigger("change");
		});
	})

})
