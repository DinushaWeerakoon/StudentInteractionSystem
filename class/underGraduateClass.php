<?php
	include_once("profileClass.php");
	//echo "<h1>Under Graduate Class</h1>";
	class UnderGraduate extends Profile{
	
		// override the function
		function message($receiver){}
	}
	
	$underGraduate = new UnderGraduate;
?>