<?php
	
function viewAnotherProfile(){

		require_once("../Database/database.php");

		//watcher data
		$watcher = $_POST["username"];
		$resultW=mysqli_query($connect,"SELECT usertype FROM profile WHERE username='$watcher'") or die(mysqli_error($connect));
		$watchingType = mysqli_fetch_row($resultW); 

		//logged user
		$name=$_COOKIE["userName"];
		$userType = $_COOKIE["userType"];
		echo "<div class='container'>";
		echo "<br>";
		if($watchingType[0]=="Undergraduate"){

			
        	$result1 = mysqli_query($connect,"SELECT * FROM undergraduate where national_id_number='$watcher'") or die("");
			$row = mysqli_fetch_array($result1);
 			
			echo "<b>Student Registration number: </b>". $row['registration_number'];
			echo "<br/>";
			
      




			$result1 = mysqli_query($connect,"SELECT * FROM student where national_id_number='$watcher'") or die("");

			$row = mysqli_fetch_array($result1);
 
			echo  "<b>Name: </b>".$row['first_name'];
			echo " ";
			echo  $row['middle_name'];
			echo " ";
			echo  $row['surname'];
			echo "<br/>";
			echo "<b>Gender: </b>". $row['gender'];
			echo "<br/>";
			
			echo "<b>Fixed telephone number: </b>". $row['fixed_telephone_number'];
			echo "<br/>";
			echo "<b>Mobile number: </b>". $row['mobile_number'];
			echo "<br/>";
			echo "<b>Permenent address: </b>". $row['address_permenent'];
			echo "<br/>";
			echo "<b>Temporary address: </b>". $row['address_temporary'];
			echo "<br/>";
			echo "<b>Email address: </b>". $row['email_address'];
			echo "<br/>";
			echo "<b>Degree: </b>".$row['degree'];
			echo "<br/>";
			echo  "<b>Attended School name: </b>".$row['school_attended'];
			echo "<br/>";
			echo  "<b>Advanced level stream: </b>".$row['advanced_level_stream'];
			echo "<br/>";
		
		


			$result1 = mysqli_query($connect,"SELECT * FROM sport_achievement where national_id_number='$watcher'") or die("");
		
			while($row = mysqli_fetch_array($result1)) {
 
			echo  "<b>Achievements: </b>".$row['sport_name'];
			echo " ";
			echo  $row['date'];
			echo " ";
			echo  $row['achievement'];
			echo "<br/>";
		}  ///////////
		
		
			$result1 = mysqli_query($connect,"SELECT * FROM extra_curricular_activity_information where national_id_number='$watcher'") or die("");
		
			while($row = mysqli_fetch_array($result1)) {
 
			echo "<b>Extra-curricular activities: </b>". $row['activity_name'];
			echo " ";
			echo  $row['date'];
			echo " ";
			echo  $row['description'];
			echo "<br/>";
			
		}  
		
		if($userType=="Student Counselor"){
			

			$result1 = mysqli_query($connect,"SELECT * FROM personal_information where national_id_number='$watcher'") or die("");
		
			$row = mysqli_fetch_array($result1);
 
			echo  "<b>Father's name: </b>".$row['father_name'];
			echo "<br/>";
			echo  "<b>Mother's name: </b>".$row['mother_name'];
			echo "<br/>";
			echo  "<b>Guardian's name: </b>".$row['guardian_name'];
			echo "<br/>";
			echo  "<b>Father's contact number: </b>".$row['father_contact_number'];
			echo "<br/>";
			echo  "<b>Mother's contact number: </b>".$row['mother_contact_number'];
			echo "<br/>";
			echo  "<b>Guardian's contact number: </b>".$row['guardian_contact_number'];
			echo "<br/>";
			echo  "<b>Father's Occupation: </b>".$row['father_occupation'];
			echo "<br/>";
			echo  "<b>Mother's Occupation: </b>".$row['mother_occupation'];
			echo "<br/>";
			echo  "<b>Guardian's Occupation: </b>".$row['guardian_occupation'];
			echo "<br/>";
			//echo  ""$row['family_income'];
			echo "<br/>";
			
		
		}
	} //////////////////



		if($watchingType[0]=="Recent Graduate"){

			$result1 = mysqli_query($connect,"SELECT * FROM recentgraduate where national_id_number='$watcher'")or die("");
			while($row = mysqli_fetch_array($result1)) {
 
			echo "<b>Name: </b>". $row['name_with_initials'];
			echo "<br/>";
			echo "<b>Academic year: </b>". $row['academic_year'];
			echo "<br/>";
			echo "<b>Degree: </b>". $row['degree'];
			echo "<br/>";
			echo "<b>Contact office number: </b>". $row['contact_number_office'];
			echo "<br/>";
			echo  "<b>Contact mobile number: </b>".$row['contact_number_mobile'];
			echo "<br/>";
			echo "<b>Email address: </b>". $row['email_address'];
			echo "<br/>";
			echo "<br/>";
			echo  "<b>Internship title: </b>".$row['internship_title'];
			echo "<br/>";
			echo  "<b>Internship description: </b>".$row['internship_description'];
			echo "<br/>";
			
			echo  "<b>Internship Organization: </b>".$row['organization'];
			echo "<br/>";
			echo  "<b>Internship Organization website: </b>".$row['organization_website'];
			echo "<br/>";
			echo "<br>";
			echo "<b>Current Job title: </b>". $row['job_title'];
			echo "<br/>";
			echo  "<b>Current Job description: </b>".$row['job_description'];
			echo "<br/>";
		    echo  "<b>Current organization: </b>".$row['current_organization'];
			echo "<br/>";
			echo  "<b>Current organization website: </b>".$row['current_organization_website'];
			echo "<br/>";
      
           }
		



}////


		if($watchingType[0]=="Student Counselor"){

			$result1 = mysqli_query($connect,"SELECT * FROM studentcounselor where national_id_number='$watcher'") or die("");
			
			while($row = mysqli_fetch_array($result1)) {
 
			echo "<b>Name: </b>". $row['title'];
			echo " ";
			echo  $row['name_with_initials'];
			
			
			echo "<br/>";
			echo  "<b>Designation: </b>".$row['designation'];
			echo "<br/>";
			echo  "<b>Contact number of office: </b>".$row['contact_number_office'];
			echo "<br/>";
			echo  "<b>Contact number of mobile: </b>". $row['contact_number_mobile'];
			echo "<br/>";
			echo  "<b>Email address: </b>". $row['email_address'];
			echo "<br/>";
			echo "<br/>";
			echo "<b>Academic Qualifications: </b>";
			echo "<br/>";
			echo  "<b>1: </b>". $row['academic_qualification_1'];
			echo " ";
			echo  $row['University_1'];
			echo "<br/>";
			echo  "<b>2: </b>".$row['academic_qualification_2'];
			echo " ";
			echo  $row['University_2'];
			echo "<br/>";
			echo  "<b>3: </b>".$row['academic_qualification_3'];
			echo " ";
			echo  $row['University_3'];
			echo "<br/>";
			echo "<br/>";
			echo "<b>Professional Qualifications</b>";
			echo "<br/>";
			echo  "<b>1: </b>".$row['professional_qualification_1'];
			echo " ";
			echo  $row['institute_1'];
			echo "<br/>";
			echo  "<b>2: </b>".$row['professional_qualification_2'];
			echo " ";
			echo  $row['institute_2'];
			echo "<br/>";
			echo  "<b>3: </b>".$row['professional_qualification_3'];
			echo " ";
			echo  $row['institute_3'];
			echo "<br/>";
			echo "<br/>";
			echo "<b>Research Conducted</b>";
			echo "<br/>";
			echo  "<b>1: </b>".$row['reserch_conducted_1'];
			echo "<br/>";
			echo  "<b>2: </b>".$row['reserch_conducted_2'];
			echo "<br/>";
			echo  "<b>3: </b>".$row['reserch_conducted_3'];
			echo "<br/>";
			echo  "<b>4: </b>".$row['reserch_conducted_4'];
			echo "<br/>";
			echo "<br>";
			echo "<b> research interests</b>";
			echo "<br>";
			echo  "<b>1: </b>".$row['reserch_interest_1'];
			echo "<br/>";
			echo  "<b>2: </b>".$row['reserch_interest_2'];
			echo "<br/>";
			echo  "<b>3: </b>".$row['reserch_interest_3'];
			echo "<br/>";
			echo  "<b>4: </b>".$row['reserch_interest_4'];
			echo "<br/>";
			echo  "<b>5: </b>".$row['reserch_interest_5'];
			echo "<br/>";
			echo "<br/>";
			echo " <b>Working Places</b>";
			echo "<br/>";
			echo  "<b>1: </b>".$row['working_place_1'];
			echo " ";
			echo  $row['designation_1'];
			echo "<br/>";
			echo  "<b>2: </b>".$row['working_place_2'];
			echo " ";
			echo  $row['designation_2'];
			echo "<br/>";
			echo  "<b>3: </b>".$row['working_place_3'];
			echo " ";
			echo  $row['designation_3'];
			echo "<br/>";
			echo "<b>Subject Code: </b>". $row['subject_code'];
			echo "<br/>";
			
		} 
	




	}///////


		if($watchingType[0]=="Lecturer"){

			$result1 = mysqli_query($connect,"SELECT * FROM lecturer where national_id_number='$watcher'") or die("");
		
			while($row = mysqli_fetch_array($result1)) {
			
			echo "<br>";
			echo "<br>";
			echo "<b>Name: </b>". $row['title'];
			echo " ";
			echo  $row['name_with_initials'];
			
			
			echo "<br/>";
			echo  "<b>Designation: </b>".$row['designation'];
			echo "<br/>";
			echo  "<b>Contact number : </b> office: ".$row['contact_number_office'];
			echo "<br/>";
			echo  " mobile: ". $row['contact_number_mobile'];
			echo "<br/>";
			echo  "<b>Email address: </b>". $row['email_address'];
			echo "<br/>";
			echo "<br/>";
			echo "<b>Academic Qualifications: </b>";
			echo "<br/>";
			echo  "<b>1: </b>". $row['academic_qualification_1'];
			echo " ";
			echo  $row['University_1'];
			echo "<br/>";
			echo  "<b>2: </b>". $row['academic_qualification_2'];
			echo " ";
			echo  $row['University_2'];
			echo "<br/>";
			echo  "<b>3: </b>". $row['academic_qualification_3'];
			echo " ";
			echo  $row['University_3'];
			echo "<br/>";
			echo "<br/>";
			echo "<b>Professional Qualifications</b>";
			echo "<br/>";
			echo  "<b>1: </b>". $row['professional_qualification_1'];
			echo " ";
			echo  $row['institute_1'];
			echo "<br/>";
			echo  "<b>2: </b>". $row['professional_qualification_2'];
			echo " ";
			echo  $row['institute_2'];
			echo "<br/>";
			echo  "<b>3: </b>". $row['professional_qualification_3'];
			echo " ";
			echo  $row['institute_3'];
			echo "<br/>";
			echo "<br/>";
			echo "<b>Research Conducted</b>";
			echo "<br/>";
			echo  "<b>1: </b>". $row['reserch_conducted_1'];
			echo "<br/>";
			echo  "<b>2: </b>". $row['reserch_conducted_2'];
			echo "<br/>";
			echo  "<b>3: </b>". $row['reserch_conducted_3'];
			echo "<br/>";
			echo  "<b>4: </b>". $row['reserch_conducted_4'];
			echo "<br/>";
			echo "<br/>";
			echo "<b>Research Interests</b>";
			echo "<br/>";
			echo  "<b>1: </b>". $row['reserch_interest_1'];
			echo "<br/>";
			echo  "<b>2: </b>". $row['reserch_interest_2'];
			echo "<br/>";
			echo  "<b>3: </b>". $row['reserch_interest_3'];
			echo "<br/>";
			echo  "<b>4: </b>". $row['reserch_interest_4'];
			echo "<br/>";
			echo  "<b>5: </b>". $row['reserch_interest_5'];
			echo "<br/>";
			echo "<br/>";
			echo "<b> Working Places</b>";
			echo "<br/>";
			echo  "<b>1: </b>". $row['working_place_1'];
			echo " ";
			echo  $row['designation_1'];
			echo "<br/>";
			echo  "<b>2: </b>". $row['working_place_2'];
			echo " ";
			echo  $row['designation_2'];
			echo "<br/>";
			echo  "<b>3: </b>". $row['working_place_3'];
			echo " ";
			echo  $row['designation_3'];
			echo "<br/>";
			echo "<br/>";
			echo "<b>Subject Code: </b>". $row['subject_code'];
			echo "<br/>";
			
		} 
	




	}///////



		if($watchingType[0]=="Employer"){

			$result1 = mysqli_query($connect,"SELECT * FROM employer where national_id_number='$watcher'")or die("");
		
			while($row = mysqli_fetch_array($result1)) {
 
			echo  "<b>Name: </b>".$row['name'];
			echo "<br/>";
			echo "<br/>";
			echo  "<b>Company name: </b>".$row['company_name'];
			echo "<br/>";
			echo  "<b>Company address: </b>".$row['company_address'];
			echo "<br/>";
			echo  "<b>Contact number: </b>".$row['contact_number'];
			echo "<br/>";
			echo  "<b>Company email address: </b>".$row['company_email_address'];
			echo "<br/>";
			echo  "<b>Company wabsite: </b>".$row['company_website'];
			echo "<br/>";
			echo  "<b>About company: </b>".$row['about_company'];
			echo "<br/>";
			echo "<br/>";
			echo  "<b>Designation: </b>".$row['designation'];
			echo "<br/>";
			echo  "<b>Contact person name: </b>".$row['contact_person_name'];
			echo "<br/>";
			echo  "<b>Contact email address: </b>".$row['contact_email_address'];
			echo "<br/>";
			echo  "<b>Contact person address: </b>".$row['contact_person_number'];
			echo "<br/>";
			
		} 




	} /////



}

