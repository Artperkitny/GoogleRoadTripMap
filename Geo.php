<?php
	require "Connect.php";
	
	$query = "SELECT `Timestamp`,`Lat`,`Long`,`Tag`, `Type` FROM `Geolocation`;";
	$result = mysqli_query($connect,$query);
	$x=0;
	while($row = mysqli_fetch_array($result)){
		$data[$x]["Timestamp"] = $row[0]; 
		$data[$x]["Lat"] = $row[1]; 
		$data[$x]["Long"] = $row[2]; 
		$data[$x]["Name"] = $row[3]; 
		$data[$x]["Type"] = $row[4]; 
		$x+=1;
	}

	print json_encode($data);
?>