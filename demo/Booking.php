<?php
include "connect.php";

$idErr = $nameErr = $seatsErr = $bdateErr = $adultErr = $childrenErr  = $sourceErr = $destiErr = $mobileErr = "";
$toterr = 0;
if (isset($_POST['submit'])) {

    if (empty($_POST["name"])) {
        $nameErr = "name is required";
        $toterr++;
    } elseif (!preg_match("/^[a-zA-Z-' ]*$/", $_POST["name"])) {
        $nameErr = "Only letters and white space allowed";
        $toterr++;
    } // check if name only contains letters and whitespace

    if (empty($_POST["seats"])) {
        $seatsErr = "seats shold be not empty";
        $toterr++;
    } elseif (!preg_match("/\d/", $_POST["seats"])) {
        $seatsErr = "seats must be in digit";
        $toterr++;
    }

    if (empty($_POST["bdate"])) {
        $bdateErr = "bdate is not empty";
        $toterr++;
    }
    /* $startdate=strtotime("Today");
    $enddate=strtotime("+6 days", $startdate);
while ($startdate < $enddate) {
    echo date("Y M d", $startdate) . "<br>";
    $startdate = strtotime("+1 day", $startdate); }
    
    {  $dateErr = 'date is not valid';
       $toterr++;
    } */

    if (empty($_POST["adult"])) {
        /* $adultErr = "adult shold be not empty ";
         $toterr++;
    } else*/
        if (!preg_match("/\d/", $_POST["adult"])) {
            $adultErr = "adult must be in digit";
            $toterr++;
        }
    }

    if (empty($_POST["children"])) {
        /*   $childrenErr = "children shold be not empty";
          $toterr++;
    } else */
        if (!preg_match("/\d/", $_POST["children"])) {
            $childrenErr = "children must be in digit";
            $toterr++;
        }
    }

    if (empty($_POST["source"])) {
        $sourceErr = "source is required";
        $toterr++;
    } elseif (!preg_match("/^[a-zA-Z-' ]*$/", $_POST["source"])) {
        $sourceErr = "Only letters and white space allowed";
        $toterr++;
    } // check if only contains letters and whitespace

    if (empty($_POST["desti"])) {
        $destiErr = "desti is required";
        $toterr++;
    } elseif (!preg_match("/^[a-zA-Z-' ]*$/", $_POST["desti"])) {
        $destiErr = "Only letters and white space allowed";
        $toterr++;
    } // check if only contains letters and whitespace


    if (empty($_POST["mobile"])) {
        $mobileErr = "mobile is required";
        $toterr++;
    } elseif (!preg_match("/^[0-9]{10}$/", $_POST["mobile"])) {
        //$filtered_mobile_number = filter_var($mobile, FILTER_SANITIZE_NUMBER_INT);{
        $mobileErr = "mobile is not valid";
        $toterr++;
    }



    if ($toterr == 0) {
        echo "inside test----";

        $name = $_POST['name'];
        $seats = $_POST['seats'];
        $bdate = $_POST['bdate'];
        $adult = $_POST['adult'];
        $children = $_POST['children'];
        $source = $_POST['source'];
        $desti = $_POST['desti'];
        $mobile = $_POST['mobile'];

        $insertquery = "INSERT INTO bus_booking (name,seats,bdate,adult,children,source,desti,mobile) VALUES 
        ('$name',$seats,'$bdate',$adult,$children,'$source','$desti',$mobile)";
        echo $insertquery;

        $rslt = mysqli_query($conn, $insertquery);
    }
}
?>

<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>bus_booking</title>
    <style>
        .error {
            color: #FF0000;
        }
    </style>
</head>

<body>

    <form method="post" action="">
        <h2>BUS_BOOKING:</h2>

        <input type="text" name="name" placeholder="name">
        <span class="error">* <?php echo $nameErr; ?></span><br>
        <input type="number" name="seats" placeholder="seats" min="1" max="30">
        <span class="error">* <?php echo $seatsErr; ?></span><br>
        <input type="date" name="bdate" placeholder="bdate" min="2021-04-28">
        <span class="error">* <?php echo $bdateErr; ?></span><br>
        <input type="number" name="adult" placeholder="adult" min="0" max="30">
        <span class="error">* <?php echo $adultErr; ?></span><br>
        <input type="number" name="children" placeholder="children" min="0" max="25">
        <span class="error">* <?php echo $childrenErr; ?></span><br>
        <input type="text" name="source" placeholder="source">
        <span class="error">* <?php echo $sourceErr; ?></span><br>
        <input type="text" name="desti" placeholder="desti">
        <span class="error">* <?php echo $destiErr; ?></span><br>
        <input type="text" name="mobile" placeholder="mobile" style="width:10%;">
        <span class="error">* <?php echo $mobileErr; ?></span>
        <br><br>
        <input type="reset" name="submit" value="Cancel">
        <input type="submit" name="submit" value="submit">
    </form>
    <?php
    $query = "SELECT * from bus_booking";
    $rslt1 = mysqli_query($conn, $query);
    echo "<table border>
            <tr>
            <th>id</th>
            <th>name</th>
            <th>seats</th>
            <th>bdate</th>e
            <th>adult</th>
            <th>children</th>
            <th>source</th>
            <th>desti</th>
            <th>mobile</th>
            </tr>";
    while ($row = mysqli_fetch_array($rslt1)) {
        echo "<tr>";
        echo "<td>" . $row['id'] . "</td>";
        echo "<td>" . $row['name'] . "</td>";
        echo "<td>" . $row['seats'] . "</td>";
        echo "<td>" . $row['bdate'] . "</td>";
        echo "<td>" . $row['adult'] . "</td>";
        echo "<td>" . $row['children'] . "</td>";
        echo "<td>" . $row['source'] . "</td>";
        echo "<td>" . $row['desti'] . "</td>";
        echo "<td>" . $row['mobile'] . "</td>";
        echo "</tr>";
    }
    echo "</table>";

    ?>

</body>

</html>