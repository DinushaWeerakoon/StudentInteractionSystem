<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Untitled Document</title>
</head>

<body>
<?php

class SystemAdministratorProfile
{
	private $educationQualification;
	
	function addNewProfile(){
		
	
		require_once("../../Database/database.php");
		$username = $_POST["username"];
		$password = $_POST["password"];
		$usertype = $_POST["usertype"];
		
		if ($username!=null && $password!=null && $usertype!=null){
		
			$check_user=("SELECT username FROM profile WHERE username='$username'");
			$result=mysqli_query($connect,$check_user);
		
		
			if(mysqli_num_rows($result)!=0){
			echo "User already exists.<br>";
			echo "<a href='../Administrator.php'> Home page<br></a>";
			echo "<a href='add_other_users.php'> Add another user</a>";
			exit;
			}
		
			else{
			$add_user = ("INSERT INTO profile(username,password,usertype) VALUES('$username','$password','$usertype')") or die(mysqli_error());
			mysqli_query($connect,$add_user);
			echo " User Added Successfully<br>.";
			echo "<a href='../Administrator.php'>Home page<br></a>";
			echo "<a href='add_other_users.php'> Add another user</a>";
			exit;
			}
	}
	}
	
	}



?>
</body>
</html>
