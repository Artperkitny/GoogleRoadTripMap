<?php
	//$data = json_decode(stripslashes($_GET['data']));
    $data = "Home";
	$directory = getcwd()."/img/travel/".$data."/";
	$photos = scandir($directory);	
	echo "<div class='slider demo' id='slider'>";
	foreach($photos as $x){
        $ext = substr($x, strrpos($x, '.') + 1);
        if(in_array($ext, array("JPG","jpeg","png","gif"))){
            echo "<div><img src='img/travel/$data/$x'/></div>";
        }
	}
    echo "</div><a class='close-reveal-modal'>&#215;</a>";
?>