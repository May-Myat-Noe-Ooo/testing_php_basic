<?php
$grade="Pizza";
switch($grade){
    case "A":
        echo "You did great.";break;
    case "B":
        echo "You did good.";break;
    case "C":
        echo "You did okay.";break;
    case "D":
        echo "You did poorly.";break;
    case "E":
        echo "You did failed.";break;
    default:
        echo "{$grade} is not valid.";
}
$date=date("l");
echo $date;
?>