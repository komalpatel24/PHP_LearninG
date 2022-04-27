<?php
include "connect.php";

$IDErr = $NameErr = $DateErr = $PriceErr = $FlavourErr = "";
$toterr = 0;
if (isset($_POST['submit'])) {

  if (empty($_POST["Name"])) {
    $NameErr = "Name is required";
    $toterr++;
  } elseif (!preg_match("/^[a-zA-Z-' ]*$/", $_POST["Name"])) {
    $NameErr = "Only letters and white space allowed";
    $toterr++;
  } // check if name only contains letters and whitespace

  if (empty($_POST["Date"])) {
    $DateErr = "Date is required";
    $toterr++;
  }

  if (empty($_POST["Price"])) {
    $PriceErr = "Price is required";
    $toterr++;
  }

  if (empty($_POST["Flavour"])) {
    $FlavourErr = "Flavour is required";
    $toterr++;
  }

  if ($toterr == 0) {
    echo "inside test";

    $Name = $_POST['Name'];
    $Date = $_POST['Date'];
    $Price = $_POST['Price'];
    $Flavour = $_POST['Flavour'];
    $insertquery = "INSERT INTO cake_order (Name,Date,Price,Flavour) values ('$Name','$Date',$Price,'$Flavour')";


    $rslt = mysqli_query($conn, $insertquery);
  }
}
?>

<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>cake-order</title>
  <style>
    .error {
      color: #FF0000;
    }
    .ins{
      color: white;
      background-color: black;
     text-align: center;
     height: 35px;
     width: 50%;
     
    }
  </style>
</head>

<body>

  <form method="post" action="">
    <div class="ins">
      <h2>CAKE_ORDER:</h2>
    </div> <br>
    <input type="text" name="Name" placeholder="Name">
    <span class="error">* <?php echo $NameErr; ?></span>
    <input type="date" name="Date" placeholder="Date">
    <span class="error">* <?php echo $DateErr; ?></span>
    <input type="number" name="Price" placeholder="Price" min="300" max="2000">
    <span class="error">* <?php echo $PriceErr; ?></span>
    <select name="Flavour">
      <option value=""></option>
      <option value="Chocolate Cake"> Chocolate Cake</option>
      <option value="Coffee Cake">Coffee Cake</option>
      <option value="Pineapple">Pineapple</option>
    </select> <span class="error">* <?php echo $FlavourErr; ?></span>
    <br><br>
    <input type="reset" name="submit" value="Cancel">
    <input type="submit" name="submit" value="submit">

  </form>

  <?php
  $query = "SELECT * FROM cake_order";
  $rslt1 = mysqli_query($conn, $query);
  echo "<table border>
             <tr>
            <th>Id</th>
             <th>Name</th>
             <th>Date</th>
             <th>Price</th>
             <th>Flavour</th>
             </tr>";
  while ($row = mysqli_fetch_assoc($rslt1)) {
    echo "<tr>";
    echo "<td>" . $row['ID'] . "</td>";
    echo "<td>" . $row['Name'] . "</td>";
    echo "<td>" . $row['Date'] . "</td>";
    echo "<td>" . $row['Price'] . "</td>";
    echo "<td>" . $row['Flavour'] . "</td>";
    echo "</tr>";
  }
  echo "</table>";
  echo $row;


  ?>

</body>

</html>