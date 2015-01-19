<?php
	require_once("../Database/database.php");
	$userName = $_COOKIE["userName"];
	$sql = "SELECT COUNT(read_no) FROM message WHERE read_no=1 AND receiver = '$userName'";
	$result = mysqli_query($connect,$sql);
	$r = mysqli_fetch_row($result);
	$type = $_COOKIE["userType"];
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
                        <a href="search.php">Search</a>
                    </li>

                    <li>
                        <a href="about.html">About Us</a>
                    </li>
                   
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">+You<b class="caret"></b></a>
                        <ul class="dropdown-menu">
                            <li>
                                <a href="viewprofile.php">Profile</a>
                            </li>
							<li role="presentation" class="divider"></li>
							<li>
                                <a href="changepasswordform.php">Change Password</a>
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
                        if($r[0] == '0'){
                            echo "<div class='alert alert-info alert-dismissible' role='alert'><button type='button' class='close' data-dismiss='alert'><span aria-hidden='true'>&times;</span><span class='sr-only'>Close</span></button>You have no new messages</div>";
                        }
                        else{
                            echo "<div class='alert alert-info alert-dismissible' role='alert'><button type='button' class='close' data-dismiss='alert'><span aria-hidden='true'>&times;</span><span class='sr-only'>Close</span></button>You Have <a href='../function_pages/viewMessages.php' class='alert-link'>
                            <strong><font color='red'>$r[0]</font></strong></a> new messages. Go to <a href='../function_pages/viewMessages.php' class='alert-link'> Messages</a></div>";
                        }
                    ?>

    <!-- Header Carousel -->
    <header id="myCarousel" class="carousel slide">
        <!-- Indicators -->
        <ol class="carousel-indicators">
            <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
            <li data-target="#myCarousel" data-slide-to="1"></li>
            <li data-target="#myCarousel" data-slide-to="2"></li>
        </ol>

        <!-- Wrapper for slides -->
        <div class="carousel-inner">
            <div class="item active">
                <div class="fill" style="background-image:url('../images/slide1.jpg');"></div>
                <div class="carousel-caption">
                    <h2>Champion Hockey Team</h2>
                </div>
            </div>
            <div class="item">
                <div class="fill" style="background-image:url('../images/slide2.jpg');"></div>
                <div class="carousel-caption">
                    <h2>Microsoft Imagine Cup National Champions</h2>
                </div>
            </div>
            <div class="item">
                <div class="fill" style="background-image:url('../images/slide3.jpg');"></div>
                <div class="carousel-caption">
                    <h2>CIMA GBC World Champions</h2>
                </div>
            </div>
        </div>

        <!-- Controls -->
        <a class="left carousel-control" href="#myCarousel" data-slide="prev">
            <span class="icon-prev"></span>
        </a>
        <a class="right carousel-control" href="#myCarousel" data-slide="next">
            <span class="icon-next"></span>
        </a>
    </header>


    <!-- Page Content -->
    <div class="container">

        <!-- Marketing Icons Section -->
        <div class="row">
            <div class="col-lg-12">
                <h3 class="page-header">
                    Welcome to University of Colombo School of Computing Student Interaction System
                </h3>
            </div>
            <div class="col-md-4">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h4><span class="glyphicon glyphicon-certificate"></span> Student Achievements</h4>
                    </div>
                    <div class="panel-body">
                        <p>This Student Interaction System provides the platform to showcase and publish the student achievements in extra-curricular activities to the public with the intention of 
                        motivating the UCSC undergraduates to compete in the national and international level competitions and to gain them the recognition from the externals.You can also find the competition results and the awards won and the recognition gained by the UCSC students vy partcipating in those competitions.</p>
                        <a href="#" class="btn btn-primary">Read More >></a>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h4><span class="glyphicon glyphicon-envelope"></span> Communication Platform</h4>
                    </div>
                    <div class="panel-body">
                        <p>The students are provided with the platfrom to communicate with the lecturers and recent graduates of the UCSC and they are rpovided with the details of the organization details of the copanies which they will be getting their internships during their third academic year. The recent graduates are encouraged to assist the udergradutes in the academics and non-academics through their expertise and the experience in their respective fields. </p>
                        <a href="#" class="btn btn-primary">Read More >></a>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h4><span class="glyphicon glyphicon-globe"></span> Student Based Publications</h4>
                    </div>
                    <div class="panel-body">
                        <p>Undergraduates are given with the oportunity to publush their notices and announcements regarding the extra curricular activities, sports activities, local and international competitions and they are encouraged to share the knowledge with other undergraduates of UCSC. Recent Graduates and the lecturers are also provided with the opportunity to introduce the undergraduates with the competions and the opportunities they can compete and the sports events that are happening currently.</p>
                        <a href="#" class="btn btn-primary">Read More >></a>
                    </div>
                </div>
            </div>
        </div>
        <!-- /.row -->

        <!-- Portfolio Section -->

        <!-- Features Section -->

        <!-- /.row -->

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
