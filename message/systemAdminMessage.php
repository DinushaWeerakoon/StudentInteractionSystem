<?php
	//echo "<h1>System Admin ta Message</h1>";
	// bla bla bla details of the system admin
	setcookie("receiverType","SystemAdmin");
	/*echo "<form action='messageAction.php' method='post'>";
	echo "<button name='receiver' type= 'submit' value = 'admin'>Contact System Admin</button>";
	echo "</form>";*/

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
                                echo "<li><a href='lecturerMessage.php'>Lecturer</a></li>";
                                echo "<li><a href='studentCounselorMessage.php'>Student Counsellor</a></li>";
                                echo "<li><a href='recentGraduateMessage.php'>Recent Graduate</a></li>";
                                echo "<li><a href='employeeMessage.php'>Employee</a></li>";
                                echo "<li><a href='systemAdminMessage.php'>System Administraror</a></li>";   
                            }
                            
                            else if($type=="Administrator"){
								echo "<li><a href='../message/lecturerMessage.php'>Lecturer</a></li>";								
								echo "<li><a href='../message/recentGraduateMessage.php'>Recent Graduate</a></li>";
								echo "<li><a href='../message/underGraduateMessage.php'>Undergraduate</a></li>";
                                echo "<li><a href='../message/employeeMessage.php'>Employee</a></li>";
                                echo "<li><a href='../message/studentCounselorMessage.php'>Student Counsellor</a></li>";
							}
                            else if($type == "Lecturer"){                                                           
                                echo "<li><a href='lecturerMessage.php'>Lecturer</a></li>";                              
                                echo "<li><a href='recentGraduateMessage.php'>Recent Graduate</a></li>";
                                echo "<li><a href='underGraduateMessage.php'>Undergraduate</a></li>";
                                echo "<li><a href='employeeMessage.php'>Employee</a></li>";
                                echo "<li><a href='studentCounselorMessage.php'>Student Counsellor</a></li>";                              
                                echo "<li><a href='systemAdminMessage.php'>System Administrator</a></li>";
                            }
    
                            else if ($type == "Student Counselor"){ // think it
                                echo "<li><a href='lecturerMessage.php'>Lecturer</a></li>"; 
                                echo "<li><a href='recentGraduateMessage.php'>Recent Graduate</a></li>";
                                echo "<li><a href='underGraduateMessage.php'>Undergraduate</a></li>";
                                echo "<li><a href='employeeMessage.php'>Employee</a></li>";
                                echo "<li><a href='studentCounselorMessage.php'>Student Counsellor</a></li>";
                                echo "<li><a href='systemAdminMessage.php'>System Administrator</a></li>";
                            }
    
                            else if ($type == "Recent Graduate"){
                                echo "<li><a href='underGraduateMessage.php'>Undergraduate</a></li>";
                                echo "<li><a href='lecturerMessage.php'>Lecturer</a></li>";
                                echo "<li><a href='recentGraduateMessage.php'>Recent Graduate</a></li>"; 
                                echo "<li><a href='employeeMessage.php'>Employee</a></li>";
                                echo "<li><a href='studentCounselorMessage.php'>Student Counsellor</a></li>";                            
                                echo "<li><a href='systemAdminMessage.php'>System Administrator</a></li>";
                            }
    
                            else if($type == "Employer"){
                                echo "<li><a href='lecturerMessage.php'>Lecturer</a></li>";
                                echo "<li><a href='underGraduateMessage.php'>Undergraduate</a></li>";
                                echo "<li><a href='studentCounselorMessage.php'>Student Counsellor</a></li>";
                                echo "<li><a href='recentGraduateMessage.php'>Recent Graduate</a></li>";
                                echo "<li><a href='systemAdminMessage.php'>System Administrator</a></li>";
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
				<?php
					//setcookie("receiverType","SystemAdmin");
					echo "<form action='messageAction.php' method='post'>";
					echo "<button class='btn btn-primary' name='receiver' type= 'submit' value = 'admin'>Contact System Admin</button>";
					echo "</form>";
				?>
				
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
