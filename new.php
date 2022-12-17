<?php 

$pic=array('emoji\1.jpg','emoji/2.jpg','emoji/3.gif');
shuffle($pic);

$img=array('emoji\a1.jpg','emoji/5.jpeg','images/4.jpg');
shuffle($img);
   if($_SERVER['REQUEST_METHOD']=="POST"){
      $form=$_POST['mywatch'];
   }
   if($form==null){
      echo"select your answer";
   }

?>
 <!DOCTYPE html>
 <html lang="en">
 <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
 </head>
 <body>
 <form method="POST" name="select">

    <ul>
        <?php
             for($i=0;$i<1;$i++)
             echo"<li style=\"display:inline;\"><img src=\"$pic[$i]\"width=\"250\"height=\"250\"></li>";  
        ?>
    </ul>
    
  <input type="radio" id="yes" name="mywatch" value="yes">
  <label for="yes">yes</label><br>
  <input type="radio" id="no" name="mywatch" value="CSS">
  <label for="no">no</label><br>
   </form>

   <form action="">
    <ul>
        <?php
             for($i=0;$i<1;$i++)
                echo"<li style=\"display:inline;\"><img src=\"$img[$i]\"width=\"250\"height=\"250\"></li>";  
        ?>  
    </ul>
    <input type="radio" id="yes" name="mywatch" value="yes">
  <label for="yes">yes</label><br>
  <input type="radio" id="no" name="mywatch" value="CSS">
  <label for="no">no</label><br>
  </form>
 </body>
 </html>