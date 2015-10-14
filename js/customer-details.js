$(document).ready(function(){


	$("#voucher").keyup(function(){
		var voucher = $(this).val();
		$('#status').html("Checking ...");
		$.post("validate-voucher.php",{'voucher':voucher})
		.done(function(result){
				$("#status").html(result); //Modify this
			});
	})

})