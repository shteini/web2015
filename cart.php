<?php
	session_start();

	echo "<pre>";
	var_dump($_POST);
	echo "</pre>";

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
		if(($day == 'Monday' ||'Tuesday') || $time == '1 PM')
		{
			return $offPeakPriceList[$key];
		}
		else
		{
			return $peakPriceList[$key];
		}
	}

	foreach($_POST['ticket'] as $key => $value)
	{
		if($value > 0)
		{
			$tickets = array(
				'ticket-type' => $ticketNames[$key],
				'price' => getPrice($_POST['day'], $_POST['time'], $key),
				'qty' => $value,
				'total' => 0.00
			);
		}
	}

	$_SESSION['cart']['screening'][] = array(

		'movie-name' => $_POST['movie-name'],
		'day' => $_POST['day'],
		'time' => $_POST['time'],
		'tickets' => $tickets

	);

	echo "<pre>";
	var_dump($_SESSION);
	echo "</pre>";
	
?>

<!doctype html>
<html lang="en">
<?php include("head.php");?>
<body>
	<div class="content-container">
    	<?php include("header.php");?>

		<div id="">
			
		</div>

    	
    	<?php include("footer.php");?>
    </div>
</body>
</html>