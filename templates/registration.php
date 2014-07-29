
<?php
	$title ="Registration Page";
    include_once "../templates/banner.php"; 
	include_once "../templates/menunavigation.php"; 
	include_once "../templates/footer.php";
	include_once "../templates/sitetemplate.php";
	
?>


<!-- http://localhost/WebProgrammingProject3/templates/registration.php* -->
<div id="content_area">
	<form action=" Http://localhost/LoginSystem/loginTest.php" method="POST">
			<div>
				<table>
					<tr>
						<td><label>Enter Your Name:<label></td>
						<td><input name="username" type="text" size="19" /></td>
					</tr>
					<tr>
						<td><label>Enter Your Password:<label></td>
						<td><input name="password" type="password" size="19" /></td>
					</tr>
					<tr>
						<td><!-- Left blank on purpose--></td>
					 <td><input type="submit" value="Login" /><input type="reset" /></td>
					</tr>
				</table>
			</div>
		</form>
	
</div>	