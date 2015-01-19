<?php
	$date_time = $_POST["delete"];
	require_once("../Database/database.php");
	$check = mysqli_query($connect,"SELECT * FROM message WHERE date_time = '$date_time'");
	$row = mysqli_fetch_row($check);
	if($row[6] ==0 or $row[5] ==0){
		//delete
		$sql = mysqli_query($connect,"DELETE FROM message WHERE date_time = '$date_time'");
	}
	
	else{
		//update
		if($_COOKIE["userName"] == "$row[0]"){
			$sql = mysqli_query($connect,"UPDATE message SET senderDelete = 0 WHERE date_time = '$date_time'");
		}
		else{
			$sql = mysqli_query($connect,"UPDATE message SET receiverDelete = 0 WHERE date_time = '$date_time'");
		}
	}
	
	echo "Your Message Succesfully Deleted<br>";
	$receiver = $_COOKIE["receiver"];
	mysqli_close($connect);
	echo "<form method = 'post' action='messageAction.php'><button class='btn btn-primary' type='submit' name='receiver' value='$receiver'>OK</button></form>";

	
	?>