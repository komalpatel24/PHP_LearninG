<?php
    $first=array('emoji\1.jpg','emoji/2.jpg','emoji/9.jpg','emoji/8.jpg');
    shuffle($first);
    
    $second=array('emoji\a1.jpg','emoji/5.jpeg','emoji/4.jpg');
    shuffle($second);

    $selectErr = $selecttErr = '';
    
     if (isset($_POST['submit'])) {
        
        if (empty($_POST["select"])) {
            $selectErr = "1 option select required";
          } elseif(empty($_POST["selectt"])) {
            $selecttErr = "1 option selectt required";
          }elseif($_POST["select"] === $_POST["selectt"]){
            echo "<h1>U Don't deserve it...</h1>";
          }else {
            echo "<h1>U Can Do It...</h1>";
          }
     }
     function setValue($value) {
        if (isset($_POST[$value])) {
            echo $_POST[$value];
        }
    }
     ?>


     <!-- <script>
        $(function(){
            $("#submit").click(function(){ 
            var v1=$('#select1');
           if(v1.val() === ""){
            alert('value is required');
            }
          });
        });
     </script> -->


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
    <title>Difficult_Task</title>
    <style>
        button{
            margin-left: 40%;
            margin-top: 2%;
        }
        .main{
            display: flex;
            margin-top: 5%;
        }
        .i1{
            margin-left: 15%;
        }
        .i2{
            margin-left: 15%;
        }
        #image{
            height: 39vh;
            width: 19vw;
            background-color: gray;
        }
        span{
            color: red;
        }
    </style>
</head>
<body>

<form method="POST" action="">
    <button>Image Show</button>
    <div class="main"> 
       
        <div class="i1">
            <div id="image">
                <?php
                for($i=0;$i<1;$i++)
                echo"<p style=\"display:inline;\"><img src=\"$first[$i]\"width=\"280\"height=\"250\"></p>";  
                ?>
                <!-- echo "dsfrgrd"; -->
            </div>
            <div>
                <select id="select1" name="select" value="select"  style="margin:7%"; >
                <option value="" selected disabled><--select--></option>
                    <option value="Yes" <?php if (isset($_POST['select'])) {
                                                    if ($_POST['select'] == 'Yes')
                                                        echo 'select';} ?>>Yes</option>
                    <option value="No" <?php if (isset($_POST['select'])) {
                                                    if ($_POST['select'] == 'No')
                                                        echo 'select';} ?>>No</option>
                </select>
                <span>* <?php echo $selectErr;?></span>
            </div>
            <p id="result1"></p>
        </div>

        
        <div class="i2">
            <div id="image">
                <?php
                for($i=0;$i<1;$i++)
                    echo"<p style=\"display:inline;\"><img src=\"$second[$i]\"width=\"280\"height=\"250\"></p>";  
                ?>  
                <!-- echo "dsfrgrd"; -->
            </div>
            <div>
                <select id="select2" name="selectt" value="selectt"  style="margin:7%";>
                    <option value="" selected disabled><--select--></option>
                    <option value="Yes" <?php if (isset($_POST['selectt'])) {
                                                    if ($_POST['selectt'] == 'Yes')
                                                        echo 'selectt';} ?>>Yes</option>
                    <option value="No" <?php if (isset($_POST['selectt'])) {
                                                    if ($_POST['selectt'] == 'No')
                                                        echo 'selectt';} ?>>No</option>
                </select>
                <span>* <?php echo $selecttErr;?></span>
            </div>
        </div>
    </div>
        <input type="submit" id="submit" value="submit" name="submit" style="margin-left:40% ;">
    </form>
</body>
</html>