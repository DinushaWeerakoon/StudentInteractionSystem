<?php
$r = $_POST['permission'];
$noticeID = $_COOKIE['noticeID'];
require_once("../Database/database.php");

$query = mysqli_query($connect,"SELECT userID from notices where id='$noticeID'") or die(mysqli_error($connect));
$row = mysqli_fetch_row($query);
$user = $row[0];
$date = date("y-m-d h-i-s");
if($r == "del"){
	//del message
	$query = mysqli_query($connect,"INSERT INTO message VALUES('admin', '$user','$date','Cant publish your notice',1,1,1)") or die(mysqli_error($connect));
	$query = mysqli_query($connect,"DELETE FROM notices WHERE id = '$noticeID'") or die (mysqli_error($connect));
}

else if($r == "per"){
	//per message
	$query = mysqli_query($connect,"INSERT INTO message VALUES('admin', '$user','$date','Your notice was published',1,1,1)") or die(mysqli_error($connect));
	$query = mysqli_query($connect,"UPDATE notices set permit = 1 WHERE id = '$noticeID' ") or die (mysqli_error($connect));
}
mysqli_close($connect);
header("LOCATION:permission.php");
?>