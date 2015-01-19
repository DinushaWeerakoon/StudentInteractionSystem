<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Untitled Document</title>
</head>
<body>
<?php 
/* Profile class*/
class Profile
{
	function searchForSport(){
		require_once("../Database/database.php");
		$sport=@$_POST["sport"];
		
		
		$result=mysqli_query($connect,"SELECT * FROM sport WHERE sport_name='$sport'") or die (mysqli_error());
		
		//$searchSport=("CALL searchSport('$sport')") or die (mysql_error());
		//$result=mysqli_query($Registration_DB_Connect,$searchSport);
		
		if(mysqli_num_rows($result)==0) {
			echo "</br>";
			echo "</br>";
			echo "no students <br>";
		}
		
		else{
		echo "</br>";
		echo "</br>";
		echo "<b>Students of the playing </b>". $sport. "<br>";
		echo "<br>";
		//proc_close($result);
		while($row = mysqli_fetch_array($result)) {
			//require_once("../Database/DB_Connect.php");
			//echo  $row['national_id_number']."<br>";
			
			$id=$row['national_id_number'];
			
			
			$get_result=mysqli_query($connect,"SELECT * FROM student WHERE national_id_number='$id' ") or die(mysqli_error($connect));
			
			while($row2 = mysqli_fetch_array($get_result)){
				echo $row2['first_name'];
				echo " ";
				echo $row2['middle_name'];
				echo " ";
				echo $row2['surname'];
				echo "<br>";
				echo $row2['mobile_number']. "<br>";
				echo $row2['email_address'] ."<br>";
				echo $row2['degree'] ."<br>";
				//echo "<br>";
			}
			
			$get_year=mysqli_query($connect,"SELECT acedemic_year FROM undergraduate WHERE national_id_number='$id'") or die(mysqli_error($connect));
			
			while($row3=mysqli_fetch_array($get_year)){
				echo $row3['acedemic_year']." year";
				echo "<br>";
			}
			echo "<br>";
			//echo "<br>";
		
      
}
}		
		
	}
	
	
	function searchForExtraCurrricularActivity(){
	
		require_once("../Database/database.php");
		$activity=@$_POST["society"];
		if(empty($activity)){
			echo "please select a sport, society or company<br>";
		}
		//$searchActivity=("CALL searchActivity('$activity')") or die (mysql_error());
		//$result=mysqli_query($Registration_DB_Connect,$searchActivity);
		
		$result=mysqli_query($connect,"SELECT * FROM extra_curricular_activity_information WHERE activity_name='$activity'") or die (mysqli_error($connect));
		if(mysqli_num_rows($result)==0) {
			echo "</br>";
			echo "</br>";
			echo "no students <br>";
		}
		
		else{
		echo "</br>";
		echo "</br>";
		echo "<b>Students of the society of </b>". $activity. "<br>";
		echo "<br>";
		while($row = mysqli_fetch_array($result)) {
 
			//echo  $row['national_id_number']."<br>";
			
						$id=$row['national_id_number'];
			
			
			$get_result=mysqli_query($connect,"SELECT * FROM student WHERE national_id_number='$id' ") or die(mysqli_error($connect));
			
			while($row2 = mysqli_fetch_array($get_result)){
				echo $row2['first_name'];
				echo " ";
				echo $row2['middle_name'];
				echo " ";
				echo $row2['surname'];
				echo "<br>";
				echo $row2['mobile_number']. "<br>";
				echo $row2['email_address'] ."<br>";
				echo $row2['degree'] ."<br>";
				//echo "<br>";
			}
			
			$get_year=mysqli_query($connect,"SELECT acedemic_year FROM undergraduate WHERE national_id_number='$id'") or die(mysqli_error($connect));
			
			while($row3=mysqli_fetch_array($get_year)){
				echo $row3['acedemic_year']." year";
				echo "<br>";
			}
			
			echo "<br>";
			//echo "<br>";
		
      
}


}
}

	function searchForCompany(){
	
		require_once("../Database/database.php");
		$company=@$_POST["company"];
		if(empty($company)){
			echo "please select a sport, society or company<br>";
		}
		//$searchActivity=("CALL searchActivity('$activity')") or die (mysql_error());
		//$result=mysqli_query($Registration_DB_Connect,$searchActivity);
		
		$result=mysqli_query($connect,"SELECT * FROM recentgraduate WHERE current_organization='$company'") or die (mysqli_error($connect));
		if(mysqli_num_rows($result)==0) {
			echo "</br>";
			echo "</br>";
			echo "no graduates <br>";
		}
		
		else{
		echo "</br>";
		echo "</br>";
		echo "<b>Graduates, working in the </b>". $company. "<br>";
		echo "<br>";
		while($row = mysqli_fetch_array($result)) {
 
			//echo  $row['national_id_number']."<br>";
			
						$id=$row['national_id_number'];
			
			
			$get_result=mysqli_query($connect,"SELECT * FROM recentgraduate WHERE national_id_number='$id' ") or die(mysqli_error($connect));
			
			while($row2 = mysqli_fetch_array($get_result)){
				echo $row2['name_with_initials'];
				echo " ";
				echo $row2['degree'];
				echo " ";
				echo $row2['academic_year'];
				echo "<br>";
				echo $row2['contact_number_office']. "<br>";
				echo $row2['contact_number_mobile'] ."<br>";
				echo $row2['email_address'] ."<br>";
				echo "<br>";
			}
			
			
			
			echo "<br>";
			//echo "<br>";
		
      
}
}
}
}
?>
</body>

</html>
