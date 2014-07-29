<?php
	if(isset($_SESSION['name'])){
	$_SESSION['name'];
	$loginview='<div id="loginstatus">Logged in as '.$_SESSION['name'].'</div>';
	}else{
	$_SESSION['name'] = "";
	$loginview='<div id="loginstatus"><a href="http://localhost/WebProgrammingProject3/templates/loginview.php">Login</a>/<a href="http://localhost/WebProgrammingProject3/templates/registration.php">Register</a></div>';
	}
		
    
?>