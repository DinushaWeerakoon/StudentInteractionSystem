<?php
	
	//view messages
	// receiver type , post receiver 
	require_once("../Database/database.php");
	$user = $_COOKIE["userName"];
	//echo $user;
	$query = mysqli_query($connect,"SELECT sender FROM message WHERE receiver = '$user' AND read_no = 1") or die("sorry");
	
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
                        <a href="../pages/Find.php">Find</a>
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
                        <a href="../pages/about.html">About Us</a>
                    </li>
                    <li>
                        <a href="../pages/search.php">Search</a>
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
					//echo "view messages<br>";
					echo "<table>";
					while($row = mysqli_fetch_row($query)){
					$senderId = $row[0];
					$query2 = mysqli_query($connect,"SELECT usertype FROM profile WHERE username='$senderId'")or die(mysqli_error($connect));
					$row2 = mysqli_fetch_row($query2);
					$receiverType = $row2[0];
					//echo $receiverType;
					if($receiverType == "Administrator"){
						$receiverName = "System Administrator";
						@setcookie('receiverType','Administrator');
						echo "<tr><td>$receiverName</td><td><form method='post' action='../message/messageAction.php'><button class='btn btn-default' name='receiver' value=$senderId>Reply</button></form></td></tr>";
					}
					else if($receiverType == "Lecturer"){
						$out = mysqli_query($connect,"SELECT name_with_initials FROM lecturer WHERE national_id_number= '$senderId'")or die(mysqli_error($connect)) ;
						$out2 =  mysqli_fetch_row($out);
						$receiverName = $out2[0];
						@setcookie("receiverType","Lecturer");
						echo "<tr><td>$receiverName</td><td><form method='post' action='../message/messageAction.php'><button class='btn btn-default' name='receiver' value=$senderId>Reply</button></form></td></tr>";
					}
		
					else if($receiverType =="Student Counselor"){
						$out = mysqli_query($connect,"SELECT name_with_initials FROM lecturer WHERE national_id_number= '$senderId'")or die(mysqli_error($connect)) ;
						$out2 =  mysqli_fetch_row($out);
						$receiverName = $out2[0];
						@setcookie("receiverType","Student Counselor");
						echo "<tr><td>$receiverName</td><td><form method='post' action='../message/messageAction.php'><button class='btn btn-default' name='receiver' value=$senderId>Reply</button></form></td></tr>";
					}
					else if($receiverType == "Undergraduate"){
						$out = mysqli_query($connect,"SELECT first_name,middle_name,surname FROM student WHERE national_id_number='$senderId'")or die(mysqli_error($connect)) ;
						$out2 =  mysqli_fetch_row($out);
						$receiverName = $out2[0]." ".$out2[1]." ".$out2[2];
						@setcookie("receiverType","Undergraduate");
						echo "<tr><td>$receiverName</td><td><form method='post' action='../message/messageAction.php'><button class='btn btn-default' name='receiver' value=$senderId>Reply</button></form></td></tr>";
					}
		
					else if($receiverType == "Recent Graduate"){
						$out = mysqli_query($connect,"SELECT name_with_initials FROM recentgraduate WHERE national_id_number='$senderId'")or die(mysqli_error($connect)) ;
						$out2 =  mysqli_fetch_row($out);
						$receiverName = $out2[0];
						@setcookie("receiverType","Recent Graduate");
						echo "<tr><td>$receiverName</td><td><form method='post' action='../message/messageAction.php'><button class='btn btn-default' name='receiver' value=$senderId>Reply</button></form></td></tr>";
					}
		
					else if($receiverType == "Employer"){
						$out = mysqli_query($connect,"SELECT name FROM employer WHERE national_id_number='$senderId'")or die(mysqli_error($connect)) ;
						$out2 =  mysqli_fetch_row($out);
						$receiverName = $out2[0];
						@setcookie("receiverType","Employer");
						echo "<tr><td>$receiverName</td><td><form method='post' action='../message/messageAction.php'><button class='btn btn-default' name='receiver' value=$senderId>Reply</button></form></td></tr>";
					}
		
		//$name = $receiverType.""."Message.php";
		//echo "<tr><td>'$receiverName'</td><td><form method='post' action='../message/$name'><button>Reply</button></form></td></tr>";
				}
	
				mysqli_query($connect,"UPDATE message SET read_no = 0 WHERE read_no = 1 AND receiver = '$user'");
				echo "</table>";
				mysqli_close($connect);
				?>
            </div>    
        </div>
        <!-- /.row -->

        <!-- Portfolio Section -->

        <!-- Features Section -->

        <!-- /.row -->

        <hr>
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




                    
                    
        

    

    

    <!-- Page Content -->
    
				








