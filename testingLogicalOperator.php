<?php
$temp=10;
$couldy=true;
// if($temp>=0 && $temp<=30){
//     echo "The weather is good.";
// }
if($temp<0 ||$temp>30){
    echo "The weather is bad.<br>";
}
else{
    echo "The weather is good<br>";
}

if(!$couldy){
    echo"It's sunny.<br>";
}
else{
    echo"It will be rainy.<br>";
}
?>