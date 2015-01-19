<?php 
	require_once("../Database/database.php");
	$query = mysqli_query($connect,"SELECT id,userID, subject, content,title,date from notices where permit=0 order by date DESC") or die(mysqli_error($connect));
	
	echo "<div class='container'>";
	echo "<font color='red'>You should start to permit notices from below<b></b></font><br>";
	echo "</br>";
	if(mysqli_num_rows($query)==0){
		echo "no notices for permit";
		echo "<form method='post' action='../pages/Administrator.php'><button class='btn btn-default' type='submit' name='ok' value='ok'>OK</button></form>";
	}
	
	else{
		while($row = mysqli_fetch_row($query)){
			$id = $row[0];
			$publisher = $row[1];
			$subject = $row[2];
			$content = $row[3];
			$title = $row[4];
			$date = $row[5];
			//view to admin text to that user
			$query2 = mysqli_query($connect,"SELECT usertype from profile where username='$publisher'") or die(mysqli_error($connect));
			$row2 = mysqli_fetch_row($query2);
			if($row2[0]=="Administrator"){
				$name = "System Administrator";
			}
			
			else if($row2[0]=="Student Counselor"){
				$query2 = mysqli_query($connect,"SELECT title,name_with_initials from studentcounselor where national_id_number='$publisher'") or die(mysqli_error($connect));
				$row1 = mysqli_fetch_row($query2);
				$name = $row1[0]." ".$row1[1];
			}
			
			else if($row2[0]=="Employer"){
				$query2 = mysqli_query($connect,"SELECT name from employer where national_id_number='$publisher'") or die(mysqli_error($connect));
				$row1 = mysqli_fetch_row($query2);
				$name = $row1[0];
			}
			
			else if($row2[0]=="Lecturer"){
				$query2 = mysqli_query($connect,"SELECT title,name_with_initials from lecturer where national_id_number='$publisher'") or die(mysqli_error($connect));
				$row1 = mysqli_fetch_row($query2);
				$name = $row1[0]." ".$row1[1];
			}
			
			else if($row2[0]=="Undergraduate"){
				$query2 = mysqli_query($connect,"SELECT first_name,middle_name,surname from student where national_id_number='$publisher'") or die(mysqli_error($connect));
				$row1 = mysqli_fetch_row($query2);
				$name = $row1[0]." ".$row[1]." ".$row1[2];
			}
			
			else if($row2[0]=="Recent Graduate"){
				$query2 = mysqli_query($connect,"SELECT name_with_initials from recentgraduate where national_id_number='$publisher'") or die(mysqli_error($connect));
				$row1 = mysqli_fetch_row($query2);
				$name = $row1[0];
			}
			setcookie("noticeID",$id);
			echo "<table>
					<tr><td><b>$name</b></td><td>$date</td></tr>
					<tr><td colspan=2><b><font color='blue'>Subject :</font></b><td></tr>
					<tr><td colspan=2><b>'Student Achievements'</b><td></tr>
					
					<tr><td colspan=2><b><font color='blue'>Title : </font></b><td></tr>
					<tr><td colspan=2><b>'$title'</b><td></tr>
					
					<tr><td colspan=2>'$content'<td></tr>
					
					<form action='permitOcc.php' method='post'>
					<tr><td colspan=2><button class='btn btn-default' type='submit' name='permission' value='del'>Not Permit</button><td></tr>
					<tr><td colspan=2><button class='btn btn-default' type='submit' name='permission' value='per'>Permit</button><td></tr>
					
					</form>";
					
			echo	"</table>";
			echo "</br>";
			echo "</br>";
		}
	}
	echo "</div>";
	mysqli_close($connect);
?>