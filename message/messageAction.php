<?php
	
	require_once("../Database/database.php");
	$receiver = $_POST["receiver"];
	setcookie("receiver",$receiver);
	
	// to get sender name from database
	$sender = $_COOKIE["userName"];
	$senderType = $_COOKIE['userType'];
	
	$senderName = $_COOKIE["name"];
	
	// to get receiver name from database
	$receiverType = $_COOKIE["receiverType"];
	
	if($receiverType == "SystemAdmin"){
		$receiverName = "System Administrator";
	}
	else if($receiverType == "lecturer" || $receiverType=="studentCounselor"){
		$out = mysqli_query($connect,"SELECT name_with_initials FROM lecturer WHERE national_id_number= '$receiver'") or die("sorry");
		$out2 =  mysqli_fetch_row($out);
		$receiverName = $out2[0];
	}
	
	else if($receiverType == "undergraduate"){
		$out = mysqli_query($connect,"SELECT first_name,middle_name,surname FROM student WHERE national_id_number= '$receiver'") or die("sorry");
		$out2 =  mysqli_fetch_row($out);
		$receiverName = $out2[0]." ".$out2[1]." ".$out2[2];
	}
	
	else if($receiverType == "recentgraduate"){
		$out = mysqli_query($connect,"SELECT name_with_initials FROM recentgraduate WHERE national_id_number= '$receiver' ") or die("sorry");
		$out2 =  mysqli_fetch_row($out);
		$receiverName = $out2[0];
	}
	
	else if($receiverType == "employer"){
		$out = mysqli_query($connect,"SELECT name FROM employer WHERE national_id_number= '$receiver' ") or die("sorry");
		$out2 =  mysqli_fetch_row($out);
		$receiverName = $out2[0];
	}
	
	$sql = "SELECT * FROM message WHERE (sender = '$sender' AND receiver = '$receiver' AND senderDelete = 1) OR (receiver = '$sender' AND sender = '$receiver' AND receiverDelete =1 ) ORDER BY date_time";
	$result =  mysqli_query($connect,$sql) or die ("error in query");
	$rows = mysqli_num_rows($result);
	
	
?>

<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title> System Administrator</title>

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
							$type=$_COOKIE['userType'];
                            if($type == "Undergraduate"){
                                echo "<li><a href='lecturerMessage.php'>Lecturer</a></li>";
                                echo "<li><a href='studentCounselorMessage.php'>Student Counsellor</a></li>";
                                echo "<li><a href='recentGraduateMessage.php'>Recent Graduate</a></li>";
                                echo "<li><a href='employeeMessage.php'>Employee</a></li>";
                                echo "<li><a href='systemAdminMessage.php'>System Administraror</a></li>";   
                            }
                            
                            else if($type=="Administrator"){
                                header("Location:Administrator.php");
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

    

    

    <!-- Page Content -->
    <div class="container">

        <!-- Marketing Icons Section -->
        <div class="row">
            <div class="col-lg-12">
                <h3 class="page-header">
                    Welcome to University of Colombo School of Computing Student Interaction System
                </h3>
				<?php
					if ($rows == 0 ){
						echo "start the conversation";
					}
	
					else{
						echo "<table align='center' width='60%'>";
						while ($row = mysqli_fetch_row($result)){
						if($row[1] == $sender){
							echo "<tr><td></td><td align='center'><b>$receiverName</b><br>'$row[3]'</td><td>";
							echo "<form method = 'post' action='deleteMessage.php'><button class='btn btn-default' type='submit' name='delete' value='$row[2]'>Delete Message</button></form>";
							echo "</td></tr>";
						}
			
						else{
							echo "<tr><td align='center'><b>$senderName</b><br>'$row[3]'</td><td>";
							echo "<form method = 'post' action='deleteMessage.php'><button class='btn btn-default' type='submit' name='delete' value='$row[2]'>Delete Message</button></form>";
							echo "</td></tr>";
						}
					}
		
					echo "</table>";
					}
				mysqli_close($connect);
				
				echo "<form method='POST' action='enterMessageToDatabase.php'>";
				echo "<textarea cols='75' rows= '10' value='' name = 'message'></textarea><br><br>";
				echo "<button type='submit' class='btn btn-default' >Reply</button></form><br><br>";
				echo "<form method = 'post' action='deleteAllMessage.php'><button class='btn btn-primary' type='submit'>Delete All Messages</button></form>";
				//echo "<a href=../pages/page.php>home</a>";
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









