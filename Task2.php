<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Task2</title>
</head>
<body>
    <?php
     /* for($i=1;$i<=5;$i++){
          for($j=0;$j<$i;$j++){
      echo "*";
          }
      echo "<br>";
      }*/

      $list=array("*","#","@","$","^");
        for($a=0; $a<=4; $a++){
            echo "<br>";
            for($b=0; $b<=$a; $b++)
            {
                
                echo $list[$a];
                
                }
        }



    ?>
</body>
</html>