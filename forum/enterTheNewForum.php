
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title> Forum</title>

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
	<script>
		function validateform(){
			if(document.forum.subject.value==''){
				window.alert("Enter the Subject");
				return false;
			}
			return true;
		}
	</script>

   

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
                <a class="navbar-brand" href="../pages/page.php">Student Interaction System</a>
            </div>
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
         <ul class="nav navbar-nav navbar-right">
                    <li>
                        <a href="../pages/page.php">Home</a>
                    </li>
                    <li>
                        <a href="../pages/Find.php">People</a>
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
                            if($type == "Undergraduate"){
                                echo "<li><a href='../message/lecturerMessage.php'>Lecturer</a></li>";
                                echo "<li><a href='../message/studentCounselorMessage.php'>Student Counsellor</a></li>";
                                echo "<li><a href='../message/recentGraduateMessage.php'>Recent Graduate</a></li>";
                                echo "<li><a href='../message/employeeMessage.php'>Employee</a></li>";
                                echo "<li><a href='../message/systemAdminMessage.php'>System Administraror</a></li>";   
                            }
                            
                            else if($type=="Administrator"){
                                header("Location:Administrator.php");
                            }
                            else if($type == "Lecturer"){                                                           
                                echo "<li><a href='../message/lecturerMessage.php'>Lecturer</a></li>";                              
                                echo "<li><a href='../message/recentGraduateMessage.php'>Recent Graduate</a></li>";
                                echo "<li><a href='../message/underGraduateMessage.php'>Undergraduate</a></li>";
                                echo "<li><a href='../message/employeeMessage.php'>Employee</a></li>";
                                echo "<li><a href='../message/studentCounselorMessage.php'>Student Counsellor</a></li>";                              
                                echo "<li><a href='../message/systemAdminMessage.php'>System Administrator</a></li>";
                            }
    
                            else if ($type == "Student Counselor"){ // think it
                                echo "<li><a href='../message/lecturerMessage.php'>Lecturer</a></li>"; 
                                echo "<li><a href='../message/recentGraduateMessage.php'>Recent Graduate</a></li>";
                                echo "<li><a href='../message/underGraduateMessage.php'>Undergraduate</a></li>";
                                echo "<li><a href='../message/employeeMessage.php'>Employee</a></li>";
                                echo "<li><a href='../message/studentCounselorMessage.php'>Student Counsellor</a></li>";
                                echo "<li><a href='../message/systemAdminMessage.php'>System Administrator</a></li>";
                            }
    
                            else if ($type == "Recent Graduate"){
                                echo "<li><a href='../message/underGraduateMessage.php'>Undergraduate</a></li>";
                                echo "<li><a href='../message/lecturerMessage.php'>Lecturer</a></li>";
                                echo "<li><a href='../message/recentGraduateMessage.php'>Recent Graduate</a></li>"; 
                                echo "<li><a href='../message/employeeMessage.php'>Employee</a></li>";
                                echo "<li><a href='../message/studentCounselorMessage.php'>Student Counsellor</a></li>";                            
                                echo "<li><a href='../message/systemAdminMessage.php'>System Administrator</a></li>";
                            }
    
                            else if($type == "Employer"){
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
                        <a href="../pages/search.php">Search</a>
                    </li>

                    <li>
                        <a href="../pages/about.html">About Us</a>
                    </li>
                   
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">+You<b class="caret"></b></a>
                        <ul class="dropdown-menu">
                            <li>
                                <a href="../pages/viewprofile.php">Profile</a>
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
	<div class="container">
			<form name="forum" method="post" action="newForum.php">
		<h3>New Subject</h3>
		<input  type="text" size="100" name="subject" value="">
		<input  type="submit" value="Enter the New Topic" onclick="return validateform();">
	</form>
	<div>
	
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


