<?php session_start(); ?>

<!doctype html>
<html lang="en">
<?php include("head.php");?>
<title>Movie Cart</title>
<body>
	<div class="content-container">
    	<?php include("header.php");?>

		
		<?php 
			for($i = 0; $i < count($_SESSION['cart']['screening']); $i++)
			{
				if(isset($_SESSION['cart']))
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
						echo "<td class='ticket-data'>$<input class='ticket-price' type='number' min='0' readonly value='".$ticket['price']."'</td>";
						echo "<td class='ticket-data'><input class='qty' name='qty' type='number' min='0' value='".$ticket['qty']."'></td>";
						echo "<td class='ticket-data'>$<input class='sub-total' type='number' min='0' readonly value='".$ticket['total']."'</td>";
						echo "</tr>";
					}
					echo "</table>";
					echo "</div>";		
				}
			}

			if(!isset($_SESSION['cart']))
			{
				echo "<h2>Your cart is empty</h2>";
			}
			else
			{
				echo "<input type='number' name='grand-total' id='grand-total' readonly value='0.00'>";

				echo "<div id='buttons'>";
					echo "<a href='bookings.php'><button class='button'>Book More tickets</button></a>";
					echo "<a href='customer-details.php'><button class='button'>Checkout</button></a>";
					echo "</div>";
			}
		?>
		
		<script src="js/cart.js"></script>
		
    	<?php include("footer.php");?>
    </div>
</body>
</html>