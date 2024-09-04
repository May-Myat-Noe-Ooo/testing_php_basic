<?php
    $age=30;
    if($age>=18){
        echo "You are adult";
    }
    elseif($age<=0){
        echo "That wasn't a valid age.";
    }
    elseif($age>=100){
        echo "You are too old to be valued.";
    }
    else{
        echo "You are not aged";
    }

    $adult=false;
    if($adult==true){
        echo "You may enter this site";
    }
    else{
        echo "You are not allowed.<br>";
    }

    
?>