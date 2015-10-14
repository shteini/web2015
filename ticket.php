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
				}
			}

		?>
		<a href='index.php'><button class='button'>Home</button></a>
		<!-- If time provided go to www.neocotic.com/qr.js/ to use qr codes :-) -->
</body>
</html>

<?php 
	file_put_contents("saved/".$_SESSION['customer_details']['email'].".html", ob_get_contents());
	session_destroy();
 ?>

