<?php 

session_start(); 
	ob_start();

	$customerDetails = array(
	'firstName' => $_POST['name'],
	'lastName' => $_POST['lastname'],
	'email' => $_POST['email'],
	'phone' => $_POST['mobno']
	);

	$_SESSION['customer_details'] = $customerDetails;
	$pageTitle = "Your Ticket";

?>

<!DOCTYPE html>
<html lang="en">
<?php include("head.php");?>
<body>
		<?php 
		if(isset($_SESSION['cart']))
		{
			echo "<h2>".$_SESSION['customer_details']['firstName']." ".$_SESSION['customer_details']['lastName']. "</h2>";
			echo "<h2>".$_SESSION['customer_details']['email']."</h2>";
			echo "<h2>".$_SESSION['customer_details']['phone']."</h2>";

			if(isset($_SESSION['discountPrice']))
			{
				echo "<h2>Total cost: $".$_SESSION['discountPrice'];
				echo "<h2>Voucher applied: ".$_SESSION['voucher'];
			}
			else
			{
				echo "<h2>Total cost: $".$_SESSION['grandTotal'];
			}
			
			for($i = 0; $i < count($_SESSION['cart']['screening']); $i++)
			{
			
				echo "<div class='screening'>";
				echo "<p>Movie name " .$_SESSION['cart']['screening'][$i]['movie_name']."</p>";
				echo "<p>Time " .$_SESSION['cart']['screening'][$i]['time']."</p>";
				echo "<p>Day " .$_SESSION['cart']['screening'][$i]['day']."</p>";
				readfile("ticket-table.php");
				
				foreach($_SESSION['cart']['screening'][$i]['tickets'] as $ticket)
				{
					if($ticket['total'] > 0)
					{
						echo "<tr class='ticket-row'>";
						echo "<td class='ticket-data'>".$ticket['ticket_type']."</td>";
						echo "<td class='ticket-data'>$".$ticket['price']."</td>";
						echo "<td class='ticket-data'>".$ticket['qty']."</td>";
						echo "<td class='ticket-data'>$".$ticket['total']."</td>";
						echo "</tr>";
					}
				}
				echo "</table>";
				echo "</div>";		
			}
		}
		else
		{
			echo "<div id='no-ticket'>";
			echo "<h2>Woops Your cart appears to be empty</h2>";
			echo "<br><h2>Please make another booking to receive a ticket</h2>";
			echo "<a href='index.php'><button id='go-home'>Home</button></a>";
			echo "</div>";
		}
		file_put_contents("saved/".$_SESSION['customer_details']['email'].".html", ob_get_contents());
		echo "<a href='index.php'><button id='go-home'>Home</button></a>";
		ob_start();
		?>
		<!-- If time provided go to www.neocotic.com/qr.js/ to use qr codes :-) -->
</body>
</html>

<?php 
	file_put_contents("saved/".$_SESSION['customer_details']['email'].".html", ob_get_contents(),FILE_APPEND);
	unset($_SESSION);
	session_destroy();
 ?>

