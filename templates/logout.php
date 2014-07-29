<?php
	if(isset($_SESSION['name'])){
		unset($_SESSION['name']);
		session_destroy();
		header("Location: http://localhost/home/Main.php");
		exit;
	}
?>