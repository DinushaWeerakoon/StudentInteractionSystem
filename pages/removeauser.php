<?php
	
	function Removeauser(){

		require_once("../Database/database.php");

        
		
		
		$username1=$_POST["username1"];
		
		$result1=mysqli_query($connect,"DELETE FROM profile WHERE username='$username1'") or die(mysqli_error($connect));
		$result1=mysqli_query($connect,"DELETE FROM forumreplies WHERE user='$username1'") or die(mysqli_error($connect));
		$result1=mysqli_query($connect,"DELETE FROM forumsubjects WHERE userID='$username1'") or die(mysqli_error($connect));
		//$result1=mysqli_query($connect,"DELETE FROM message WHERE sender='$username1'") or die(mysqli_error($connect));
		//$result1=mysqli_query($connect,"DELETE FROM notices WHERE userID='$username1'") or die(mysqli_error($connect));
		
		


		echo "User was deleted successfuly!";

		

	
		
	}

	Removeauser();


?>