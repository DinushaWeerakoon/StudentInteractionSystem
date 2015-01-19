<?php

	if(isset($_POST["submit"])) 
	{ 
	require_once("../../class/Undergraduate.php");
	$new_user= new Undergraduate;
	$new_user->completeDataSheet();
	}
?>

<html>
	<head>
		<title>Add Undergraduate</title>
		<script language="JavaScript">
		function validateForm(){
			
			if(document.datasheet.firstName.value=='')
			{
			window.alert("Enter the first name");
			return false;
			}
			
			if(document.datasheet.surname.value=='')
			{
			window.alert("Enter the surname or last name");
			return false;
			}
			
			if(document.datasheet.regNo.value=='')
			{
			window.alert("Enter the Registration Number");
			return false;
			}
			
			if(document.datasheet.nic.value=='')
			{
			window.alert("Enter the National ID number");
			return false;
			}
			
			if(document.datasheet.school.value=='')
			{
			window.alert("Enter the school");
			return false;
			}
			
			if(document.datasheet.tpMobile.value=='')
			{
			window.alert("Enter the mobile number");
			return false;
			}
			
			if(document.datasheet.permanentAddress.value=='')
			{
			window.alert("Enter the permenent address");
			return false;
			}
			
			if(document.datasheet.email.value=='')
			{
			window.alert("Enter the email address");
			return false;
			}
			
			if(document.datasheet.dob.value=='')
			{
			window.alert("Enter the Date of Birth");
			return false;
			}
			
			if(document.datasheet.sex.value=='')
			{
			window.alert("choose the gender");
			return false;
			}
			
			if(document.datasheet.degree.value=='')
			{
			window.alert("choose the degree");
			return false;
			}
			
			if(document.datasheet.academicYear.value=='')
			{
			window.alert("choose the academic year");
			return false;
			}
			
			if(document.datasheet.ALstream.value=='')
			{
			window.alert("choose the Advanced level stream");
			return false;
			}
			
			if(document.datasheet.fatherName.value=='')
			{
			window.alert("Enter the father name");
			return false;
			}
			
			if(document.datasheet.fatherOccupation.value=='')
			{
			window.alert("Enter the father's occupation");
			return false;
			}
			
			if(document.datasheet.motherName.value=='')
			{
			window.alert("Enter the mother name");
			return false;
			}
			
			if(document.datasheet.motherOccupation.value=='')
			{
			window.alert("Enter the mother's occupation");
			return false;
			}
			
			if(document.datasheet.guardianName.value=='')
			{
			window.alert("Enter the guardian name");
			return false;
			}
			
			if(document.datasheet.guardianOccupation.value=='')
			{
			window.alert("Enter the guardian's occupation");
			return false;
			}
			
			if(document.datasheet.userName.value=='')
			{
			window.alert("Enter the Username");
			return false;
			}
			
			if(document.datasheet.nic.value!=document.datasheet.userName.value)
			{
			window.alert("username should be matched with the NIC Number");
			return false;
			}
			
			if(document.datasheet.password.value=='')
			{
			window.alert("Enter the Password");
			return false;
			}
			
			if(document.datasheet.checkPassword.value=='')
			{
			window.alert("Re-enter the password to confirm");
			return false;
			}
			
			if(document.datasheet.password.value!=document.datasheet.checkPassword.value)
			{
			window.alert("Passwords mismatch!");
			return false;
			}
			
			
			/*if(document.datasheet.totalIncome.value=='')
			{
			window.alert("Enter the total income");
			return false;
			}*/
			return true;
			}
			
			
	</script>
	</head>
	<body>
	<style>
		.error {color: #FF0000;}
	</style>
	<h1 style="text-align:center">STUDENT DETAILS</h1>
	<p><span class="error">* required field.</span></p>
		<form name="datasheet" method="POST" action="">
		
			<fieldset>
				<legend style="text-align:center"><b><font size="5px">Personal Information:</font></b></legend>
				<table width="80%" align="center">
				
				<tr><td>First Name</td><td>	:	<input type="text" name="firstName" size="60" ><span class="error">* </span></td></tr>
				<tr><td>Middle Name</td><td>	:	<input type="text" name="middleName" size="60" ></td></tr>
				<tr><td>Surname</td><td>		: <input type="text" name="surname" size="60" ><span class="error">* </span></td></tr>
				<tr><td>Registration Number</td><td>		: <input type="text" name="regNo" size="60" ><span class="error">* </span></td></tr>
				<tr><td>NIC number</td><td>		: <input type="text" name="nic" size="60" ><span class="error">* </span></td></tr>
				<tr><td>School Attended (Advanced level)</td><td>		: <input type="text" name="school" size="60" ><span class="error">* </span></td></tr>
				<tr><td>Telephone Home</td><td>		: <input type="text" name="tpHome" size="60" ></td></tr>
				<tr><td>Telephone Mobile</td><td>		: <input type="text" name="tpMobile" size="60" ><span class="error">* </span></td></tr>
				<tr><td>Permanent Address</td><td>		: <input type="text" name="permanentAddress" size="60"><span class="error">* </span></td></tr>
				<tr><td>Temporary Address</td><td>		: <input type="text" name="temporaryAddress" size="60" ></td></tr>
				<tr><td>E-mail</td><td>		: <input type="email" name="email" size="60" ><span class="error">* </span></td></tr>
				<tr><td>Date of birth</td><td>		: <input type="date"  name="dob" ><span class="error">* </span></td></tr><br>
				<tr><td>Select your Gender</td><td>		: <input type="radio" name="sex" value="male" >Male <input type="radio" name="sex" value="female" >Female<span class="error">* </span></td></tr><br>
				
				</table>
			</fieldset>
			
			<br><br>
			
			<fieldset>
				<legend style="text-align:center"><b><font size="5px">Academic Information</font></b></legend>
				<table width="80%" align="center">
				<tr><td>Degree</td><td>		: <select name="degree">
														<option value="">---Select The Course---</option>
														<option value="CS">Computer Science</option>
														<option value="IS">Information System</option>
														<option value="ICT">Information and Communication Technology</option></select><span class="error">* </span></td></tr>
					
				<tr><td>Academic Year</td><td>		: <select name="academicYear">
																<option value="">---Select The Year---</option>
																<option value="first">1 <sup>st</sup> year</option>
																<option value="second">2 <sup>nd</sup> year</option>
																<option value="third">3 <sup>rd</sup> year</option>
																<option value="fourth">4 <sup>th</sup> year</option></select><span class="error">* </span></td></tr>
				<tr><td>Advanced Level Stream</td><td>		: <select name="ALstream">
																<option value="">---Select The Stream---</option>
																<option value="physicalScience">Physical Science</option>
																<option value="bioScience">Biological Science</option>
																<option value="commerce">Commerce</option>
																<option value="arts">Arts</option></select><span class="error">* </span></td></tr>
				
				</table>
			</fieldset>
			<br><br>
			
			
			<fieldset>
				<legend style="text-align:center"><b><font size="5px">Family Information</font></b></legend>
				<table width="80%" align="center">
				<tr><td>Father's Name</td><td>		: <input type="text" name="fatherName" size="60"><span class="error">* </span></td></tr>
				<tr><td>Father's Occupation</td><td>		: <input type="text" name="fatherOccupation" size="60"><span class="error">* </span></td></tr>
				<tr><td>Father's Contact Number</td><td>		: <input type="text" name="fatherContact" size="60"></td></tr>
				<tr><td>Mother's Name</td><td>		: <input type="text" name="motherName" size="60"><span class="error">* </span></td></tr>
				<tr><td>Mother's Occupation</td><td>		: <input type="text" name="motherOccupation" size="60"><span class="error">* </span></td></tr>
				<tr><td>Mother's Contact Number</td><td>		: <input type="text" name="motherContact" size="60"></td></tr>
				<tr><td>Guardian's Name</td><td>		: <input type="text" name="guardianName" size="60"><span class="error">* </span></td></tr>
				<tr><td>Guardian's Occupation</td><td>		: <input type="text" name="guardianOccupation" size="60"><span class="error">* </span></td></tr>
				<tr><td>Guardian's Contact Number</td><td>		: <input type="text" name="guardianContact" size="60"></td></tr>
				<tr><td>Total Family Income</td><td>		: <input type="text" name="totalIncome" size="60"></td></tr>
				</table>
			</fieldset>
			<br><br>
			
			<fieldset>
				<legend style="text-align:center"><b><font size="5px">Login Information</font></b></legend>
				<table width="80%" align="center">
				<tr><td>User Name</td><td>		: <input type="text" name="userName" size="60"><span class="error">* </span></td></tr>
				<tr><td>Password</td><td>		: <input type="password" name="password" size="60"><span class="error">* </span></td></tr>
				<tr><td>Confirm Password</td><td>		: <input type="password" name="checkPassword" size="60"><span class="error">* </span></td></tr>
				</table>
			</fieldset>
			<br><br>
			
			<fieldset>
				<legend style="text-align:center"><b><font size="5px">Sports</font></b></legend>
				<table width="80%" align="center">
					<tr>
						<td align="left"><input type="checkbox" name="sport[]" value="Foot Ball">Football</td>
						<td align="left"><input type="checkbox" name="sport[]" value="Cricket">Cricket</td>
						<td align="left"><input type="checkbox" name="sport[]" value="Tennis">Tennis</td>
						<td align="left"><input type="checkbox" name="sport[]" value="Table Tennis">Table Tennis</td>
					</tr>
					<tr>
						<td align="left"><input type="checkbox" name="sport[]" value="Swimming">Swimming</td>
						<td align="left"><input type="checkbox" name="sport[]" value="Hockey">Hockey</td>
						<td align="left"><input type="checkbox" name="sport[]" value="Basketball">Basketball</td>
						<td align="left"><input type="checkbox" name="sport[]" value="Netball">Netball</td>
					</tr>
					<tr>
						<td align="left"><input type="checkbox" name="sport[]l" value="Baseball">Baseball</td>
						<td align="left"><input type="checkbox" name="sport[]" value="Elle">Elle</td>
						<td align="left"><input type="checkbox" name="sport[]" value="Carom">Carom</td>
						<td align="left"><input type="checkbox" name="sport[]" value="Badminton">Badminton</td>
					</tr>
					<tr>
						<td align="left"><input type="checkbox" name="sport[]" value="Athletic">Athletic</td>
						<td align="left"><input type="checkbox" name="sport[]" value="Taekwondo">Taekwondo</td>
						<td align="left"><input type="checkbox" name="sport[]" value="Karate">Karate</td>
						<td align="left"><input type="checkbox" name="sport[]" value="Boxing">Boxing</td>
					</tr>
					<tr>
						<td align="left"><input type="checkbox" name="sport[]" value="Voleyball">Voleyball</td>
						<td align="left"><input type="checkbox" name="sport[]" value="Chess">Chess</td>
						<td align="left"><input type="checkbox" name="sport[]" value="Rowing">Rowing</td>
					</tr>
				</table>
			</fieldset>
			<br><br>
			
			<fieldset>
				<legend style="text-align:center"><b><font size="5px">Extra Curricular Activities and Societies</font></b></legend>
				<table width="80%" align="center">
					<tr>
						<td align="left"><input type="checkbox" name="society[]" value="AIESEC">AIESEC</td>
						<td align="left"><input type="checkbox" name="society[]" value="CompSoc">CompSoc</td>
					</tr>
					<tr>
						<td align="left"><input type="checkbox" name="society[]" value="Buddhist Students Society">Buddhist Student's Society</td>
						<td align="left"><input type="checkbox" name="society[]" value="Muslim Majlis">Muslim Majlis</td>
					</tr>
					<tr>
						<td align="left"><input type="checkbox" name="society[]" value="Catholic Students Movement">Catholic Student's Movement</td>
						<td align="left"><input type="checkbox" name="society[]" value="Christian Students Society">Christian Student's Society</td>
					</tr>
					<tr>
						<td align="left"><input type="checkbox" name="society[]" value="Hindu Society">Hindu Society</td>
						<td align="left"><input type="checkbox" name="society[]" value="Tamil Students Society">Tamil Student's Society</td>
					</tr>
					<tr>
						<td align="left"><input type="checkbox" name="society[]" value="Gavel Club">Gavel Club</td>
					</tr>
				</table>
			</fieldset>
			<br><br>
			
			<input type="submit" value="submit" name="submit" onclick="return validateForm();">
		</form>
	</body>
</html>