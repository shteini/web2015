<?php session_start();
//UNCOMMENT TO DEBUG POST DATA
/*
var_dump($_SESSION['cart']['screening']);
echo "<br> <br>";
echo "BEFORE";
var_dump($_SESSION['ticketTotalBefore']);
echo "<br> <br>";
echo "AFTER";
var_dump($_SESSION['ticketTotalAfter']);
echo "<br> <br>";
echo "POSTED DATA";
var_dump($_SESSION['postedData']);*/
$pageTitle = "My Cart";
?>

<!doctype html>
<html lang="en">
<?php include("head.php");?>
<body>
	<div class="content-container">
    	<?php include("header.php");?>

		
		<?php
			 
			if(isset($_SESSION['cart']) && !empty($_SESSION['cart']['screening']))
			{
				for($i = 0; $i < count($_SESSION['cart']['screening']); $i++)
				{
					
					echo "<div class='screening'>";
					echo "<p>Movie:- " .$_SESSION['cart']['screening'][$i]['movie_name']."</p>";
					echo "<p>Time:- " .$_SESSION['cart']['screening'][$i]['time']."</p>";
					echo "<p>Day:- " .$_SESSION['cart']['screening'][$i]['day']."</p>";
					readfile("ticket-table.php");
					
					foreach($_SESSION['cart']['screening'][$i]['tickets'] as $ticket)
					{
						echo "<tr class='ticket-row'>";
						echo "<td class='ticket-data'>".$ticket['ticket_type']."</td>";
						echo "<td class='ticket-data'>$<input class='ticket-price' type='number' min='0' readonly value='".$ticket['price']."'</td>";
						echo "<td class='ticket-data'><input class='qty' name='qty' type='number' min='0' value='".$ticket['qty']."'></td>";
						echo "<td class='ticket-data'>$<input class='sub-total' name='subtotal' type='number' min='0' readonly value='".$ticket['total']."'</td>";
						echo "</tr>";
					}
					echo "</table>";
					echo "<label for='screeningTotal'>Screening total: $</label>";
					echo "<input type='number' name='screeningTotal' id='screening-total' min='0' readonly value='".$_SESSION['cart']['screening'][$i]['screening_total']."'>";
					echo "<div class='remove-button-label'><label>Remove</label><button name='".$i."' class='delete-screening'>X</button></div>";
					echo "</div>";		
				}

				echo "<div id='voucher-grand-total'>";
				echo "<label for='grandtotal'>Total:$</label>";
				echo "<input type='number' name='grandtotal' id='grand-total' readonly value='".$_SESSION['grandTotal']."'>";
				echo "</div>";

				echo "<div id='buttons'>";
				echo "<a href='bookings.php'><button class='button'>Book More tickets</button></a>";
				echo "<a href='customer-details.php'><button class='button'>Checkout</button></a>";
				echo "</div>";
				include("footer.php");
			}
			else
			{
				echo "<h2 id='empty'>Your cart is empty</h2>";
			}
		?>
		
		<script src="js/cart.js"></script>
    </div>
</body>
</html>
