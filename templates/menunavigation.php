<?php
    $menunavi='
<div id="menunavi">
	<ul class="menunavi">
		<li><a href="http://localhost/WebProgrammingProject3/index.php">Home</a></li>
		<li><a href="#">Browse</a></li>
		<li>
			<form id="sitesearch" name="sitesearch" action="productsearch.php" method="post">
				<input type="text" name="keywords" id="keywords" placeholder="Enter some keywords" />
				<input type="submit" value="Search" />
			</form>
		</li>
		<li><a href="http://localhost/WebProgrammingProject3/contactController.php">Contact Us</a></li>
		<li><a href="checkout.php">Check Out</a></li>
	</ul>
</div>';
?>