<?php
	require_once("../Database/database.php");
	$sender = $_COOKIE["userName"];
	$receiver = $_COOKIE["receiver"];
	$sql ="SELECT * FROM message WHERE (sender = '$sender' AND receiver = '$receiver') OR (receiver = '$sender' AND sender = '$receiver') ORDER BY date_time";
	$check = mysqli_query($connect,$sql);
	
	while($row = mysqli_fetch_row($check)){
		if($row[0] == $sender and $row[6] == 0){
			//delete
			$sql = mysqli_query($connect,"DELETE FROM message WHERE date_time = '$row[2]'") or die ("sorry1");
		}
		
		else if($row[0] == $sender and $row[6] == 1){
			//update senderDelete
			$sql = mysqli_query($connect,"UPDATE message SET senderDelete = 0 WHERE date_time = '$row[2]'") or die ("sorry3");
		}
		
		else if($row[1] == $sender and $row[5] == 0){
			//delete
			$sql = mysqli_query($connect,"DELETE FROM message WHERE date_time = '$row[2]'") or die ("sorry1");
		}
		else if($row[1] == $sender and $row[6] == 1){
			//update receiverDelete
			$sql = mysqli_query($connect,"UPDATE message SET receiverDelete = 0 WHERE date_time = '$row[2]'") or die ("sorry3");
		}
	}
	
	echo "Deleted Your All Messages<br>";
	mysqli_close($connect);
	echo "<form method = 'post' action='messageAction.php'><button type='submit' name='receiver' value='$receiver'>OK</button></form>";
?>






