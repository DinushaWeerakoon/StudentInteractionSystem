<?php
	
	function changepassword(){

		require_once("../Database/database.php");

        
		$name=$_COOKIE["userName"];
		$result=mysqli_query($connect,"SELECT password FROM profile WHERE username='$name'") or die(mysqli_error($connect));
		
		$r = mysqli_fetch_row($result);

		$currentpassword=$_POST["currentpassword"];
		$newpassword=$_POST["newpassword"];
		
		if("$currentpassword"=="$r[0]"){
		$result1=mysqli_query($connect,"UPDATE profile SET password='$newpassword' WHERE password='$r[0]'") or die(mysqli_error($connect));

		echo "Your Password Was Changed Correctly";

		}

		else{echo "Given Current Password Is Incorrect. Please Try Again!";}

	
		
	}

	changepassword();


?>