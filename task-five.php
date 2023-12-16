<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php


$a=40;
$b=30;
$c=60;
$d=70;
$username="Naimul huda";
$password=1234567;
$rollnumber=2020234169;


if($a<$b){

    echo $b . "is bigger than" . $a;

}
else{

    echo $a . "is smaiier than" . $b ;
}

if( $c==$d){

    echo $c . "is equal to" . $d;
}
else{
    echo $c . "is not equal to" .$d;

}

if($username=="Naimul huda"){

    echo "You are most welcome" . $username;

if( $password=== 123456){
        echo $password . "is right";
    }
else{
        echo $password . "is incorrect ";
    }
}
else{
    echo $username . "Your Username ise incorrect";
}

?>    

</body>
</html>