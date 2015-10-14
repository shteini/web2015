<?php 
	session_start();
	if(isset($_POST['idToRemove']))
	{	
		$id = json_decode($_POST['idToRemove']);
		$_SESSION['idRemove'] = $id;

		$grandTotalMinus = 0;
		foreach($_SESSION['cart']['screening'][$id]['ticket'] as $ticket)
		{
			$grandTotalMinus += $ticket['total'];
		}

		unset($_SESSION['cart']['screening'][$id]);
		$_SESSION['cart']['screening'] = array_values($_SESSION['cart']['screening']);
		$_SESSION['grandTotal'] -= $grandTotalMinus;
	}
	
 ?>