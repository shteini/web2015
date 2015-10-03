<header>
		<!-- comment -->
	<div id="logo-container">
		<a href="index.php"><img id="logo" src="resources/white-crown.png" alt="Silverado Cinemas logo"></a>
		<a href="index.php"><h1 class="logoName">Silverado Cinemas</h1></a>
	</div>
	<nav>
		<ul>
			<li><a href="movies.php">Movies</a></li>
			<li><a href="bookings.php#form-columns">Bookings</a></li>
			<li><a href="pricing.php">Pricing</a></li>
			<li><a href="contact-us.php">Contact Us</a></li>
			<?php 
				if(isset($_SESSION['cart']))
				{
					echo "<li><a href='cart.php'>My Cart</a></li>";
				}
			?>
		</ul>	
	</nav>
	<hr>
	<script src="//code.jquery.com/jquery-1.11.3.min.js"></script>
	<script src="js/slick.min.js"></script>
	<script src="js/main.js"></script>
</header>