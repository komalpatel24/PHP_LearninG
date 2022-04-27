<?php
 $conn = mysqli_connect("localhost" ,"root" , "");
 if ($conn) {
    
    if (!mysqli_select_db($conn, "event")) {
       
        $query = "CREATE DATABASE event";

        $rslt = mysqli_query($conn, $query);
    
        if ($rslt) {
           
            mysqli_select_db($conn, "event");
        
        } else {
        
            echo mysqli_error($conn);
        }
     }
} else {
    
    echo "not connected";
}

//sql to create table
$sql = "CREATE TABLE demo (
id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
name VARCHAR(30) NOT NULL,
mobile INT(10) NOT NULL
)";
$rslt = mysqli_query($conn,$sql);
 
if (isset($_POST['submit'])) {

    $name = $_POST['name'];
    $mobile = $_POST['mobile'];

    $iq = "INSERT INTO demo (name,mobile) VALUES ('$name',$mobile)";
    echo $iq;
    $rslt = mysqli_query($conn,$iq);
   
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
    <form method="post" action="">
        <h1>Demo</h1>
        <input type="text" name="name" placeholder="name">
        <input type="text" name="mobile" placeholder="mobile"> <br> <br>
    <input type="reset" name="submit" value="cancel">
        <input type="submit" name="submit" value="submit">
    </form> 
    <!-- 
    $query = "SELECT * FROM demo";
    $rslt1 = mysqli_query($conn, $query);
    echo "<table border>
            <tr>
            <th>id</th>
            <th>name</th>
            <th>mobile</th>
            </tr>";
    while ($row = mysqli_fetch_array($rslt1)) {
                echo "<tr>";
                echo "<td>" . $row['id'] . "</td>";
                echo "<td>" . $row['name'] . "</td>";
                echo "<td>" . $row['mobile'] . "</td>";
                echo "</tr>";
    }
     echo "</table>";
     echo $row;
  ?> -->
</body>
</html>



