<?php
	$data = json_decode(stripslashes($_GET['data']));
    $Name = $data[0];
    $Timestamp = $data[1];
	$directory = "/var/www/html/Admin/img/".$Name."_".$Timestamp;
	$photos = scandir($directory);	
	echo "<div class='slider demo' id='slider'>";
	foreach($photos as $x){
        $ext = substr($x, strrpos($x, '.') + 1);
        if(in_array($ext, array("JPG","jpeg","png","gif"))){
            echo "<div><img width='500px' src='http://54.165.129.99/Admin/img/".$Name."_".$Timestamp."/".$x."'/></div>";
        }
	}
    echo "</div><a class='close-reveal-modal'>&#215;</a>";
?>