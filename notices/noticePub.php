<?php 
	$userName = $_COOKIE["userName"];
	$userType = $_COOKIE["userType"];
	if($_POST["subject"]=="1"){
		$subject = "Student Achievements";
	}
	else if($_POST["subject"]=="2"){
		$subject = "Communication Platform";
	}
	else if($_POST["subject"]=="3"){
		$subject = "Student Based Publications";
	}
	
	$content = $_POST["textt"];
	$date = date("y-m-d h-i-s");
	$title = $_POST["title"];
	require_once("../Database/database.php");
	if($userType == "Administrator"){
		$sql = "INSERT INTO notices (userID,subject,content,date,permit,title)VALUES('$userName','$subject','$content','$date',1,'$title')";
		
	}
	
	else{
		$sql = "INSERT INTO notices(userID,subject,content,date,permit,title) VALUES('$userName','$subject','$content','$date',0,'$title')";
		
	}
	$query = mysqli_query($connect,$sql) or die (mysqli_error($connect));
	mysqli_close($connect);
	header("LOCATION:publishNotices.php");
	

?>