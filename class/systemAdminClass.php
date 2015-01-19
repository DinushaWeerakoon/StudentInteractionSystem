<?php
	include_once("profileClass.php");
	//echo "<h1>System Admin Class</h1>";
	class SystemAdmin extends Profile{
		
		function addNewProfile(){}
		
		function grandPermission(){}
		
		function editProfile(){}
		
		function editUnderGraduateProfile(){}
		
		function convertUnderGradToRecentGra(){}
		
		function removeProfile(){}
	}
	
	$systemAdmin = new SystemAdmin;
?>