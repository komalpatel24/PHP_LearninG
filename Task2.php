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
            for($i=1;$i<=6;$i++){
                for($j=1;$j<$i;$j++){
            echo " $j ";
                }
            echo "<br>";
            }
            echo "<br>";
         ?>     

            <?php
                    for($i=1; $i<=5; $i++){
                        for($j=1; $j<=$i; $j++){
                            echo $j % 2;
                    }  echo "<br>";     
                }
                echo "<br>";
             ?>

          

            <?php

                    $rows = 5;
                    $n = 1;
                    for($i = 1; $i<=$rows; $i++){
                        for($j=1; $j<=$i; $j++){
                            echo $n, "&nbsp;&nbsp;";
                            $n++;
                        }
                        echo "<br>";
                    }
                    echo "<br>";
            ?>

        <?php
                $str="ANGEL";
                $count=strlen($str);
                for($i=0; $i<$count; $i++){
                    for($j=0; $j<=$i; $j++){
                        echo "  $str[$j]  ";
                    }
                    echo "<br>";
                }
                echo "<br>";
            ?>


        <?php  
                for($i=1;$i<=5;$i++){
                    for($j=0;$j<$i;$j++){
                echo "  *  ";
                    }
                echo "<br>";
                }
                echo "<br>";
           ?> 

         <?php  
                for($i=1;$i<=5;$i++){
                    for($j=5;$j>=$i;$j--){
                echo "  *  ";
                    }
                echo "<br>";
                }
                echo "<br>";
           ?> 



           <?php

                $list=array(" * "," # "," @ "," $ "," ^ ");
                    for($a=0; $a<=4; $a++){
                        echo "<br>";
                        for($b=0; $b<=$a; $b++)
                        {
                            echo $list[$a];
                         }
                    }
                echo "<br><br>";
             ?>
    
    <?php
        $n=4;
        for($i=1; $i<=$n; $i++){
            for($j=1; $j<=(2*$n)-1; $j++){
                if($j>=$n-($i-1) && $j<=$n+($i-1)){
                    echo "*";
                } else{
                    echo "&nbsp;&nbsp;";
                }
            }
            echo "<br>";
        }
    ?>
</body>
</html>