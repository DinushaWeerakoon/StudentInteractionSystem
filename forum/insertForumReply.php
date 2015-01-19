<?php
	echo "<div class='container'>";
	$name= $_COOKIE["userName"];
	$reply = $_POST["reply"];
	$subjectID = $_POST["subjectID"];
	
	if(trim($reply) == ""){	
		echo "<h1>Your Message is Empty</h1>";
		echo "<form method='post' action='forumMessages.php'><button class='btn btn-default' type='submit' name='subjectID' value='$subjectID'>Try Again</button></form>";
	}
	
	else{
		echo "<h1>Your Reply is sent to forum</h1>";
		echo "<h1>Your Reply</h1>";
		echo "$reply<br><br>";
		require_once("../Database/database.php");
		//id
		$query = mysqli_query($connect,"SELECT MAX(id) FROM forumreplies");
		$numOfRows = mysqli_num_rows($query);
		
		if($numOfRows==0){
			$id = 1;
		}
		else{
			$max = mysqli_fetch_row($query);
			$id = $max[0]+1;
		}
		$sql = mysqli_query($connect,"INSERT INTO forumreplies VALUES ($id,'$name','$reply',$subjectID)");
		echo "<form method='post' action='forumMessages.php'><button class='btn btn-default' type='submit' name='subjectID' value='$subjectID'>OK</button></form>";
	}
	
	echo "<div>";
?>