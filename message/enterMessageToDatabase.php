<?php
	
	$receiver = $_COOKIE["receiver"];
	$sender = $_COOKIE["userName"];
	$date = date("y-m-d h-i-s");
	$msg = $_POST["message"];
	if(trim($msg) == ""){
		echo "<h1>Message is Empty</h1>";
		echo "<form method = 'post' action='messageAction.php'><button class='btn btn-primary' type='submit' name='receiver' value='$receiver'>OK</button></form>";
	}
	else{
		echo "<h1>Message Sent</h1>";
		require_once("../Database/database.php");
		$sql = "INSERT INTO message VALUES ('$sender','$receiver','$date','$msg',1,1,1)";
		mysqli_query($connect,$sql) or die ("error in query");
		echo "<form method = 'post' action='messageAction.php'><button class='btn btn-primary' type='submit' name='receiver' value='$receiver'>OK</button></form>";
		
		mysqli_close($connect);
	}
?>