viewAnotherProfile();

echo "</div>";






	
?>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title> Home</title>

    <!-- Bootstrap Core CSS -->
    <link href="../css/bootstrap.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="../css/modern-business.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="../fonts/font-awesome-4.1.0/css/font-awesome.min.css" rel="stylesheet" type="text/css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

   

</head>

<body>

    <!-- Navigation -->
    <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
        <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="page.php">Student Interaction System</a>
            </div>
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav navbar-right">
                    <li>
                        <a href="page.php">Home</a>
                    </li>
                    <li>
                        <a href="Find.php">People</a>
                    </li>
                    
                    
                    
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">Announcements <b class="caret"></b></a>
                        <ul class="dropdown-menu">
                            <li>
                                <a href="../notices/viewAllNotices.php">View Announcements</a>
                            </li>
                            <li>
                                <a href="../notices/publishNotices.php">Make an Announcement</a>
                            </li>
                            
                        </ul>
                    </li>
					
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">Contact<b class="caret"></b></a>
                        <ul class="dropdown-menu">
                            <?php
							if($userType == "Undergraduate"){
                                echo "<li><a href='../message/lecturerMessage.php'>Lecturer</a></li>";
								echo "<li><a href='../message/studentCounselorMessage.php'>Student Counsellor</a></li>";
                                echo "<li><a href='../message/recentGraduateMessage.php'>Recent Graduate</a></li>";
                                echo "<li><a href='../message/employeeMessage.php'>Employee</a></li>";
								echo "<li><a href='../message/systemAdminMessage.php'>System Administraror</a></li>";	
							}
							
							else if($userType=="Administrator"){
								header("Location:Administrator.php");
							}
							else if($userType == "Lecturer"){															
								echo "<li><a href='../message/lecturerMessage.php'>Lecturer</a></li>";								
								echo "<li><a href='../message/recentGraduateMessage.php'>Recent Graduate</a></li>";
								echo "<li><a href='../message/underGraduateMessage.php'>Undergraduate</a></li>";
                                echo "<li><a href='../message/employeeMessage.php'>Employee</a></li>";
                                echo "<li><a href='../message/studentCounselorMessage.php'>Student Counsellor</a></li>";                              
                                echo "<li><a href='../message/systemAdminMessage.php'>System Administrator</a></li>";
							}
	
							else if ($userType == "Student Counselor"){ // think it
								echo "<li><a href='../message/lecturerMessage.php'>Lecturer</a></li>"; 
								echo "<li><a href='../message/recentGraduateMessage.php'>Recent Graduate</a></li>";
								echo "<li><a href='../message/underGraduateMessage.php'>Undergraduate</a></li>";
                                echo "<li><a href='../message/employeeMessage.php'>Employee</a></li>";
                                echo "<li><a href='../message/studentCounselorMessage.php'>Student Counsellor</a></li>";
                                echo "<li><a href='../message/systemAdminMessage.php'>System Administrator</a></li>";
							}
	
							else if ($userType == "Recent Graduate"){
                                echo "<li><a href='../message/underGraduateMessage.php'>Undergraduate</a></li>";
								echo "<li><a href='../message/lecturerMessage.php'>Lecturer</a></li>";
                                echo "<li><a href='../message/recentGraduateMessage.php'>Recent Graduate</a></li>"; 
								echo "<li><a href='../message/employeeMessage.php'>Employee</a></li>";
                                echo "<li><a href='../message/studentCounselorMessage.php'>Student Counsellor</a></li>";							
                                echo "<li><a href='../message/systemAdminMessage.php'>System Administrator</a></li>";
							}
	
							else if($userType == "Employer"){
								echo "<li><a href='../message/lecturerMessage.php'>Lecturer</a></li>";
                                echo "<li><a href='../message/underGraduateMessage.php'>Undergraduate</a></li>";
                                echo "<li><a href='../message/studentCounselorMessage.php'>Student Counsellor</a></li>";
								echo "<li><a href='../message/recentGraduateMessage.php'>Recent Graduate</a></li>";
                                echo "<li><a href='../message/systemAdminMessage.php'>System Administrator</a></li>";
							}
						?>
                            
                        </ul>
                    </li>
                    <li>
                        <a href="../forum/forum.php">Forum</a>
                    </li>
                    <li>
                        <a href="about.html">About Us</a>
                    </li>
                    <li>
                        <a href="search.php">Search</a>
                    </li>
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">+You<b class="caret"></b></a>
                        <ul class="dropdown-menu">
                            <li>
                                <a href="viewprofile.php">Profile</a>
                            </li>
                            <li role="presentation" class="divider"></li>
							<li>
                                <a href="../pages/changepasswordform.php">Change Password</a>
                            </li>
							<li role="presentation" class="divider"></li>
                            <li>
                                <a href="welcome.html">Logout</a>
                            </li>
                            
                        </ul>
                    </li>
                    


                </ul>


            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
    </nav>
	
	
	<hr>



        <!-- Call to Action Section -->

        <hr>

        <!-- Footer -->
        <footer>
            <div class="row">
                <div class="col-lg-12">
                    <p>Copyright &copy; University of Colombo School of Computing </p>
                </div>
            </div>
        </footer>

    </div>
    <!-- /.container -->

    <!-- jQuery Version 1.11.0 -->
    <script src="../../js/jquery-1.11.0.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="../../js/bootstrap.min.js"></script>

    <!-- Script to Activate the Carousel -->
    <script>
    $('.carousel').carousel({
        interval: 5000 //changes the speed
    })
    </script>

</body>

</html>
