<?php 

	session_start();  
	if(isset($_POST['data']))
	{

		$data = json_decode($_POST['data']);

		$_SESSION['postedData'] = $data;

		for($i = 0; $i < count($_SESSION['cart']['screening']); $i++)
		{

			$_SESSION['testTicketBefore'] = "Not inside yet";
			for($j = 0; $j < count($_SESSION['cart']['screening'][$i]['tickets']); $j++)
			{
				

				$_SESSION['testTicketBefore'] = $_SESSION['cart']['screening'][$i]['tickets'][$j];
				

				$_SESSION['cart']['screening'][$i]['tickets'][$j]['qty'] = $data[$i][$j];
				$_SESSION['cart']['screening'][$i]['tickets'][$j]['total'] = ($_SESSION['cart']['screening'][$i]['tickets'][$j]['price'] * $_SESSION['cart']['screening'][$i]['tickets'][$j]['qty']);
				$grandTotal += $_SESSION['cart']['screening'][$i]['tickets'][$j]['total'];


				$_SESSION['testTicketAfter'] = $_SESSION['cart']['screening'][$i]['tickets'][$j];
			}		
		}
	}
?>

