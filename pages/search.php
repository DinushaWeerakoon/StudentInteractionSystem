<!DOCTYPE html>

<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Search</title>

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
	
	<script language="JavaScript">
		function validateForm(){
		
			/*if(document.sportlist.sport.value=='' || document.societylist.society.value=='' || document.companylist.company.value==''){
			window.alert("Enter the particular search button");
			return false;	
			}
			
			else if(document.societylist.society.value==''){
			window.alert("Enter the society");
			return false;	
			}
			
			else if(document.companylist.company.value==''){
			window.alert("Enter the company");
			return false;	
			}*/
			if(document.sportlist.sport.value=='' && document.societylist.society.value=='' && document.companylist.company.value=='')
			{
			window.alert("Enter the sport or society or company");
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
							$type=$_COOKIE['userType'];
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
<body>
<div class="container">
<?php
if(isset($_POST["submit1"])){
	require_once("../class/Profile.php");
	$new =new Profile();
    $new->searchForSport();
}
else if(isset($_POST["submit2"])){
	require_once("../class/Profile.php");
	$new =new Profile();
    $new->searchForExtraCurrricularActivity();
}
else if(isset($_POST["submit3"])){
	require_once("../class/Profile.php");
	$new =new Profile();
    $new->searchForCompany();
}
?>
<div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">Search 
                </h1>
                <ol class="breadcrumb">
                    <li><a href="page.php">Home</a>
                    </li>
                    <li class="active">Search</li>
                </ol>
            </div>
        </div>
<form method="post" name="sportlist" action="">

<div class="panel panel-primary">
<div class="panel-heading"> Sports</div>
<div class="panel-body">
<table class="table">
<tr>
<td><input type="radio" name="sport" value="Cricket" >Cricket<br></td>
<td><input type="radio" name="sport" value="Foot Ball" >Foot Ball<br></td>
<td><input type="radio" name="sport" value="Tennis" >Tennis<br></td>
<td><input type="radio" name="sport" value="Table Tennis" >Table Tennis<br></td>
</tr>
<tr>
<td><input type="radio" name="sport" value="Swimming" >Swimming<br></td>
<td><input type="radio" name="sport" value="Hockey" >Hockey<br></td>
<td><input type="radio" name="sport" value="Basketball" >Basket Ball<br></td>
<td><input type="radio" name="sport" value="Netball" >Netball<br></td>
</tr>
<tr>
<td><input type="radio" name="sport" value="Baseball" >Base Ball<br></td>
<td><input type="radio" name="sport" value="Athletic" >Athletic<br></td>
<td><input type="radio" name="sport" value="Elle" >Elle<br></td>
<td><input type="radio" name="sport" value="Carom" >Carom<br></td>
</tr>
<tr>
<td><input type="radio" name="sport" value="Badminton" >Badminton<br></td>
<td><input type="radio" name="sport" value="Taekwondo" >Taekwondo<br></td>
<td><input type="radio" name="sport" value="Karate" >Karate<br></td>
<td><input type="radio" name="sport" value="Boxing" >Boxing<br></td>
</tr>
<tr>
<td><input type="radio" name="sport" value="Chess" >Chess<br></td>
<td><input type="radio" name="sport" value="Voleyball" >Volley Ball<br></td>
<td><input type="radio" name="sport" value="Rowing" >Rowing<br></td>
</tr>
<tr><td colspan="3"><input type="submit" name="submit1" value="Search" onclick="return validateForm();" class="btn btn-primary"></br></td></tr>
</table>
</div>
</div>

</form>

<form method="post" name="societylist" action="">
<div class="panel panel-primary">
<div class="panel-heading">Clubs and Societies</div>
<div class="panel-body">
<table class="table">
<tr>
<td><input type="radio" name="society" value="AIESEC" >AIESEC<br></td>
<td><input type="radio" name="society" value="CompSoc" >Compsoc<br></td>
<td><input type="radio" name="society" value="Buddhist Students Society" >Buddhist<br></td>
</tr>
<tr>
<td><input type="radio" name="society" value="Muslim Majlis" >Muslim Majlis<br></td>
<td><input type="radio" name="society" value="Catholic Students Movement" >Catholic Students Movement<br></td>
<td><input type="radio" name="society" value="Christian Students Society" >Cristian Society<br></td>
<tr>
<td><input type="radio" name="society" value="Tamil Students Society" >Tamil Society<br></td>
<td><input type="radio" name="society" value="Hindu Society" >Hindu Society<br></td>
<td><input type="radio" name="society" value="Gavel Club" >Gavel Club<br></td>
</tr>
<tr><td colspan="2"><input type="submit" name="submit2" value="Search" onclick="return validateForm();"class="btn btn-primary"></td></tr>
</table>
</div>
</div>
</form>

<form method="post" name="companylist" action="">
<div class="panel panel-primary">
<div class="panel-heading">Company</div>
<div class="panel-body">
<table class="table">
<tr>
<td><input type="radio" name="company" value="WSO2">WSO2<br></td>
<td><input type="radio" name="company" value="MIT">Millenium IT<br></td>
<td><input type="radio" name="company" value="virtusa">Virtusa<br></td>
</tr>
<tr>
<td><input type="radio" name="company" value="99x">99x Technology<br></td>
<td><input type="radio" name="company" value="ucsc">UCSC<br></td>
</tr>
<tr>
<td colspan="2"><input type="submit" name="submit3" value="Search" onclick="return validateForm();"class="btn btn-primary"></td>
</tr>
</table>
</div>
</div>
</form>
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