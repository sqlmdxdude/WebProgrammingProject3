
<?php
	$title ="Profile Page";
    include_once "../templates/banner.php"; 
	include_once "../templates/footer.php";
	include_once "../templates/menunavigation.php"; 
	include_once "../templates/footer.php";
?>
<!DOCTYPE html> 
<html lang = "en">
<!-- http://localhost/WebProgrammingProject3/templates/profile.php* -->
	<head >
		<title><?php echo $title ?></title>
		<meta charset="UTF-8">
		<script type="text/javascript"></script>
		<link rel="stylesheet" text="text/css" href="../css/sitetemplate.css">
	</head>
	<body>
	<div id="banner"><?php echo $banner; ?></div> 
	 <?php echo $menunavi; ?>
		<div id="content">
	
		</div>	
		<?php echo $footer; ?>
	</body>
</html>