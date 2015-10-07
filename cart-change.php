<?php session_start(); ?>

<?php  
	
	foreach ($_SESSION['cart']['screening'] as $screening) 
	{
		
	}

	$page = 'cart.php';
	header('Location: '.$page);
	exit;
?>

