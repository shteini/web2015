$(document).ready(function(){

	var url = window.location.href;
	$(".barcode").qrcode({
	"render":"div",
	"size": 80,
    "color": "#3a3",
    "text": url,
	});


})