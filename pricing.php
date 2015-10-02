<?php 
session_start(); 
?>

<!DOCTYPE html>
<html lang="en">

	<?php include("head.php"); ?>

	<body>
		
		
		<div class="content-container">
			<?php include("header.php"); ?>

			<div class="bigger"><p> Ticket Prices </p></div>
	
			<table id="seatPriceList">
					<tr>
						<th>Price List</th>
						<th>Mon - Tue(All day) <br> Mon - Fri(1pm only)</th>
						<th>Wed - Fri(not 1pm) <br> Sat - Sun(All Day)</th>
					</tr>
				
				<tr>
					<td class="align-left">Standard-Full</td>
					<td>$12</td>
					<td>$18</td>
				</tr>
				
				<tr>
					<td class="align-left">Standard-Conc</td>
					<td>$10</td>
					<td>$15</td>
				</tr>
				
				<tr>
					<td class="align-left">Standard-Child</td>
					<td>$8</td>
					<td>$12</td>
				</tr>
				<tr>
					<td class="align-left">FirstClass - Adult</td>
					<td>$25</td>
					<td>$30</td>
				</tr>
				
				<tr>
					<td class="align-left">FirstClass - Child</td>
					<td>$20</td>
					<td>$25</td>
				</tr>
				
				<tr>
					<td class="align-left">BeanBag*</td>
					<td>$20</td>
					<td>$30</td>
				</tr>
			</table>
				
				<p>
				<em>
				*Beanbag price allows up to 2 adults OR 1 adult + 
				1 child OR up to 3 children. One price fits all!
				</em>	
				</p>
				
				<div id="swirls">
					<img id="swirlTop" src="resources/wswirl.png" width="227px" height="78px" alt="swirl"/>
				</div>
				
				<div class="bigger"><p> Movie Sessions </p></div>
							
				<table id="weeklySchedule">
					
					<tr>
						<th>Mon - Tue</th>
						<th>Wed - Fri</th>
						<th>Sat - Sun</th>
					</tr>
					
					<tr>
						<td>1 pm - Childrens</td>
						<td>1 pm - Romantic Comedy</td>
						<td>12 pm - Childrens</td>
					</tr>
					
					<tr>
						<td>6 pm - Art / Foreign</td>
						<td>6 pm - Childrens</td>
						<td>3 pm - Art / Foreign</td>
					</tr>
					
					<tr>
						<td>9 pm - Romantic Comedy</td>
						<td>9 pm - Action</td>
						<td>6 pm - Romantic Comedy</td>
					</tr>
					
					<tr>
						<td></td>
						<td></td>
						<td>9 pm - Action</td>
					</tr>
					
				</table>

			<br>
			<br>
			<hr>
			<?php include("footer.php"); ?>

		</div>
	
	<script type="text/javascript" src="/js/pricing.js"></script>
	</body>
</html>
