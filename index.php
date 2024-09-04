<?php
    echo "Hard Working Everyday!<br>";
    echo "Hajimaemashou!";
    //This is a comment
    /* This
        is
        a
        multiline
        comment
    */
    //Testing Basic Declaration 
    $name= "Bro Code";
    $food= "pizza";
    $email="fake123@gmail.com";
    $age= 21;
    $users=2;
    $gpa=2.5;
    $price=200;
    $quantity=3;
    $employed=true;
    $online=false;
    $totoal=null;
    echo "Hello {$name}.<br>";
    echo "You like {$food}.<br>";
    echo "Your email is {$email}.<br>";
    echo "You are {$age} years old.<br>";
    echo "There are {$users} users online.<br>";
    echo "Your gpa is: {$gpa}.<br>";
    echo "Online status: {$online}.<br>";
    echo "You have ordered {$quantity} * {$food}s.<br>";
    $total=$quantity*$price;
    echo "Your total is: {$total}.<br>";

    //Testing Arithmetic operators
    //+ - * /
    $x=10;
    $y=2;
    $z=null;
    //$z=$x+$y;
    //$z=$x*$y;
    //$z=$x-$y;
    //$z=$x/$y;
    //$z=$x%$y;
    //$z=$x*$y;
    $z=$x**$y;
    echo "{$z}<br>";

    //Testing Increment/Decrement operators
    $counter =0;
    //$counter++;
    //$counter--;
    //$counter+=1;
    //$counter-=1;
    echo $counter;

    //Testing operator precedence
    $ptotal=1+2-3*4/5**6;
    echo $ptotal;



?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <br>
    <button>order pizza</button>
</body>
</html>