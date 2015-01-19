<?php

	
	require_once("../Database/database.php");

	$name=$_COOKIE["userName"];
	$result=mysqli_query($connect,"SELECT password FROM profile WHERE username='$name'") or die(mysqli_error($connect));
		
	$r = mysqli_fetch_row($result);
	
?>

<html>
	<head>
		<title>Change Password</title>
		<script language="JavaScript">
		function validateForm2(){
			if(document.changepasswordform.currentpassword.value=='')
			{
			window.alert("Enter the Current Password");
			return false;
			}
			
			if(document.changepasswordform.newpassword.value=='')
			{
			window.alert("Enter the New Password");
			return false;
			}
			
			if(document.changepasswordform.checkPassword.value=='')
			{
			window.alert("Re-enter the password to confirm");
			return false;
			}
			
			if(document.changepasswordform.newpassword.value!=document.changepasswordform.checkPassword.value)
			{
			window.alert("Passwords mismatch!");
			return false;
			}

			

			return true;
			}
	</script>
	</head>
	<body>
	<h1 style="text-align:center">Change Password</h1>
	
		<form name="changepasswordform" method="POST" action="changepassword.php">
			
			<fieldset>
				<legend style="text-align:center"><b><font size="5px">Password Information</font></b></legend>
				<table width="80%" align="center">
				<tr><td>Current Password</td><td>		: <input type="password" name="currentpassword" size="60"></td></tr>
				<tr><td>New Password</td><td>		: <input type="password" name="newpassword" size="60"></td></tr>
				<tr><td>Confirm Password</td><td>		: <input type="password" name="checkPassword" size="60"></td></tr>
				
				</table>
			</fieldset>
			<br><br>
			<input type="submit" value="submit" name="submit" onclick="return validateForm2();">
			<input type="reset" value="cancel" name="cancel">
			<hr>
			<hr>
			<a href="page.php"> Home </a>
		</form>
	</body>
</html>