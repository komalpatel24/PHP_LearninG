<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Task3</title>
</head>
<body>
    
<?php
            for($i=5;$i>0;$i++){
                for($j=5;$j>$i;$j++){
            echo " $j ";
                }
            echo "<br>";
            }
            echo "<br>";
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