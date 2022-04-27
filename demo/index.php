<?php
include "conn.php";

if (isset($_POST['submit'])) {
    $name = $_POST['Firstname'];
    $insertquery = "INSERT INTO demo (name) values ('$name')";
    $rslt = mysqli_query($conn, $insertquery);
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
        <input type="text" name="Firstname">
        <input type="submit" name="submit" value="submit">
    </form>
    <?php
    $query = "SELECT * from demo";
    $rslt1 = mysqli_query($conn, $query);
    echo "<table>
            <tr>
            <th>Id</th>
            <th>Name</th>
            </tr>";
    while ($row = mysqli_fetch_array($rslt1)) {
        echo "<tr>";
        echo "<td>" . $row['id'] . "</td>";
        echo "<td>" . $row['name'] . "</td>";
        echo "</tr>";
    }
    echo "</table>";


    ?>
</body>

</html>