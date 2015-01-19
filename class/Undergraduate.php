<?php
class Undergraduate{
	
	private $extraCurricularActivity;
	private $sport;
	private $competitions;
	private $academicYear;
	private $motherName;
	private $motherOccupation;
	private $fatherName;
	private $fatherOccupation;
	private $monthlyIncome;
	private $degree;
	
	function completeDataSheet(){
		require_once("../../Database/database.php");
		
		
		$first_name=$_POST["firstName"];
		$middle_name=$_POST["middleName"];
		$surname=$_POST["surname"];
		$national_id_number=$_POST["nic"];
		$fixed_telephone_number=$_POST["tpHome"];
		$mobile_number=$_POST["tpMobile"];
		$address_permenent=$_POST["permanentAddress"];
		$address_temporary=$_POST["temporaryAddress"];
		$email_address=$_POST["email"];
		$dob=$_POST["dob"];
		$degree=$_POST["degree"];
		$school_attended=$_POST["school"];
		$advanced_level_stream=$_POST["ALstream"];
		$gender=@$_POST["sex"];
		
		$registration_number=$_POST["regNo"];
		$academic_year=$_POST["academicYear"];
		
		$father_name=$_POST["fatherName"];
		$mother_name=$_POST["motherName"];
		$guardian_name=$_POST["guardianName"];
		$father_contact_number=$_POST["fatherContact"];
		$mother_contact_number=$_POST["motherContact"];
		$guardian_contact_number=$_POST["guardianContact"];
		$father_occupation=$_POST["fatherOccupation"];
		$mother_occupation=$_POST["motherOccupation"];
		$guardian_occupation=$_POST["guardianOccupation"];
		$family_income=null; //$_POST["totalIncome"];
		
		$username = $_POST["userName"];
		$password = $_POST["password"];
		$usertype = "Undergraduate";
		
		
		$check_user=("SELECT username from profile WHERE username='$national_id_number' and username='$username'")or die(mysqli_error());
		$result=mysqli_query($connect,$check_user);
		
		
		if($username!=null && $password!=null && $first_name!=null && $surname!=null && $national_id_number!=null && $mobile_number!=null && $address_permenent!=null && $email_address!=null && $degree!=null && $school_attended!=null && $advanced_level_stream!=null && $gender!=null && $registration_number!=null && $academic_year!=null && $father_name!=null && $mother_name!=null && $guardian_name!=null && $father_occupation!=null && $mother_occupation!=null && $guardian_occupation!=null ){
			
			if(mysqli_num_rows($result)!=0){
			echo "User already exists.<br>";
			echo "<a href='add_undergraduate.php'> Add another user.<br></a>";
			echo "<a href='../Administrator.php'> Home page<br></a>";
			exit;
		}
			
		else{
			$insert_profile=("INSERT INTO profile(username,password,usertype) VALUES('$username','$password','$usertype')") or die(mysqli_error());
			mysqli_query($connect,$insert_profile);
			echo "Successfully added to profile.<br>";
			
			$insert_studentinfo=("INSERT INTO student VALUES('$first_name','$middle_name','$surname','$national_id_number','$fixed_telephone_number','$mobile_number','$address_permenent','$address_temporary','$email_address','$dob','$degree','$school_attended','$advanced_level_stream','$gender')") or die (mysql_error());
			mysqli_query($connect,$insert_studentinfo);
			echo "Successfully added to student.<br>";
			
			$insert_undergraduateinfo=("INSERT INTO undergraduate(national_id_number,registration_number,acedemic_year) VALUES('$national_id_number','$registration_number','$academic_year')") or die (mysql_error());
			mysqli_query($connect,$insert_undergraduateinfo);
			echo "Successfully added to undergraduate.<br>";
			
			$insert_personalinfo=("INSERT INTO personal_information VALUES ('$national_id_number','$father_name','$mother_name','$guardian_name','$father_contact_number','$mother_contact_number','$guardian_contact_number','$father_occupation','$mother_occupation','$guardian_occupation','$family_income')") or die(mysql_error());
			mysqli_query($connect,$insert_personalinfo);
			echo "Successfully added to personal information.<br>";
			
			
			if(!empty($_POST["sport"])){
				foreach($_POST["sport"] as $selected){
					$sql=("INSERT INTO sport VALUES('$selected','$national_id_number')") or die (mysqli_error());
					$result=mysqli_query($connect,$sql);
				}
				echo "Successfully added to sport.<br>";
			}
			
			if(!empty($_POST["society"])){
				foreach($_POST["society"] as $selected){
					$sql=("INSERT INTO extra_curricular_activity_information(national_id_number,activity_name) VALUES('$national_id_number','$selected')") or die (mysqli_error());
					$result=mysqli_query($connect,$sql);
				}
				echo "Successfully added to extra curricular activities.<br>";
			}
			echo "<a href='add_undergraduate.php'> Add another user.<br>";
			echo "<a href='../Administrator.php'> Home page<br></a>";
			exit;
		}	
		
		
		}
		
		
		
		
		
	}
}

$new_user= new Undergraduate;
$new_user->completeDataSheet();
?>