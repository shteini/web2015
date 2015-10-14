<?php 

	session_start();  
	if(isset($_POST['data']))
	{

		$data = json_decode($_POST['data']);

		//$_SESSION['postedData'] = $data;
		
		for($i = 0; $i < count($_SESSION['cart']['screening']); $i++)
		{

			$_SESSION['testTicketBefore'] = "Not inside yet";
			$_SESSION['cart']['screening'][$i]['screening_total'] = 0;
			for($j = 0; $j < count($_SESSION['cart']['screening'][$i]['tickets']); $j++)
			{
				//$_SESSION['ticketTotalBefore'] = $_SESSION['cart']['screening'][$i]['tickets'][$j]['total'];
				
				$_SESSION['cart']['screening'][$i]['tickets'][$j]['qty'] = $data[$i][$j];
				$_SESSION['cart']['screening'][$i]['tickets'][$j]['total'] = ($_SESSION['cart']['screening'][$i]['tickets'][$j]['price'] * $_SESSION['cart']['screening'][$i]['tickets'][$j]['qty']);

				$_SESSION['cart']['screening'][$i]['screening_total']+= $_SESSION['cart']['screening'][$i]['tickets'][$j]['total'];
				//$_SESSION['ticketTotalAfter'] = $_SESSION['cart']['screening'][$i]['tickets'][$j]['total'];
			}



		}
		
		$grandTotal = 0;
		for($i = 0; $i < count($_SESSION['cart']['screening']); $i++)
		{
			
			foreach($_SESSION['cart']['screening'][$i]['tickets'] as $ticket)
			{
				$grandTotal+=$ticket['total'];
			}
		}

		$_SESSION['grandTotal'] = $grandTotal;
	}
?>

