<?php

		if($_SERVER["REQUEST_METHOD"]=="POST"){
			$user = $_POST["username"];
			$password = $_POST["password"];
			
			session_start();
			$_SESSION['user']="$user";
			require_once("Database/database.php");
			
			$sql = "SELECT * FROM profile WHERE username='$user' AND password='$password'";
			if($result = mysqli_query($connect, $sql)){
				if (mysqli_num_rows($result)==0){
						echo "<div><div class='alert alert-danger' role='alert'>Login Failed. Please check your username and password, then <a href = 'welcome.html' class = 'alert-link'>try again</a></div>";
					}
					
				else{
					$row = mysqli_fetch_row($result);
					setcookie('userName',$row[0]);
					//echo "<h1>Logged as $row[2]</h1>";
					setcookie('userType',$row[2]);
					
					//set the users  real name
					if($row[2] == "Administrator"){
						$name = "System Administrator";
					}
					else if($row[2]=="Lecturer" || $row[2]=="Student Counselor"){
						$sql = mysqli_query($connect,"SELECT name_with_initials FROM lecturer WHERE national_id_number= '$user'") or die("sorry");
						$row1 = mysqli_fetch_row($sql);
						$name = $row1[0];
					}
					
					else if($row[2]=="Employer"){
						$sql = mysqli_query($connect,"SELECT name FROM employer WHERE national_id_number= '$user'") or die("sorry");
						$row1 = mysqli_fetch_row($sql);
						$name = $row1[0];
					}
					
					else if($row[2]=="Undergraduate"){
						$sql = mysqli_query($connect,"SELECT first_name,middle_name,surname FROM student WHERE national_id_number= '$user'") or die("sorry");
						$row1 = mysqli_fetch_row($sql);
						$name = $row1[0]." ".$row1[1]." ".$row1[2];
						
					}
					
					else if($row[2]=="Recent Graduate"){
						$sql = mysqli_query($connect,"SELECT name_with_initials FROM recentgraduate WHERE national_id_number= '$user'") or die("sorry");
						$row1 = mysqli_fetch_row($sql);
						$name = $row1[0];
						
					}
					
					setcookie("name",$name);
					header("Location:pages/page.php");
					
					
				}
			}
			
			mysqli_close($connect);
		}
?>


