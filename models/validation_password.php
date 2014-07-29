<?php
$con=mysqli_connect("localhost","root","Summer","Test");

// Check connection
if (mysqli_connect_errno()) {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }
?>
<?php
	session_start();
		if(!empty($_POST['firstname']) && !empty($_POST['lastname']) && !empty($_POST['dateofbirth']) &&
		   !empty($_POST['password']) && !empty($_POST['confirmpassword'])  && !empty($_POST['email'])){
		   
			//Check for mismatch Password
			if($_POST['password'] == $_POST['confirmpassword']){
			
				$firstname = mysqli_real_escape_string($con,$_POST['firstname']);
			    $lastname = mysqli_real_escape_string($con,$_POST['lastname']);
				$dateofbirth = mysqli_real_escape_string($con,$_POST['dateofbirth']);
			    $email = mysqli_real_escape_string($con,$_POST['email']);
			    $password = mysqli_real_escape_string($con,$_POST['password']);
				$_SESSION['username'] = $_POST['firstname'];
				
				mysqli_query($con,"INSERT INTO profiles(firstname,lastname,dateofbirth,email) 
				VALUES ('$firstname','$lastname','$dateofbirth','$email')");
				
				//GET PROFILE ID
				$profileid = mysqli_query($con,"SELECT profileid FROM profiles
                 WHERE firstname ='$firstname' and lastname = '$lastname' and email = '$email'");
				 
				while($proId = mysqli_fetch_assoc($profileid)) {
				 $proId['profileid'];
				}
				
                $id =  $proId['profileid'];
                   
				 
				 mysqli_query($con,"INSERT INTO users(username,password, profileid) 
				          VALUES ('$firstname',MD5('$password'),'$id')");
				
				//GET USERS ID
				$USERid = mysqli_query($con,"SELECT userid FROM users
                 WHERE username = '$firstname' and password = MD5(''$password')");
               
				while($userId = mysqli_fetch_assoc($USERid)) {
				 $userId['userid'];
				}

                $uId =  $userId['userid'];
			     
				$_SESSION['profileid'] = $id;
				$_SESSION['userid'] = $uId;
				/* Perform database INSERT INTO users username and password
				 Perform database INSERT INTO users firstname, lastname, profileid, email date of birth, 
				 and auto created  current date*/			
			}else{
				header("Location: http://localhost/WebProgrammingProject3/registrationController.php");
				die("THIS WAS BLANK");
				exit;	
			}		
		
		}else{
				header("Location: http://localhost/WebProgrammingProject3/registrationController.php");
				die("THIS WAS BLANK");
				exit;			
		}
?>
<?php
	//step 5
	mysqli_close($con);
?>