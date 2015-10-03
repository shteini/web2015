<?php
	session_start();

	// echo "<pre>";
	// var_dump($_POST);
	// echo "</pre>";
	// UNCOMMENT TO DEBUG POST

	$ticketNames = array(

		'SA' => 'Adult',
		'SP' => 'Concession',
		'SC' => 'Child',
		'FA' => 'First Class - Adult',
		'FC' => 'First Class - Child',
		'B1' => 'First Class - Adult & Child Beanbag',
		'B2' => 'First Class - 2 Adults Beanbag',
		'B3' => 'First Class - 3 Children Beanbag'
	);

	function getPrice($day, $time, $key)
	{
		$offPeakPriceList = array(

		'SA' => 12.00,
		'SP' => 10.00,
		'SC' => 8.00,
		'FA' => 25.00,
		'FC' => 20.00,
		'B1' => 20.00,
		'B2' => 20.00,
		'B3' => 20.00
		);

		$peakPriceList = array(

		'SA' => 18.00,
		'SP' => 15.00,
		'SC' => 12.00,
		'FA' => 30.00,
		'FC' => 25.00,
		'B1' => 30.00,
		'B2' => 30.00,
		'B3' => 30.00
		);

		if(($day == 'Monday'||$day == 'Tuesday') || $time == '1 PM')
		{	
			return $offPeakPriceList[$key];
		}
		else
		{
			return $peakPriceList[$key];
		}
	}

	function getTotal($price, $quantity)
	{
		return $price * $quantity;
	}

	if(isset($_POST['ticket']) && isset($_POST['day']) && isset($_POST['time']) && isset($_POST['movie_name']))
	{
		foreach($_POST['ticket'] as $key => $value)
		{
			$day = $_POST['day'];
			$time = $_POST['time'];
			if($value > 0)
			{
				$tickets[] = array(
					'ticket_type' => $ticketNames[$key],
					'price' => getPrice($day, $time, $key),
					'qty' => $value,
					'total' => getTotal(getPrice($day, $time, $key),$value)
				);
			}
		}
	
		$_SESSION['cart']['screening'][] = array(

			'movie_name' => $_POST['movie_name'],
			'day' => $_POST['day'],
			'time' => $_POST['time'],
			'tickets' => $tickets

		);
	}	

	// echo "<pre>";
	// var_dump($_SESSION);
	// echo "</pre>";
	// UNCOMMENT TO DEBUG SESSION
	
?>

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
						echo "<td class='ticket-data'>".$ticket['price']."</td>";
						echo "<td class='ticket-data'><input class='qty' type='number' min='0' value='".$ticket['qty']."'></td>";
						echo "<td class='ticket-data'>".$ticket['total']."</td>";
						echo "</tr>";
					}
					echo "</table>";
					echo "</div>";
				}

			}
		?>
		<a href="bookings.php"><button id="booking-return">Book More tickets</button></a>
		
    	
    	<?php include("footer.php");?>
    </div>
</body>
</html>