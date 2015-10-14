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

		<!-- Print ticket data just like cart page maybe as pdf?? -->
		<?php 

			echo "<h2>".$_SESSION['customer_details']['firstName']." ".$_SESSION['customer_details']['lastName']. "</h2>";
			echo "<h2>".$_SESSION['customer_details']['email']."</h2>";
			echo "<h2>".$_SESSION['customer_details']['phone']."</h2>";
			echo "<h2>Total cost: $".$_SESSION['grandTotal'];

			if(isset($_SESSION['cart']))
			{
				for($i = 0; $i < count($_SESSION['cart']['screening']); $i++)
				{
				
					echo "<div class='screening'>";
					echo "<p>Movie name " .$_SESSION['cart']['screening'][$i]['movie_name']."</p>";
					echo "<p>Time " .$_SESSION['cart']['screening'][$i]['time']."</p>";
					echo "<p>Day " .$_SESSION['cart']['screening'][$i]['day']."</p>";
					readfile("ticket-table.php");
					
					foreach($_SESSION['cart']['screening'][$i]['tickets'] as $ticket)
					{
						echo "<tr class='ticket-row'>";
						echo "<td class='ticket-data'>".$ticket['ticket_type']."</td>";
						echo "<td class='ticket-data'>$".$ticket['price']."</td>";
						echo "<td class='ticket-data'>".$ticket['qty']."</td>";
						echo "<td class='ticket-data'>$".$ticket['total']."</td>";
						echo "</tr>";
					}
					echo "</table>";
					echo "</div>";		
					
				}
			}
		?>
		<a href='index.php'><button class='button'>Home</button></a>
		<!-- If time provided go to www.neocotic.com/qr.js/ to use qr codes :-) -->
</body>
</html>

<?php 
	file_put_contents("saved/".$_SESSION['customer_details']['email'].".html", ob_get_contents());
	unset($_SESSION);
	session_destroy();
 ?>

