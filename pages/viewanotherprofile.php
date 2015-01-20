<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>View a Profile</title>

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
                                <a href="../welcome.html">Logout</a>
                            </li>
                            
                        </ul>
                    </li>
                    


                </ul>


            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
    </nav>
	
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
			
			echo "<div class='panel panel-primary'>";
			echo "<div class = 'panel-heading'><h3 class='panel-title'>Personal Information</h3>";
			echo "</div>";
			echo "<div class='panel-body'>";
			echo "<ul class='list-group'>";
 			
			echo "<li class='list-group-item'><b>Student Registration number&nbsp;&nbsp;&nbsp&nbsp;&nbsp;:&nbsp;&nbsp;&nbsp&nbsp;&nbsp; </b>". $row['registration_number'];
			echo "</li>";
			
      




			$result1 = mysqli_query($connect,"SELECT * FROM student where national_id_number='$watcher'") or die("");

			$row = mysqli_fetch_array($result1);
 
			echo  "<li class='list-group-item'><b>Name&nbsp;&nbsp;&nbsp&nbsp;&nbsp;:&nbsp;&nbsp;&nbsp&nbsp;&nbsp; </b>".$row['first_name'];
			echo " ";
			echo  $row['middle_name'];
			echo " ";
			echo  $row['surname'];
			echo "<br/>";
			echo "<li class='list-group-item'><b>Gender&nbsp;&nbsp;&nbsp&nbsp;&nbsp;:&nbsp;&nbsp;&nbsp&nbsp;&nbsp; </b>". $row['gender'];
			echo "</li>";
			echo "<li class='list-group-item'><b>Degree&nbsp;&nbsp;&nbsp&nbsp;&nbsp;:&nbsp;&nbsp;&nbsp&nbsp;&nbsp; </b>".$row['degree'];
			echo "</li>";
			echo  "<li class='list-group-item'><b>Attended School name&nbsp;&nbsp;&nbsp&nbsp;&nbsp;:&nbsp;&nbsp;&nbsp&nbsp;&nbsp; </b>".$row['school_attended'];
			echo "</li>";
			echo  "<li class='list-group-item'><b>Advanced level stream&nbsp;&nbsp;&nbsp&nbsp;&nbsp;:&nbsp;&nbsp;&nbsp&nbsp;&nbsp; </b>".$row['advanced_level_stream'];
			echo "</li>";
			echo "</ul></div></div>";
			echo "<div class='panel panel-primary'>";
			echo "<div class = 'panel-heading'><h3 class='panel-title'>Contact Information</h3>";
			echo "</div>";
			echo "<div class='panel-body'>";
			echo "<ul class='list-group'>";
			echo "<li class='list-group-item'><b>Fixed telephone number&nbsp;&nbsp;&nbsp&nbsp;&nbsp;:&nbsp;&nbsp;&nbsp&nbsp;&nbsp; </b>". $row['fixed_telephone_number'];
			echo "</li>";
			echo "<li class='list-group-item'><b>Mobile number&nbsp;&nbsp;&nbsp&nbsp;&nbsp;:&nbsp;&nbsp;&nbsp&nbsp;&nbsp; </b>". $row['mobile_number'];
			echo "</li>";
			echo "<li class='list-group-item'><b>Permenent address&nbsp;&nbsp;&nbsp&nbsp;&nbsp;:&nbsp;&nbsp;&nbsp&nbsp;&nbsp; </b>". $row['address_permenent'];
			echo "</li>";
			echo "<li class='list-group-item'><b>Temporary address&nbsp;&nbsp;&nbsp&nbsp;&nbsp;:&nbsp;&nbsp;&nbsp&nbsp;&nbsp; </b>". $row['address_temporary'];
			echo "</li>";
			echo "<li class='list-group-item'><b>Email address&nbsp;&nbsp;&nbsp&nbsp;&nbsp;:&nbsp;&nbsp;&nbsp&nbsp;&nbsp; </b>". $row['email_address'];
			echo "</li>";
			echo "</ul></div></div>";
			
		
		


			$result1 = mysqli_query($connect,"SELECT * FROM sport_achievement where national_id_number='$watcher'") or die("");
			
			echo "<div class='panel panel-primary'>";
			echo "<div class = 'panel-heading'><h3 class='panel-title'>Personal Information</h3>";
			echo "</div>";
			echo "<div class='panel-body'>";
			echo "<ul class='list-group'>";
		
			while($row = mysqli_fetch_array($result1)) {
 
			echo  "<li class='list-group-item'><b>Achievements&nbsp;&nbsp;&nbsp&nbsp;&nbsp;:&nbsp;&nbsp;&nbsp&nbsp;&nbsp; </b>".$row['sport_name'];
			echo " ";
			
			echo " ";
			echo  $row['achievement'];
			echo "</li>";
		}  ///////////
		
		
			$result1 = mysqli_query($connect,"SELECT * FROM extra_curricular_activity_information where national_id_number='$watcher'") or die("");
		
			while($row = mysqli_fetch_array($result1)) {
 
			echo "<li class='list-group-item'><b>Extra-curricular activities&nbsp;&nbsp;&nbsp&nbsp;&nbsp;:&nbsp;&nbsp;&nbsp&nbsp;&nbsp; </b>". $row['activity_name'];
			echo " ";
			
			echo " ";
			echo  $row['description'];
			echo "</li>";
			
			
		}  
		
		echo "</ul></div></div>";
		
		
		if($userType=="Student Counselor"){
			

			$result1 = mysqli_query($connect,"SELECT * FROM personal_information where national_id_number='$watcher'") or die("");
		
			$row = mysqli_fetch_array($result1);
			
			echo "<div class='panel panel-primary'>";
			echo "<div class = 'panel-heading'><h3 class='panel-title'>Parents Information</h3>";
			echo "</div>";
			echo "<div class='panel-body'>";
			echo "<ul class='list-group'>";
 
			echo  "<li class='list-group-item'><b>Father's name&nbsp;&nbsp;&nbsp&nbsp;&nbsp;: &nbsp;&nbsp;&nbsp&nbsp;&nbsp;</b>".$row['father_name'];
			echo "</li>";
			echo  "<li class='list-group-item'><b>Mother's name&nbsp;&nbsp;&nbsp&nbsp;&nbsp;:&nbsp;&nbsp;&nbsp&nbsp;&nbsp; </b>".$row['mother_name'];
			echo "</li>";
			echo  "<li class='list-group-item'><b>Guardian's name&nbsp;&nbsp;&nbsp&nbsp;&nbsp;:&nbsp;&nbsp;&nbsp&nbsp;&nbsp; </b>".$row['guardian_name'];
			echo "</li>";
			echo  "<li class='list-group-item'><b>Father's contact number&nbsp;&nbsp;&nbsp&nbsp;&nbsp;:&nbsp;&nbsp;&nbsp&nbsp;&nbsp; </b>".$row['father_contact_number'];
			echo "</li>";
			echo  "<li class='list-group-item'><b>Mother's contact number&nbsp;&nbsp;&nbsp&nbsp;&nbsp;:&nbsp;&nbsp;&nbsp&nbsp;&nbsp; </b>".$row['mother_contact_number'];
			echo "</li>";
			echo  "<li class='list-group-item'><b>Guardian's contact number&nbsp;&nbsp;&nbsp&nbsp;&nbsp;:&nbsp;&nbsp;&nbsp&nbsp;&nbsp; </b>".$row['guardian_contact_number'];
			echo "</li>";
			echo  "<li class='list-group-item'><b>Father's Occupation&nbsp;&nbsp;&nbsp&nbsp;&nbsp;:&nbsp;&nbsp;&nbsp&nbsp;&nbsp; </b>".$row['father_occupation'];
			echo "</li>";
			echo  "<li class='list-group-item'><b>Mother's Occupation&nbsp;&nbsp;&nbsp&nbsp;&nbsp;:&nbsp;&nbsp;&nbsp&nbsp;&nbsp; </b>".$row['mother_occupation'];
			echo "</li>";
			echo  "<li class='list-group-item'><b>Guardian's Occupation&nbsp;&nbsp;&nbsp&nbsp;&nbsp;:&nbsp;&nbsp;&nbsp&nbsp;&nbsp; </b>".$row['guardian_occupation'];
			echo "</li>";
			//echo  ""$row['family_income'];
			echo "</ul></div></div>";
			
		
		}
	} //////////////////



		if($watchingType[0]=="Recent Graduate"){

			$result1 = mysqli_query($connect,"SELECT * FROM recentgraduate where national_id_number='$watcher'")or die("");
			
			echo "<div class='panel panel-primary'>";
			echo "<div class = 'panel-heading'><h3 class='panel-title'>Personal Information</h3>";
			echo "</div>";
			echo "<div class='panel-body'>";
			echo "<ul class='list-group'>";
			
			while($row = mysqli_fetch_array($result1)) {
 
			echo "<b><li class='list-group-item'>Name&nbsp;&nbsp;&nbsp&nbsp;&nbsp;:&nbsp;&nbsp;&nbsp&nbsp;&nbsp; </b>". $row['name_with_initials'];
			echo "</li>";
			echo "<li class='list-group-item'><b>Academic year&nbsp;&nbsp;&nbsp&nbsp;&nbsp;:&nbsp;&nbsp;&nbsp&nbsp;&nbsp; </b>". $row['academic_year'];
			echo "</li>";
			echo "<li class='list-group-item'><b>Degree&nbsp;&nbsp;&nbsp&nbsp;&nbsp;:&nbsp;&nbsp;&nbsp&nbsp;&nbsp; </b>". $row['degree'];
			echo "</li>";
			echo "</ul></div></div>";
			echo "<div class='panel panel-primary'>";
			echo "<div class = 'panel-heading'><h3 class='panel-title'>Contact Information</h3>";
			echo "</div>";
			echo "<div class='panel-body'>";
			echo "<ul class='list-group'>";
			echo "<li class='list-group-item'><b>Contact office number&nbsp;&nbsp;&nbsp&nbsp;&nbsp;:&nbsp;&nbsp;&nbsp&nbsp;&nbsp; </b>". $row['contact_number_office'];
			echo "</li>";
			echo  "<li class='list-group-item'><b>Contact mobile number&nbsp;&nbsp;&nbsp&nbsp;&nbsp;:&nbsp;&nbsp;&nbsp&nbsp;&nbsp; </b>".$row['contact_number_mobile'];
			echo "</li>";
			echo "<li class='list-group-item'><b>Email address&nbsp;&nbsp;&nbsp&nbsp;&nbsp;:&nbsp;&nbsp;&nbsp&nbsp;&nbsp; </b>". $row['email_address'];
			echo "</li>";
			echo "</ul></div></div>";
			echo "<div class='panel panel-primary'>";
			echo "<div class = 'panel-heading'><h3 class='panel-title'>Internship Information</h3>";
			echo "</div>";
			echo "<div class='panel-body'>";
			echo "<ul class='list-group'>";
			echo  "<li class='list-group-item'><b>Internship title&nbsp;&nbsp;&nbsp&nbsp;&nbsp;:&nbsp;&nbsp;&nbsp&nbsp;&nbsp; </b>".$row['internship_title'];
			echo "</li>";
			echo  "<li class='list-group-item'><b>Internship description&nbsp;&nbsp;&nbsp&nbsp;&nbsp;:&nbsp;&nbsp;&nbsp&nbsp;&nbsp; </b>".$row['internship_description'];
			echo "</li>";
			echo  "<li class='list-group-item'><b>Internship Organization&nbsp;&nbsp;&nbsp&nbsp;&nbsp;:&nbsp;&nbsp;&nbsp&nbsp;&nbsp; </b>".$row['organization'];
			echo "</li>";
			echo  "<li class='list-group-item'><b>Internship Organization website&nbsp;&nbsp;&nbsp&nbsp;&nbsp;:&nbsp;&nbsp;&nbsp&nbsp;&nbsp; </b>".$row['organization_website'];
			echo "</li>";
			echo "</ul></div></div>";
			echo "<div class='panel panel-primary'>";
			echo "<div class = 'panel-heading'><h3 class='panel-title'>Current Job Information</h3>";
			echo "</div>";
			echo "<div class='panel-body'>";
			echo "<ul class='list-group'>";
			echo "<li class='list-group-item'><b>Current Job title&nbsp;&nbsp;&nbsp&nbsp;&nbsp;:&nbsp;&nbsp;&nbsp&nbsp;&nbsp; </b>". $row['job_title'];
			echo "</li>";
			echo  "<li class='list-group-item'><b>Current Job description&nbsp;&nbsp;&nbsp&nbsp;&nbsp;: &nbsp;&nbsp;&nbsp&nbsp;&nbsp;</b>".$row['job_description'];
			echo "</li>";
		    echo  "<li class='list-group-item'><b>Current organization&nbsp;&nbsp;&nbsp&nbsp;&nbsp;:&nbsp;&nbsp;&nbsp&nbsp;&nbsp; </b>".$row['current_organization'];
			echo "</li>";
			echo  "<li class='list-group-item'><b>Current organization website&nbsp;&nbsp;&nbsp&nbsp;&nbsp;:&nbsp;&nbsp;&nbsp&nbsp;&nbsp; </b>".$row['current_organization_website'];
			echo "</li>";
			echo "</ul></div></div>";
           }
		



}////


		if($watchingType[0]=="Student Counselor"){

			$result1 = mysqli_query($connect,"SELECT * FROM studentcounselor where national_id_number='$watcher'") or die("");
			
			
			
			while($row = mysqli_fetch_array($result1)) {
 
			echo "<div class='panel panel-primary'>";
			echo "<div class = 'panel-heading'><h3 class='panel-title'>Current Job Information</h3>";
			echo "</div>";
			echo "<div class='panel-body'>";
			echo "<ul class='list-group'>";
 
			echo "<li class='list-group-item'><b>Name: </b>". $row['title'];
			echo " ";
			echo  $row['name_with_initials'];
			echo "</li>";
			echo  "<li class='list-group-item'><b>Designation: </b>".$row['designation'];
			echo "</li>";
			echo  "<li class='list-group-item'><b>Contact number of office: </b>".$row['contact_number_office'];
			echo "</li>";
			echo  "<li class='list-group-item'><b>Contact number of mobile: </b>". $row['contact_number_mobile'];
			echo "</li>";
			echo  "<li class='list-group-item'><b>Email address: </b>". $row['email_address'];
			echo "</li>";
			echo "</ul></div></div>";
			
			echo "<div class='panel panel-primary'>";
			echo "<div class = 'panel-heading'><h3 class='panel-title'>Academic Qualifications</h3>";
			echo "</div>";
			echo "<div class='panel-body'>";
			echo "<ul class='list-group'>";
			
			echo "<li class='list-group-item'><b>Academic Qualifications: </b>";
			echo "<br/>";
			echo  "<li class='list-group-item'><b>1: </b>". $row['academic_qualification_1'];
			echo " ";
			echo  $row['University_1'];
			echo "</li>";
			echo  "<li class='list-group-item'><b>2: </b>".$row['academic_qualification_2'];
			echo " ";
			echo  $row['University_2'];
			echo "</li>";
			echo  "<li class='list-group-item'><b>3: </b>".$row['academic_qualification_3'];
			echo " ";
			echo  $row['University_3'];
			echo "</li>";
			echo "</ul></div></div>";
			
			echo "<div class='panel panel-primary'>";
			echo "<div class = 'panel-heading'><h3 class='panel-title'>Professional Qualifications</h3>";
			echo "</div>";
			echo "<div class='panel-body'>";
			echo "<ul class='list-group'>";
			
			echo "<b>Professional Qualifications</b>";
			echo "<br/>";
			echo  "<li class='list-group-item'><b>1: </b>".$row['professional_qualification_1'];
			echo " ";
			echo  $row['institute_1'];
			echo "</li>";
			echo  "<li class='list-group-item'><b>2: </b>".$row['professional_qualification_2'];
			echo " ";
			echo  $row['institute_2'];
			echo "</li>";
			echo  "<li class='list-group-item'><b>3: </b>".$row['professional_qualification_3'];
			echo " ";
			echo  $row['institute_3'];
			echo "</li>";
			echo "</ul></div></div>";
			
			echo "<div class='panel panel-primary'>";
			echo "<div class = 'panel-heading'><h3 class='panel-title'>Professional Qualifications</h3>";
			echo "</div>";
			echo "<div class='panel-body'>";
			echo "<ul class='list-group'>";
			
			echo "<li class='list-group-item'><b>Research Conducted</b>";
			echo "</li>";
			echo  "<li class='list-group-item'><b>1: </b>".$row['reserch_conducted_1'];
			echo "</li>";
			echo  "<li class='list-group-item'><b>2: </b>".$row['reserch_conducted_2'];
			echo "</li>";
			echo  "<li class='list-group-item'><b>3: </b>".$row['reserch_conducted_3'];
			echo "</li>";
			echo  "<li class='list-group-item'><b>4: </b>".$row['reserch_conducted_4'];
			echo "</li>";
			echo "</ul></div></div>";
			
			echo "<div class='panel panel-primary'>";
			echo "<div class = 'panel-heading'><h3 class='panel-title'>Professional Qualifications</h3>";
			echo "</div>";
			echo "<div class='panel-body'>";
			echo "<ul class='list-group'>";
			
			echo "<li class='list-group-item'><b> research interests</b>";
			echo "</li>";
			echo  "<li class='list-group-item'><b>1: </b>".$row['reserch_interest_1'];
			echo "</li>";
			echo  "<li class='list-group-item'><b>2: </b>".$row['reserch_interest_2'];
			echo "</li>";
			echo  "<li class='list-group-item'><b>3: </b>".$row['reserch_interest_3'];
			echo "</li>";
			echo  "<li class='list-group-item'><b>4: </b>".$row['reserch_interest_4'];
			echo "</li>";
			echo  "<li class='list-group-item'><b>5: </b>".$row['reserch_interest_5'];
			echo "</li>";
			echo "</ul></div></div>";
			
			echo "<div class='panel panel-primary'>";
			echo "<div class = 'panel-heading'><h3 class='panel-title'>Professional Qualifications</h3>";
			echo "</div>";
			echo "<div class='panel-body'>";
			echo "<ul class='list-group'>";
			
			echo " <li class='list-group-item'><b>Working Places</b>";
			echo "</li>";
			echo  "<li class='list-group-item'><b>1: </b>".$row['working_place_1'];
			echo " ";
			echo  $row['designation_1'];
			echo "</li>";
			echo  "<li class='list-group-item'><b>2: </b>".$row['working_place_2'];
			echo " ";
			echo  $row['designation_2'];
			echo "</li>";
			echo  "<li class='list-group-item'><b>3: </b>".$row['working_place_3'];
			echo " ";
			echo  $row['designation_3'];
			echo "</li>";
			echo "<li class='list-group-item'><b>Subject Code: </b>". $row['subject_code'];
			echo "</li>";
			
			echo "</ul></div></div>";
		} 
	




	}///////


		if($watchingType[0]=="Lecturer"){

			$result1 = mysqli_query($connect,"SELECT * FROM lecturer where national_id_number='$watcher'") or die("");
		
			while($row = mysqli_fetch_array($result1)) {
				
			echo "<div class='panel panel-primary'>";
			echo "<div class = 'panel-heading'><h3 class='panel-title'>Personal Information</h3>";
			echo "</div>";
			echo "<div class='panel-body'>";
			echo "<ul class='list-group'>";
			
			echo "<li class='list-group-item'><b>Name: </b>". $row['title'];
			echo " ";
			echo  $row['name_with_initials'];
			echo "</li>";
			echo  "<li class='list-group-item'><b>Designation: </b>".$row['designation'];
			echo "</li>";
			echo "</ul></div></div>";
			
			echo "<div class='panel panel-primary'>";
			echo "<div class = 'panel-heading'><h3 class='panel-title'>Contact Information</h3>";
			echo "</div>";
			echo "<div class='panel-body'>";
			echo "<ul class='list-group'>";
			
			echo  "<li class='list-group-item'><b>Contact number : </b> office: ".$row['contact_number_office'];
			echo "<br/>";
			echo  " mobile: ". $row['contact_number_mobile'];
			echo "<br/>";
			echo  "<li class='list-group-item'><b>Email address: </b>". $row['email_address'];
			echo "</li>";
			echo "</ul></div></div>";
			
			echo "<div class='panel panel-primary'>";
			echo "<div class = 'panel-heading'><h3 class='panel-title'>Academic Qualifications</h3>";
			echo "</div>";
			echo "<div class='panel-body'>";
			echo "<ul class='list-group'>";
			
			echo "<li class='list-group-item'><b>Academic Qualifications: </b>";
			echo "</li>";
			echo  "<li class='list-group-item'><b>1: </b>". $row['academic_qualification_1'];
			echo " ";
			echo  $row['University_1'];
			echo "<br/>";
			echo  "<li class='list-group-item'><b>2: </b>". $row['academic_qualification_2'];
			echo " ";
			echo  $row['University_2'];
			echo "<br/>";
			echo  "<li class='list-group-item'><b>3: </b>". $row['academic_qualification_3'];
			echo " ";
			echo  $row['University_3'];
			echo "</li>";
			echo "<br/>";
			echo "</ul></div></div>";
			
			echo "<div class='panel panel-primary'>";
			echo "<div class = 'panel-heading'><h3 class='panel-title'>Professional Qualifications</h3>";
			echo "</div>";
			echo "<div class='panel-body'>";
			echo "<ul class='list-group'>";
			echo "<li class='list-group-item'><b>Professional Qualifications</b>";
			echo "<br/>";
			echo  "<li class='list-group-item'><b>1: </b>". $row['professional_qualification_1'];
			echo " ";
			echo  $row['institute_1'];
			echo "</li>";
			echo  "<li class='list-group-item'><b>2: </b>". $row['professional_qualification_2'];
			echo " ";
			echo  $row['institute_2'];
			echo "</li>";
			echo  "<li class='list-group-item'><b>3: </b>". $row['professional_qualification_3'];
			echo " ";
			echo  $row['institute_3'];
			echo "</li>";
			echo "<br/>";
			echo "</ul></div></div>";
			echo "<div class='panel panel-primary'>";
			echo "<div class = 'panel-heading'><h3 class='panel-title'>Researches Conducted</h3>";
			echo "</div>";
			echo "<div class='panel-body'>";
			echo "<ul class='list-group'>";
			
			echo "<b>Research Conducted</b>";
			echo "<br/>";
			echo  "<li class='list-group-item'><b>1: </b>". $row['reserch_conducted_1'];
			echo "</li>";
			echo  "<li class='list-group-item'><b>2: </b>". $row['reserch_conducted_2'];
			echo "</li>";
			echo  "<li class='list-group-item'><b>3: </b>". $row['reserch_conducted_3'];
			echo "</li>";
			echo  "<li class='list-group-item'><b>4: </b>". $row['reserch_conducted_4'];
			echo "</li>";
			echo "<br/>";
			echo "</ul></div></div>";
			echo "<div class='panel panel-primary'>";
			echo "<div class = 'panel-heading'><h3 class='panel-title'>Research Interests</h3>";
			echo "</div>";
			echo "<div class='panel-body'>";
			echo "<ul class='list-group'>";
			
			echo "<b>Research Interests</b>";
			echo "<br/>";
			echo  "<li class='list-group-item'><b>1: </b>". $row['reserch_interest_1'];
			echo "</li>";
			echo  "<li class='list-group-item'><b>2: </b>". $row['reserch_interest_2'];
			echo "</li>";
			echo  "<li class='list-group-item'><b>3: </b>". $row['reserch_interest_3'];
			echo "</li>";
			echo  "<li class='list-group-item'><b>4: </b>". $row['reserch_interest_4'];
			echo "</li>";
			echo  "<li class='list-group-item'><b>5: </b>". $row['reserch_interest_5'];
			echo "</li>";
			echo "<br/>";
			echo "</ul></div></div>";
			echo "<div class='panel panel-primary'>";
			echo "<div class = 'panel-heading'><h3 class='panel-title'>Working Places</h3>";
			echo "</div>";
			echo "<div class='panel-body'>";
			echo "<ul class='list-group'>";
			
			echo "<li class='list-group-item'><b> Working Places</b>";
			echo "</li>";
			echo  "<li class='list-group-item'><b>1: </b>". $row['working_place_1'];
			echo " ";
			echo  $row['designation_1'];
			echo "</li>";
			echo  "<li class='list-group-item'><b>2: </b>". $row['working_place_2'];
			echo " ";
			echo  $row['designation_2'];
			echo "</li>";
			echo  "<li class='list-group-item'><b>3: </b>". $row['working_place_3'];
			echo " ";
			echo  $row['designation_3'];
			echo "</li>";
			echo "<br/>";
			echo "</ul></div></div>";
			echo "<div class='panel panel-primary'>";
			echo "<div class = 'panel-heading'><h3 class='panel-title'>Subject Codes</h3>";
			echo "</div>";
			echo "<div class='panel-body'>";
			echo "<ul class='list-group'>";
			
			echo "<li class='list-group-item'><b>Subject Code: </b>". $row['subject_code'];
			echo "</li>";
			echo "</ul></div></div>";
		} 
	




	}///////



		if($watchingType[0]=="Employer"){

			$result1 = mysqli_query($connect,"SELECT * FROM employer where national_id_number='$watcher'")or die("");
		
			while($row = mysqli_fetch_array($result1)) {
				
			echo "<div class='panel panel-primary'>";
			echo "<div class = 'panel-heading'><h3 class='panel-title'>Organizational Information</h3>";
			echo "</div>";
			echo "<div class='panel-body'>";
			echo "<ul class='list-group'>";
 
			echo  "<li class='list-group-item'><b>Name: </b>".$row['name'];
			echo "</li>";
			echo "<br/>";
			echo  "<li class='list-group-item'><b>Company name: </b>".$row['company_name'];
			echo "</li>";
			echo  "<li class='list-group-item'><b>Company address: </b>".$row['company_address'];
			echo "</li>";
			echo  "<li class='list-group-item'><b>Contact number: </b>".$row['contact_number'];
			echo "</li>";
			echo  "<li class='list-group-item'><b>Company email address: </b>".$row['company_email_address'];
			echo "</li>";
			echo  "<li class='list-group-item'><b>Company wabsite: </b>".$row['company_website'];
			echo "</li>";
			echo  "<li class='list-group-item'><b>About company: </b>".$row['about_company'];
			echo "</li>";
			echo "</ul></div></div>";
			
			echo "<div class='panel panel-primary'>";
			echo "<div class = 'panel-heading'><h3 class='panel-title'>Contact Information</h3>";
			echo "</div>";
			echo "<div class='panel-body'>";
			echo "<ul class='list-group'>";
			
			echo  "<li class='list-group-item'><b>Designation: </b>".$row['designation'];
			echo "</li>";
			echo  "<li class='list-group-item'><b>Contact person name: </b>".$row['contact_person_name'];
			echo "</li>";
			echo  "<li class='list-group-item'><b>Contact email address: </b>".$row['contact_email_address'];
			echo "</li>";
			echo  "<li class='list-group-item'><b>Contact Number: </b>".$row['contact_person_number'];
			echo "</li>";
			echo "</ul></div></div>";
		} 




	} /////



}

viewAnotherProfile();

echo "</div>";






	
?>
	
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
    <script src="../js/jquery-1.11.0.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="../js/bootstrap.min.js"></script>

    <!-- Script to Activate the Carousel -->
    <script>
    $('.carousel').carousel({
        interval: 5000 //changes the speed
    })
    </script>

</body>

</html>
