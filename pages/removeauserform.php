<?php

	
	require_once("../Database/database.php");

	

?>

<html>
	<head>
		<title>Remove a User</title>
		<script language="JavaScript">
		function validateForm2(){
			if(document.removeauserform.username1.value=="admin"){
				window.alert("Cannot Delete that User");
				return false;
			}
			if((document.removeauserform.username1.value).trim()=='')
			{
				window.alert("Enter the username");
				return false;
			}
			
			
			
			if((document.removeauserform.checkusername1.value).trim()=='')
			{
				window.alert("Re-enter the username to confirm");
				return false;
			}
			
			if(document.removeauserform.checkusername1.value!=document.removeauserform.username1.value)
			{
				window.alert("Usernames mismatch!");
				return false;
			}

			

			return true;
			}
	</script>
	</head>
	<body>
	<h1 style="text-align:center">Remove A User</h1>
	
		<form name="removeauserform" method="POST" action="removeauser.php">
			
			<fieldset>
				<legend style="text-align:center"><b><font size="5px">User Information</font></b></legend>
				<table width="80%" align="center">
				<tr><td>Username(national id number)</td><td>		: <input type="text" name="username1" size="60"></td></tr>
				
				<tr><td>Confirm Username(national id number)</td><td>		: <input type="text" name="checkusername1" size="60"></td></tr>
				
				</table>
			</fieldset>
			<br><br>
			<input type="submit" value="submit" name="submit" onclick="return validateForm2();">
			<input type="reset" value="cancel" name="cancel">
			<hr>
			<hr>
			<a href="Administrator.php"> Home </a>
		</form>
	</body>
</html>