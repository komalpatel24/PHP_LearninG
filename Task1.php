<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Task1</title>
    <style>
       array {
            border: 2px solid black;
            text-align: center;
        }
    </style>
</head>
<body>
    <?php
    $data=array(
        array("NO","NAME","CONTACT"),
        array(1,"A",9998979695),
        array(2,"B",9897969594),
        array(3,"C",9796959493),
        array(4,"D",9695949392)
    );
    echo "<table>";
    for ($row = 0; $row < 5; $row++) {
       
        echo "<tr>";
        for ($col = 0; $col < 3; $col++) {
          echo "<td>"; 
          echo $data[$row][$col];
          echo "</td>";
        }
        echo "</tr>";
      }
echo "</table>";
    
 ?>
</body>
</html>