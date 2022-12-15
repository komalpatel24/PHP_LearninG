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
  
   function info($name,$DOB,$Salary) {
    
    echo $name ."<br>";
    echo $DOB . "<br>";
    echo $Salary . "<br>";
    if($Salary>=10000){
        echo ($Salary*5)/100;
     } else {
         echo ($Salary*10)/100;
     } 
     echo "<br>";
     
     $diff = (date('Y') - date('Y',strtotime($DOB)));
     echo $diff;

     }
       info("angel multimedia",'02-04-2022',10000);
 ?>
</body>
</html>