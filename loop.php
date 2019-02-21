<?php
	//Add while loop below
    $mySentence = "ABCDEFGHIJKLMNOPQRSTUVWXYZ";
    
    while (strlen($mySentence) > 0) {
        $mySentence = substr($mySentence, 1); 
        echo $mySentence."<br>";
    }
?>