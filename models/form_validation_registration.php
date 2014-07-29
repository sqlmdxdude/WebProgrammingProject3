<?php include('datacon.php')?>
<?php
	session_start();
		if(isset($_POST['firstname']) && 
		   isset($_POST['lastname']) && 
		   isset($_POST['dateofbirth']) && 
		   isset($_POST['createdate']) && 
		   isset($_POST['email']) && 
		   !empty($_POST['firstname']) && 
		   !empty($_POST['lastname']) && 
		   !empty($_POST['dateofbirth']) && 
		   !empty($_POST['createdate']) && 
		   !empty($_POST['email']))
		{
			//if($_POST['password'] == $_POST['confirmpassword'])
			//	{
					//$username = mysqli_real_escape_string($conn,$_POST['firstname']);
					$firstname = mysqli_real_escape_string($conn,$_POST['firstname']);
					$lastname = mysqli_real_escape_string($conn,$_POST['lastname']);
					$DOB = mysqli_real_escape_string($conn,$_POST['dateofbirth']);
					$createdate = mysqli_real_escape_string($conn,$_POST['createdate']);
					$email = mysqli_real_escape_string($conn,$_POST['email']);
				//	$password = mysqli_real_escape_string($conn,$_POST['password']);
					$query =("INSERT INTO profiles 
					(firstname,lastname, dateofbirth, createdate, email)
			 VALUES ('{$firstname}','{$lastname}','{$DOB}','{$createdate}','{$email}'");
					$result_profile = mysqli_query($conn,$query);
				//	$profileid = mysqli_query($conn,"SELECT profileid FROM profiles Where firstname = '$firstname' AND lastname = '$lastname'");
				//	$result_profileid = mysqli_fetch_assoc($profileid);
				//	$result_user = mysqli_query($conn,"INSERT INTO users(username, password, profileid) 
				//											VALUES ('$username','MD5('$password') ','{$result_profileid['profileid']}'");
				//	$_SESSION['name'] = $username;
					// This is where we might save page state maybe rediert.
					header("Location: http://localhost/WebProgrammingProject3/index.php");
					exit;
			//	}else{
			//			$mismatchpass = "Password do not match";
			//	header("Location: http://localhost/home/Register.php");
			//	exit;			
			//	}
			
		}else{
				header("Location: http://localhost/WebProgrammingProject3/models/form_validation_registration.php");
				exit;			
		}
			//    
		//   isset($_POST['password']) && 
		 //  !empty($_POST['password']) &&
		 //  !empty($_POST['confirmpassword']
		 //isset($_POST['confirmpassword']) && 
?>
   	
<?php
	//step 5
	mysqli_close($conn);
?>