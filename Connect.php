<?php

	//vars
		$host = "localhost";
		$username = "root";
		$password = "void0on0";
		$database = "Data";
		
	// Create connection
		$connect = mysqli_connect($host,$username,$password,$database);
		
	// Check connection
		if (mysqli_connect_errno($Connect))
		  {
		  echo "Failed to connect to MySQL: " . mysqli_connect_error();
		  }

?>