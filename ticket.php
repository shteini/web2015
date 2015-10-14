<?php 

session_start(); 
	ob_start();

	if(isset($_POST))
	{
		$customerDetails = array(
		'firstName' => $_POST['name'],
		'lastName' => $_POST['lastname'],
		'email' => $_POST['email'],
		'phone' => $_POST['mobno']
		);
	}

	$_SESSION['customer_details'] = $customerDetails;
	$pageTitle = "Your Ticket";

?>

<!DOCTYPE html>
<html lang="en">
<?php include("head.php");?>
<link rel="stylesheet" type="text/css" href="css/ticket.css">
<body>

	<div id="ticket-container">
		<?php 
		if(isset($_SESSION['cart']))
		{
			echo "<div id='booking-details'>";
			echo "<h2>Customer Name:<span> ".$_SESSION['customer_details']['firstName']." ".$_SESSION['customer_details']['lastName']. "</span></h2>";
			echo "<h2>Email:<span> ".$_SESSION['customer_details']['email']."</span></h2>";
			echo "<h2>Phone No#:<span> ".$_SESSION['customer_details']['phone']."</span></h2>";

			if(isset($_SESSION['discountPrice']))
			{
				echo "<h2>Total cost: <span>$".$_SESSION['discountPrice']."</span></h2>";
				echo "<h2>Voucher applied: <span>".$_SESSION['voucher']."</span></h2>";
				echo "</div>";
			}
			else
			{
				echo "<h2>Total cost: <span>$".$_SESSION['grandTotal']."</span></h2>";
				echo "</div>";
			}
			
			for($i = 0; $i < count($_SESSION['cart']['screening']); $i++)
			{
				foreach($_SESSION['cart']['screening'][$i]['tickets'] as $ticket)
				{
					if($ticket['total'] > 0)
					{
						echo "<div class='cardWrap'>
	  							<div class='card cardLeft'>
						    		<h1>Silverado <span>Cinema</span></h1>
						    		<div class='title'>
						      			<h2>".$_SESSION['cart']['screening'][$i]['movie_name']."</h2>
						      			<span>movie</span>
						    		</div>
						    		<div class='name'>
						      			<h2>".$_SESSION['customer_details']['firstName']." ".$_SESSION['customer_details']['lastName']."</h2>
						      			<span>name</span>
						    		</div>
						    		<div class='seat'>
						      			<h2>".$_SESSION['cart']['screening'][$i]['day']."</h2>
						      			<span>day</span>
						    		</div>
						    		<div class='time'>
						      			<h2>".$_SESSION['cart']['screening'][$i]['time']."</h2>
						      			<span>time</span>
						    		</div>
						  		</div>
						  		<div class='card cardRight'>
						    	<div class='eye'></div>
						    	<div class='number'>
						      		<h3>".$ticket['key']."</h3>
						      		<span>type</span>
						    	</div>
						    	<div class='barcode'></div>
						  		</div>
							 </div>";
					}
				}		
			}
			file_put_contents("~/public_html/wp/a3/saved/".$_SESSION['customer_details']['email'].".html", ob_get_contents());
			echo "<a href='index.php'><button id='go-home'>Home</button></a>";
			ob_start();
		}
		else
		{
			echo "<div id='no-ticket'>";
			echo "<h2>Woops Your cart appears to be empty</h2>";
			echo "<br><h2>Please make another booking to receive a ticket</h2>";
			echo "<a href='index.php'><button id='go-home'>Home</button></a>";
			echo "</div>";
		}
		?>
		<!-- If time provided go to www.neocotic.com/qr.js/ to use qr codes :-) -->
	</div>
	<script src="//code.jquery.com/jquery-1.11.3.min.js"></script>
	<script src="js/jquery.qrcode-0.12.0.min.js"></script>
	<script>
		$(document).ready(function(){

			var url = "~/public_html/wp/a3/saved/<?php echo $_SESSION['customer_details']['email'];?>.html";
			console.log(url);
			$(".barcode").qrcode({
			"render":"div",
			"size": 80,
		    "color": "#3a3",
		    "text": url,
			});
		})

	</script>

</body>
</html>

<?php 
	file_put_contents("~/public_html/wp/a3/saved/".$_SESSION['customer_details']['email'].".html", ob_get_contents(),FILE_APPEND);
	unset($_SESSION);
	session_destroy();
 ?>

