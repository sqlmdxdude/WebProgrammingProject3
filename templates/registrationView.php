<?php 
	$registrationcontent = '
	<form action=" http://localhost/WebProgrammingProject3/models/form_validation_registration.php" method="POST">
	<table style="color:white;margin-left:20px;"">
		<tr>
			<td>
				<label>Birth Date:</label>
			</td>
			<td>
				<input name="dateofbirth" type="text" size="19">
			</td>
		</tr>
		<tr>
			<td>
				<label>Email:</label>
			</td>
			
			<td>
				<input name="email" type="text" size="19">
			</td>
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