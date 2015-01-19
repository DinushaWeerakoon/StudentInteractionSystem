<!DOCTYPE html>
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

    <title>Find</title>

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

    <!-- Page Content -->
    <div class="container">

        <!-- Page Heading/Breadcrumbs -->
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">Find and Contact 
                </h1>
                <ol class="breadcrumb">
                    <li><a href="page.php">Home</a>
                    </li>
                    <li class="active">Find</li>
                </ol>
            </div>
        </div>
        <!-- /.row -->

        <!-- Image Header -->
        
        <!-- /.row -->

        <!-- Service Panels -->
        <!-- The circle icons use Font Awesome's stacked icon classes. For more information, visit http://fontawesome.io/examples/ -->
        <div class="row">
            
            <div class="col-md-3 col-sm-6">
                <div class="panel panel-default text-center">
                    <div class="panel-heading">
                        <span class="fa-stack fa-5x">
                              <i class="fa fa-circle fa-stack-2x text-primary"></i>
                              <i class="fa fa-user fa-stack-1x fa-inverse"></i>
                        </span>
                    </div>
                    <div class="panel-body">
                        <h4>Lecturer</h4>
                        <p>Contact a lecturer/instructor of University of Colombo School of Computing.</p>
                        <a href="../view/LecturerView.php" class="btn btn-primary">Search</a>
                    </div>
                </div>
            </div>
            <div class="col-md-3 col-sm-6">
                <div class="panel panel-default text-center">
                    <div class="panel-heading">
                        <span class="fa-stack fa-5x">
                              <i class="fa fa-circle fa-stack-2x text-primary"></i>
                              <i class="fa fa-user fa-stack-1x fa-inverse"></i>
                        </span>
                    </div>
                    <div class="panel-body">
                        <h4>Student Councelor</h4>
                        <p>Contact a student counselor of University of Colombo School of Computing</p>
                        <a href="../view/StudentCounselorView.php" class="btn btn-primary">Search</a>
                    </div>
                </div>
            </div>
            <div class="col-md-3 col-sm-6">
                <div class="panel panel-default text-center">
                    <div class="panel-heading">
                        <span class="fa-stack fa-5x">
                              <i class="fa fa-circle fa-stack-2x text-primary"></i>
                              <i class="fa fa-user fa-stack-1x fa-inverse"></i>
                        </span>
                    </div>
                    <div class="panel-body">
                        <h4>Recent Graduates</h4>
                        <p>Find the recent graduates of University of Colombo School of Computing here.</p>
                        <a href="../view/RecentGraduateView.php" class="btn btn-primary">Search</a>
                    </div>
                </div>
            </div>
			
			<div class="col-md-3 col-sm-6">
                <div class="panel panel-default text-center">
                    <div class="panel-heading">
                        <span class="fa-stack fa-5x">
                              <i class="fa fa-circle fa-stack-2x text-primary"></i>
                              <i class="fa fa-user fa-stack-1x fa-inverse"></i>
                        </span>
                    </div>
                    <div class="panel-body">
                        <h4>Undergraduates</h4>
                        <p>Find the undergraduates of University of Colombo School of Computing here.</p>
                        <a href="../view/underGraduateView.php" class="btn btn-primary">Search</a>
                    </div>
                </div>
            </div>
            <div class="col-md-3 col-sm-6">
                <div class="panel panel-default text-center">
                    <div class="panel-heading">
                        <span class="fa-stack fa-5x">
                              <i class="fa fa-circle fa-stack-2x text-primary"></i>
                              <i class="fa fa-usd fa-stack-1x fa-inverse"></i>
                        </span>
                    </div>
                    <div class="panel-body">
                        <h4>Employer</h4>
                        <p>Contact the organizations partnered with University of Colombo School of Computing.</p>
                        <a href="../view/EmployeeView.php" class="btn btn-primary">Search</a>
                    </div>
                </div>
            </div>
        </div>

        <!-- Service Tabs -->
        

        <!-- Service List -->
        <!-- The circle icons use Font Awesome's stacked icon classes. For more information, visit http://fontawesome.io/examples/ -->
        
        <!-- /.row -->

        <hr>

        <!-- Footer -->
        <footer>
            <div class="row">
                <div class="col-lg-12">
                    <p>Copyright &copy; University of Colombo School of Computing</p>
                </div>
            </div>
        </footer>

    </div>
    <!-- /.container -->

    <!-- jQuery Version 1.11.0 -->
    <script src="../js/jquery-1.11.0.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="../js/bootstrap.min.js"></script>

</body>

</html>
