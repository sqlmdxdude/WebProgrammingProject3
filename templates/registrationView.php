<?php 
	$passwordcontent = '
	<form action=" http://localhost/WebProgrammingProject3/models/validation_password.php" method="POST">
	<table style="color:white;margin-left:20px;"">
		<tr>
			<td>
				<label>American Loves Mega Lo Mart</label>
			</td>
		</tr>
		<tr>
			<td>
				<label>First Name:</label>
			</td>
			<td>
				<input name="firstname" type="text" size="19">
			</td>
		</tr>
		<tr>
			<td>
				<label>Last Name:</label>
			</td>
			<td>
				<input name="lastname" type="text" size="19">
			</td>
		</tr>
		<tr>
			<td>
				<label>Date of Birth:</label>
			</td>
			<td>
				<input name="dateofbirth" type="text" size="19">
			</td>
		</tr>
		<tr>
			<td>
				<label>email:</label>
			</td>
			<td>
				<input name="email" type="text" size="19">
			</td>
		</tr> 
		<tr>
			<td><label>Enter Your Password:<label></td>
			<td><input name="password" type="password" size="19" /></td>
		</tr>
		
		<tr>
			<td><label>Confirm Your Password:<label></td>
			<td><input name="confirmpassword" type="password" size="19" /></td>
		</tr>
		
		<tr>
			<td>
				<!--Left Blank on purpose-->
			</td>
			<td>
				<input type="submit" name="submit" value="Register">
				<input type="reset">
			</td>
		</tr>
	</table>
</form>
	';
?>