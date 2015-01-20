<?php

	if(isset($_POST["submit"])) 
	{ 
	require_once("../../class/SystemAdministrator.php");
	$admin =new SystemAdministratorProfile;
	$admin->addNewProfile();
	}
?>

<html>
	<head>
		<title>Add Users</title>
		<script language="JavaScript">
		
		function checkNum(t){
			if(t.trim()==''){
				return 1;
			}
			for(var i=0; i<t.length; i++){
				var char1 = t.charAt(i);
				var cc = char1.charCodeAt(0);

				if(cc>47 && cc<58)
				{}
				else {
					return 1;
					}
				}
			return 0;     
			}
			
		
		function sizeStr(t,y){
			if(t.length!=y){
				return 1;
			}
			return 0;
		}
		
		function sizeP(t){
			s = t.length;
			if(s>=5 && s<=10){
				return 0;
			}
			return 1;
		}
		
		function validateForm(){
			if(checkNum(document.datasheet.username.value) || sizeStr(document.datasheet.username.value,9))
			{
				window.alert("Enter the user name or invalid username (NIC)");
				return false;
			}
			
			if((document.datasheet.password.value).trim() == ''  || sizeP(document.datasheet.password.value))
			{
				window.alert("Enter the Password or Only spaces are not valid");
				return false;
			}
			
			if((document.datasheet.checkPassword.value).trim() == '')
			{
			window.alert("Re-enter the password to confirm");
			return false;
			}
			
			if(document.datasheet.password.value!=document.datasheet.checkPassword.value)
			{
				window.alert("Passwords mismatch!");
				return false;
			}
			if(document.datasheet.usertype.value=='')
			{
			window.alert("Select the User Type");
			return false;
			}

			return true;
			}
	</script>
	</head>
	<body>
	<h1 style="text-align:center">Add User</h1>
	
		<form name="datasheet" method="POST" action="">
			
			<fieldset>
				<legend style="text-align:center"><b><font size="5px">Login Information</font></b></legend>
				<table width="80%" align="center">
				<tr><td>User Name</td><td>		: <input type="text" name="username" size="60"></td></tr>
				<tr><td>Password</td><td>		: <input type="password" name="password" size="60"></td></tr>
				<tr><td>Confirm Password</td><td>		: <input type="password" name="checkPassword" size="60"></td></tr>
				<tr><td>User Type</td><td>	: <select name="usertype">
																<option value="">---Select The User Type---</option>
																<option value="Lecturer">Lecturer</option>
																<option value="Student Counselor">Student Counselor</option>
																<option value="Employer">Employer</option>
																<option value="Recent Graduate">Recent Graduate</option></select></td></tr>
				</table>
			</fieldset>
			<br><br>
			<input type="submit" value="submit" name="submit" onclick="return validateForm();">
			<input type="reset" value="Reset">
		</form>
		<a href="../page.php">Return to Home Page</a>
	</body>
</html>