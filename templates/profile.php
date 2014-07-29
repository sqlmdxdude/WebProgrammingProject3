<!-- http://localhost/WebProgrammingProject3/templates/profile.php -->
<?php

	$title = "Profile";
	include_once "banner.php"; 
	include_once "footer.php";
	include_once "menunavigation.php"; 
	include_once "../templates/sitetemplate.php";	
?>
<!DOCTYPE html> 
<html lang = "en">

	<head >
		<title><?php echo $title ?></title>
		<meta charset="UTF-8">
		
	</head>
	<body>
	
	
		<div id="content">
			<?php $content; ?>
	
		</div>	
		
	</body>
</html>






