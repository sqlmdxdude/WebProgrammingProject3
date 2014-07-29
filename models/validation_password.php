<?php include_once "datahelpers.php";?>
<?php
	session_start();
		if(!empty($_POST['firstname']) && !empty($_POST['lastname']) &&
		   !empty($_POST['password']) && !empty($_POST['confirmpassword'])){
			
			//Check for mismatch Password
			if($_POST['password'] == $_POST['confirmpassword']){
				/* Perform database INSERT INTO users username and password
				 Perform database INSERT INTO users firstname, lastname, profileid, email date of birth, 
				 and auto created  current date*/			
			}
		}else{
				header("Location: http://localhost/WebProgrammingProject3/passwordcreationController.php");
				die("THIS WAS BLANK");
				exit;			
		}
?>
<?php
	//step 5
	mysqli_close($con);
?>