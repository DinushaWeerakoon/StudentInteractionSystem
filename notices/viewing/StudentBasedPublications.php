<?php
	require_once("../../Database/database.php");
	$query = mysqli_query($connect,"SELECT userID,content,date,title,id FROM notices Where permit = 1 and subject = 'Student Based Publications' order by date DESC") or die (mysqli_error($connect));
	echo "<h1>Student Based Publications</h1>";
	if(mysqli_num_rows($query)==0){
		echo "<h1>No View</h1>";
	}
	else{
		while($row = mysqli_fetch_row($query)){
			$publisher = $row[0];
			$content = $row[1];
			$date = $row[2];
			$title = $row[3];
			
			//viewing
			$query2 = mysqli_query($connect,"SELECT usertype from profile where username='$publisher'") or die(mysqli_error($connect));
			$row = mysqli_fetch_row($query2);
			
			if($row[0]=="Administrator"){
				$name = "System Administrator";
			}
			
			else if($row[0]=="Student Counselor"){
				$query2 = mysqli_query($connect,"SELECT title,name_with_initials from studentcounselor where national_id_number='$publisher'") or die(mysqli_error($connect));
				$row1 = mysqli_fetch_row($query2);
				$name = $row1[0]." ".$row[1];
			}
			
			else if($row[0]=="Employer"){
				$query2 = mysqli_query($connect,"SELECT name from employer where national_id_number='$publisher'") or die(mysqli_error($connect));
				$row1 = mysqli_fetch_row($query2);
				$name = $row1[0];
			}
			
			else if($row[0]=="Lecturer"){
				$query2 = mysqli_query($connect,"SELECT title,name_with_initials from lecturer where national_id_number='$publisher'") or die(mysqli_error($connect));
				$row1 = mysqli_fetch_row($query2);
				$name = $row1[0]." ".$row[1];
			}
			
			else if($row[0]=="Undergraduate"){
				$query2 = mysqli_query($connect,"SELECT first_name,middle_name,surname from student where national_id_number='$publisher'") or die(mysqli_error($connect));
				$row1 = mysqli_fetch_row($query2);
				$name = $row1[0]." ".$row[1]." ".$row[2];
			}
			
			else if($row[0]=="Recent Graduate"){
				$query2 = mysqli_query($connect,"SELECT name_with_initials from recentgraduate where national_id_number='$publisher'") or die(mysqli_error($connect));
				$row1 = mysqli_fetch_row($query2);
				$name = $row1[0];
			}
			
			echo "<table>
					<tr><td>'$name'</td><td>'$date'</td></tr>
					<tr><td colspan=2><b><font color='blue'>Title</font></b><td></tr>
					<tr><td colspan=2><b>'$title'</b><td></tr>
					<tr><td colspan=2><b>'$content'</b><td></tr>";
					
					if($_COOKIE["usertype"] == "Administrator"){
						echo "<tr><td colspan=2><b>' '</b><td></tr>
								<form action='../deleteNotices.php' method='post'>
								<tr><td colspan=2><button name='deleting' type='submit' value='$id'>Delete</button><td></tr></form>";
					}
			echo	"</table>";
			
			
		}
		
	}
	mysqli_close($connect);
?>