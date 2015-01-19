<?php
	if($_SERVER["REQUEST_METHOD"]=="POST"){
		$subject = $_POST["subject"];
		$userid = $_COOKIE["userName"];
		require_once("../Database/database.php");
		
		$sql = mysqli_query($connect,"SELECT MAX(id) FROM forumsubjects");
		$row = mysqli_fetch_row($sql);
		$id = $row[0] + 1;
		
		$sql = mysqli_query($connect,"INSERT INTO forumsubjects VALUES ($id,'$subject','$userid')");
		header("LOCATION:forum.php");
	}
?>