<?php
	$id = $_POST['deleting'];
	require_once("../Database/database.php");
	$query = mysqli_query($connect,"DELETE FROM notices WHERE id = '$id'") or die (mysqli_error($connect));
	mysqli_close($connect);
	header("LOCATION:viewAllNotices.php");
?>