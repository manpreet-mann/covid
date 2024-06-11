<?php
	$conn = mysqli_connect("localhost","root","","covid");//hostname, username, password, databasename
	if(!$conn){
		echo "DB not connected";
	}
