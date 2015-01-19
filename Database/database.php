<?php
	// connecting database
	$connect = mysqli_connect("localhost","root","","projectsis");
	if(mysqli_connect_errno()){
		echo "Cannot connect to the database";
	}
	
?>