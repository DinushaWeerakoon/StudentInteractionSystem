<?php
	if($_SERVER["REQUEST_METHOD"]=="POST"){
		$forgetter = $_POST["forgetter"];
		
		require_once("../Database/database.php");
		
		$sql = mysqli_query($connect,"Select * FROM profile WHERE username='$forgetter'");
		if(mysqli_num_rows($sql)==0){
			echo "NO USER LIKE THAT....."."<br>"."<TRY AGAIN>";
		}
		
		else{
			$row= mysqli_fetch_row($sql);
			//echo $row[0]." ".$row[1]." ".$row[2];
			$ec  = "";
			
			if($row[2] == "Undergraduate"){
				$sql = mysqli_query($connect,"Select email_address FROM student WHERE national_id_number='$forgetter'");
				$row2 = mysqli_fetch_row($sql);
				$mail = "User Name : $forgetter\nPassword : $row[1]";
				mail($row2[0],"SIS Password",$mail);
			}
			else if($row[2] == "Lecturer" || $row[2] == "Student Counselor"){
				$sql = mysqli_query($connect,"Select email_address FROM lecturer WHERE national_id_number='$forgetter'");
				$row2 = mysqli_fetch_row($sql);
				$mail = "User Name : $forgetter\nPassword : $row[1]";
				mail($row2[0],"SIS Password",$mail);
				
			}
			
			else if($row[2] == "Employer"){
				$sql = mysqli_query($connect,"Select contact_email_address FROM employer WHERE national_id_number='$forgetter'");
				$row2 = mysqli_fetch_row($sql);
				$mail = "User Name : $forgetter\nPassword : $row[1]";
				mail($row2[0],"SIS Password",$mail);
			}
			
			else if($row[2] == "Recent Graduate"){
				$sql = mysqli_query($connect,"Select email_address FROM recentgraduate WHERE national_id_number='$forgetter'");
				$row2 = mysqli_fetch_row($sql);
				$mail = "User Name : $forgetter\nPassword : $row[1]";
				mail($row2[0],"SIS Password",$mail);
			}
			
			else{
				echo "Admin";
			}
			
			
		}
		
		
	}
?>

<html>
<body>

	<form method="post" action="../welcome.html">
		<input type="submit" value="OKay">
	</form>

</body>
</html>