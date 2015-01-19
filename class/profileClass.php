<html>
<head>
<script>
function validateForm() {
    var x = document.forms["pubNot"]["subject"].value;
    if (x!="1" && x!="2" && x!="3" ) {
        alert("You have to select a field before publishing notice");
        return false;
    }
	
	x = document.forms["pubNot"]["textt"].value;
	if(x.trim()==""){
		alert("notice is empty");
        return false;
	}
	
	x = document.forms["pubNot"]["title"].value;
	if(x.trim()==""){
		alert("title is empty");
        return false;
	}
}
</script>
</head>
<?php
	//echo "<h1>Profile Class</h1>";
	class Profile{
		
		function logout(){}
		
		function publishNotices(){
			echo "<form method='post' name='pubNot' action='../notices/noticePub.php' >
				<input type='radio' name='subject' value='1'>Student Achievements<br>
				<input type='radio' name='subject' value='2'>Communication Platform<br>
				<input type='radio' name='subject' value='3'>Student Based Publications<br><br><br>
				Title<br><input type='text' name='title'></input><br><br><br>Content<br>
				<textarea rows='20' cols='100' placeholder='notice publish' name = 'textt' >
				</textarea><br><br>";
			if($_COOKIE["userType"]!="Administrator"){
				echo "<font color='red'>After Submitting a notice,<br>You should have to wait System Administrator Authorization to publish Your Post<br>Thank You!</font><br><br>";
				}
			echo "<input class='btn btn default' type='submit' value='Submit' onclick='return validateForm()'><br>
				</form><br><br>";
			
			
		}
		
		//function for forum posts
		function forumPosts(){
			//echo "forum posts";
			//connecting database
			require_once("../Database/database.php");
			
			$forumSubjects = mysqli_query($connect,"SELECT * FROM forumSubjects") or die("sorry1");
			$count = mysqli_num_rows($forumSubjects);
			echo "<div class='container'>";
			echo "<br>";
			if($count ==0){
				echo "start a new topic";
			}
			else{
				echo "<table width = '70%'>";
				echo "<tr><td><b>Subject</b></td></tr>";
				while($row = mysqli_fetch_row($forumSubjects)){
					echo "<tr><td>$row[1]</td><td><form method='post' action='forumMessages.php'><button class='btn btn-primary' name='subjectID' value= '$row[0]'>View</button></form></td>";
					if($_COOKIE["userType"] == "Administrator" or $_COOKIE["userName"] == "$row[2]"){
						echo "<td><form method='post' action='deleteForum.php'><button class='btn btn-primary' name='delete' value='$row[0]'>Delete</button></form></td>";
					}
					echo "</tr>";
					
				}
				echo "</table>";
				echo "<br>";
				echo "<br>";
				echo "<p><b>Before start the new topic please make sure that topic already exists or not</b></p>";
			}
			// create new forum post
			echo "<form method='post' action='enterTheNewForum.php'><button class='btn btn-primary'>Start a New Topic</button></form>";
			echo "<div>";
			mysqli_close($connect);
		}
		
		function viewDetails(){}
		
		function quering($field){}

	}
?>

</html>