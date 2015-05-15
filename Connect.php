<?php

	//vars
		$host = "";
		$username = "";
		$password = "";
		$database = "";
		
	// Create connection
		$connect = mysqli_connect($host,$username,$password,$database);
		
	// Check connection
		if (mysqli_connect_errno($Connect))
		  {
		  echo "Failed to connect to MySQL: " . mysqli_connect_error();
		  }

?>
