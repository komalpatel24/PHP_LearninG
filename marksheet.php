<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
<?php
// PHP Script to Calculate Total Marks of Student and Display Grade
// These are the marks of seven subjects
$STUDANT_NAME = "Sharma Isha";
$GUJ = 95;
$ECO = 90;
$BA = 80;
$STATE = 88;
$ACCOUNT = 79;
$ENG = 55;
$SP = 85;
 
echo "NAME = " . $STUDANT_NAME  . "<br>";
echo "GUJ = " . $GUJ . "<br>";
echo "ENG = " . $ENG . "<br>";
echo "ECHO = " . $ECO . "<br>";
echo "BA = " . $BA . "<br>";
echo "STATE = " . $STATE . "<br>";
echo "ACCOUNT = " . $ACCOUNT . "<br>";
echo "SP = " . $SP . "<br>";

$total = $GUJ + $ECO + $BA + $STATE + $ACCOUNT + $ENG + $SP;

$percentage = ($total / 700.0) * 100 . "%" ;

echo "TOTAL = " . $total . "<br>";

echo "PERCENTAGE = " . $percentage ."<br>" ;

if( $GUJ>=35 and $ECO>=35 and $BA>=35 and $STATE>=35 and $ACCOUNT>=35 and $ENG>=35  and $SP>=35)
 {
     echo"Pass";
 }
 else
 {
     echo"fail";
 }

?>

</body>
</html>