<?php
	echo "Delete forum";
	$subjectID = $_POST["delete"];
	echo "$subjectID";
	require_once("../Database/database.php");
	$sql = mysqli_query($connect,"DELETE FROM forumsubjects WHERE id = '$subjectID'") or die ("sorry1");
	$sql = mysqli_query($connect,"DELETE FROM forumreplies WHERE subjectID = '$subjectID'") or die (mysqli_error($connect));
	$sql = mysqli_query($connect,"UPDATE forumsubjects SET id = id-1 WHERE id >'$subjectID'") or die ("sorry3");
	$sql = mysqli_query($connect,"UPDATE forumreplies SET subjectID = subjectID-1 WHERE subjectID >'$subjectID'") or die ("sorry3");
	$sql1 = mysqli_query($connect,"SELECT id FROM forumreplies");
	$id = 1;
	while($row = mysqli_fetch_row($sql1)){
		$sql = mysqli_query($connect,"UPDATE forumreplies SET id = $id WHERE id = '$row[0]'");
		$id = $id +1;
	}
	mysqli_close($connect);
	header("LOCATION:forum.php");
?>