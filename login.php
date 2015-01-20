<?php

		if($_SERVER["REQUEST_METHOD"]=="POST"){
			$user = $_POST["username"];
			$password = $_POST["password"];
			
			require_once("Database/database.php");
			
			$sql = "SELECT * FROM profile WHERE username='$user' AND password='$password'";
			if($result = mysqli_query($connect, $sql)){
				if (mysqli_num_rows($result)==0){
						echo "<div><div class='alert alert-danger' role='alert'>Login Failed. Please check your username and password, then <a href = 'welcome.html' class = 'alert-link'>try again</a></div>";
					}
					
				else{
					$row = mysqli_fetch_row($result);
					setcookie('userName',$row[0]);
					//echo "<h1>Logged as $row[2]</h1>";
					setcookie('userType',$row[2]);
					
					//set the users  real name
					if($row[2] == "Administrator"){
						$name = "System Administrator";
					}
					else if($row[2]=="Lecturer" || $row[2]=="Student Counselor"){
						$sql = mysqli_query($connect,"SELECT name_with_initials FROM lecturer WHERE national_id_number= '$user'") or die("sorry");
						$row1 = mysqli_fetch_row($sql);
						$name = $row1[0];
					}
					
					else if($row[2]=="Employer"){
						$sql = mysqli_query($connect,"SELECT name FROM employer WHERE national_id_number= '$user'") or die("sorry");
						$row1 = mysqli_fetch_row($sql);
						$name = $row1[0];
					}
					
					else if($row[2]=="Undergraduate"){
						$sql = mysqli_query($connect,"SELECT first_name,middle_name,surname FROM student WHERE national_id_number= '$user'") or die("sorry");
						$row1 = mysqli_fetch_row($sql);
						$name = $row1[0]." ".$row1[1]." ".$row1[2];
						
					}
					
					else if($row[2]=="Recent Graduate"){
						$sql = mysqli_query($connect,"SELECT name_with_initials FROM recentgraduate WHERE national_id_number= '$user'") or die("sorry");
						$row1 = mysqli_fetch_row($sql);
						$name = $row1[0];
						
					}
					
					setcookie("name",$name);
					header("Location:pages/page.php");
					
					
				}
			}
			
			mysqli_close($connect);
		}
?>


<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Home</title>

    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="css/modern-business.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="fonts/font-awesome-4.1.0/css/font-awesome.min.css" rel="stylesheet" type="text/css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

    <script language="Javascript">
function CheckForm(event)
{
    event.preventDefault();
    if(document.formLogin.username.value=='')
    {
        window.alert("Enter the Username");
        return false;
    }
    if(document.formLogin.password.value=='')
    {
        window.alert("Enter the password");
        return false;
    }
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
                <a class="navbar-brand" href="welcome.html">Student Interaction System</a>
            </div>
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav navbar-right">
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">Other Pages <b class="caret"></b></a>
                        <ul class="dropdown-menu">
                            <li>
                                <a href="ugvle.ucsc.cmb.ac.lk">UGVLE</a>
                            </li>
                            <li>
                                <a href="http://ugvle.ucsc.cmb.ac.lk/">UCSC Website</a>
                            </li>
                            <li>
                                <a href="https://www.facebook.com/">Facebook</a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a href="welcome.html">About Us</a>
                    </li>
                    <li class="dropdown" id="menuLogin">
                    <a class="dropdown-toggle" href="#" data-toggle="dropdown" id="navLogin">Login</a>
                    <div class="dropdown-menu" style="padding:10px;">
                        <form class="form" id="formLogin" action="login.php" method="POST" onsubmit="return CheckForm()"> 
                            <div class="control-group form-group">
                             <input name="username" id="username" placeholder="Username" type="text" class="form-control"> 
                             </div>
                            <div class="control-group form-group">
                             <input class="form-control" name="password" id="password" placeholder="Password" type="password">
                            </div>
                            <input class="btn btn-default" type="submit" name="submit" onclick="return CheckForm();" value="Submit" />
							<div>
                                <a href="forgotPass/requ.php">Forgot Password</a>
                            </div>
                        </form>
                    </div>
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
                <div class="fill" style="background-image:url('images/slide1.jpg');"></div>
                <div class="carousel-caption">
                    <h2>Champion Hockey Team</h2>
                </div>
            </div>
            <div class="item">
                <div class="fill" style="background-image:url('images/slide2.jpg');"></div>
                <div class="carousel-caption">
                    <h2>Microsoft Imagine Cup National Champions</h2>
                </div>
            </div>
            <div class="item">
                <div class="fill" style="background-image:url('images/slide3.jpg');"></div>
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
    <script src="js/jquery-1.11.0.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>

    <!-- Script to Activate the Carousel -->
    <script>
    $('.carousel').carousel({
        interval: 5000 //changes the speed
    })
    </script>

</body>

</html>
