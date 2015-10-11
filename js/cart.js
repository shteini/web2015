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
		
		//alert(JSON.stringify(screenings));
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

	})

	$('.sub-total').change(function(){

		var grandTotal = 0;

		$('.sub-total').each(function(){
			grandTotal+=parseInt($(this).val(),10);
		})

		$('#grand-total').val(grandTotal.toFixed(2));
	})
	
	$("#voucher").keyup(function(){
		var voucher = $(this).val();
		$.post("validate-voucher.php",{'voucher':JSON.stringify(voucher)})
		.done(function(result){
				$("#voucher").append(result);
			});
	})


	$(".delete-screening").click(function(){
		var screening = $(this).attr('name');
		$(this).parents(".screening").fadeOut("slow","swing",function(){
			$(this).parents(".screening").remove();
			$.post("delete-screening.php",{'idToRemove':JSON.stringify(screening)})
			$('.sub-total').trigger("change");
		});


	})











	$(".delete-screening").click(function(){
		var screening = $(this).attr('name');
		$(this).parents(".screening").fadeOut("slow","swing",function(){
			$(this).parents(".screening").remove();
			$.post("delete-screening.php",{'idToRemove':JSON.stringify(screening)})
			$('.sub-total').trigger("change");
		});


	})










})
