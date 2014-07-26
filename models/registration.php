<?php 
    $title = "Welcome to Mega Lo Mart";  
	 include_once "../templates/banner.php";
    include_once "../templates/menunavigation.php";
?>
<!DOCTYPE html> 
<html lang = "en">
	<head >
		<title><?php echo $title ?></title>
		<meta charset="UTF-8">
		<script type="text/javascript"></script>
		<link rel="stylesheet" text="text/css" href="../css/sitetemplate.css">
	</head>
	<body>
	<div id="banner"><?php echo $banner; ?></div>
		<div>
			<form action="someplace.php" method="POST">
				<div>
					<table>
						<tr>
							<td><label>Enter Your Name:<label></td>
							<td><input name="name" type="text" size="19" /></td>
						</tr>
						<tr>
							<td><!-- Left blank on purpose--></td>
							<td><input type="submit" value="Submit" /><input type="reset" /></td>
						</tr>
					</table>
				</div>
			</form>
		</div>	
	</body>
</html>