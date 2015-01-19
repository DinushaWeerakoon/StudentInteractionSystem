<?php
	require_once("../Database/database.php");
	$id = $_POST["delete"];
	$sql = mysqli_query($connect,"DELETE FROM forumreplies WHERE id = '$id'") or die("sorry1");
	echo "DELETED";
	$sql = mysqli_query($connect,"UPDATE forumreplies SET id = id-1 WHERE id > $id")or die ("sorry2");
	$subjectID = $_COOKIE["sID"];
	echo "<form method='post' action='forumMessages.php'><button name='subjectID' value='$subjectID'>OK</button></form>";
	mysqli_close($connect);
?>