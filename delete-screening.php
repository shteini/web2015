<?php 
	session_start();
	if(isset($_GET['idremove']))
	{	
		$id = intval($_GET['idremove']);
		$_SESSION['postedData'] = $id;
		$grandTotalMinus = 0;

		foreach($_SESSION['cart']['screening'][$id]['tickets'] as $ticket)
		{
			$grandTotalMinus += $ticket['total'];
		}

		unset($_SESSION['cart']['screening'][$id]);
		$_SESSION['cart']['screening'] = array_values($_SESSION['cart']['screening']);
		$_SESSION['grandTotal'] -= $grandTotalMinus;
	}

	$page = 'cart.php';
	header('Location: '.$page);
	exit;
	
 ?>