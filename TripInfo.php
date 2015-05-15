<?php
    require "Connect.php";

    $query = "SELECT COUNT(DISTINCT `Locality`),COUNT(DISTINCT `Territory`) ,COUNT(DISTINCT `Country`), COUNT(DISTINCT `ID`), MIN(`Timestamp`)  FROM `Geolocation`;";
	$result = mysqli_query($connect,$query);
	$row = mysqli_fetch_array($result);
    echo "<h2>My travel map</h2>
		  <p>This map is a collection of all the places I have visited during my journey to California. I will be updating it daily so make sure to check in                 often!</p><a class='close-reveal-modal'>&#215;</a>";
    echo "<div id='TripDataPHP'> Cities Visited: ".$row[0]."<br>";
    echo "Territories Visited: ".$row[1]."<br>";
    echo "Countries Visited: ".$row[2]."<br>";
    echo "Pins Dropped: ".$row[3]."<br>";
    $days = round((time()-$row[4])/(60*60*24),1);
    echo "Days on Road: ".$days."<br>";
    echo "Pins/Day: ".round($row[3]/$days,1)."<br></div>";

?>