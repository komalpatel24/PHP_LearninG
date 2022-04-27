<?php
include "connect.php";

if (isset($_POST['submit'])) {
    $name = $_POST['Name'];
    $date = $_POST['Date'];
    $insertquery = "INSERT INTO info (name,date) values ('$name' , '$date')";
    $rslt = mysqli_query($conn , $insertquery);
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Event</title>
</head>

<body>

    <form method="post" action="">
      <!-- <input type="number" name="Id" placeholder="Id"> -->
        <input type="text" name="Name" placeholder="Name">
        <input type="Date" name="Date" placeholder="Date">
        <input type="submit" name="submit" value="submit">
    </form>
    <?php
    $query = "SELECT * from info";
    $rslt1 = mysqli_query($conn, $query);
     
    echo "<table border>
            <tr>
            <th>Id</th>
            <th>Name</th>
            <th>Date</th>
            </tr>";
    while ($row = mysqli_fetch_array($rslt1)) {
        echo "<tr>";
        echo "<td>" . $row['Id'] . "</td>";
        echo "<td>" . $row['Name'] . "</td>";
       echo "<td>" . $row['Date'] . "</td>";
        echo "</tr>";
    }
    echo "</table>";
    ?>
</body>

</html>