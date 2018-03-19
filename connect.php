<?php

	$con = mysqli_connect("localhost","root","","washing_plant");
	
	mysqli_query($con,"SET CHARACTER SET 'utf8'");
	mysqli_query($con,"SET SESSION collation_connection ='utf8_unicode_ci'");


	if(mysqli_connect_errno()){
		
		echo "Error occourd while connecting with database".mysqli_connect_errno();
	}