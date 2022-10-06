


<!doctype html>
<html lang="ar" dir="ltr">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.rtl.min.css" integrity="sha384-OXTEbYDqaX2ZY/BOaZV/yFGChYHtrXH2nyXJ372n2Y8abBhrqacCEe+3qhSHtLjy" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.rtl.min.css" integrity="sha384-OXTEbYDqaX2ZY/BOaZV/yFGChYHtrXH2nyXJ372n2Y8abBhrqacCEe+3qhSHtLjy" crossorigin="anonymous">

    <title>My Form</title>
  </head>
  <body>
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">Class Data</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="#">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Link</a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Dropdown
          </a>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="#">Action</a></li>
            <li><a class="dropdown-item" href="#">Another action</a></li>
            <li><hr class="dropdown-divider"></li>
            <li><a class="dropdown-item" href="#">Something else here</a></li>
          </ul>
        </li>
        <li class="nav-item">
          <a class="nav-link disabled">Disabled</a>
        </li>
      </ul>
      <form class="d-flex" role="search">
        <input class="form-control ms-2" type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-success" type="submit">Search</button>
      </form>
    </div>
  </div>
</nav>

<?php
if(isset($_POST)){
    $name=$_POST["name"];
    $number=$_POST["number"];
   

   //connection to the databse,,,
$servername = "localhost";
$username = "root";
$password = "";
$database = "mydata";

// Create connection
$conn = new mysqli($servername, $username, $password,$database);

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
//echo "Connected successfully";
//sql query

$sql="INSERT INTO `class` (  `NAME`, `ROLL NO.`, `DATE`) VALUES ( '$name ', '$number', current_timestamp())";

if (mysqli_query($conn, $sql)) {
  echo'
  <div class="alert alert-success alert-dismissible fade show" role="alert">  
    <strong>Success!</strong> Your Data Will Be Successfully Sent..!!.
    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
  </div>';
} else {
  echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

}
?>
<!--form-->
<div class="container mt-3" >
<h3>Please Enter Your Email And Password</h3>
<form action="myform.php" method="post">
<div class="mb-3">
    <label for="text" class="form-label">Name</label>
    <input type="text" class="form-control" id="name" name="name">
  </div>
  <div class="mb-3">
    <label for="MobileN" class="form-label">ROLL No.</label>
    <input type="number" class="form-control" id="number" name="number">
  </div>
  
  <button type="submit" class="btn btn-primary">Submit</button>
</form>
</div>

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.min.js" integrity="sha384-7VPbUDkoPSGFnVtYi0QogXtr74QeVeeIs99Qfg5YCF+TidwNdjvaKZX19NZ/e6oz" crossorigin="anonymous"></script>
    -->
    
  </body>
</html>







<?php 
function missing_number($num)
{
 // construct a new array
$new_arr = range($num[0],max($num));                                                    
// use array_diff to find the missing elements 
return array_diff($new_arr, $num);
}
print_r(missing_number(array(1,3,5,7,9)));
// print_r(missing_number(array(10,12,14,16,18)));
?>


<?php
            echo "<h2>Your Input:</h2>";
            echo $FirstName;
            echo "<br>";
            echo $LastName;
            echo "<br>";
            echo $Salary;
            echo "<br>";
            echo $PhoneNo;
            echo "<br>";
            echo $Email;
            echo "<br>";
            echo $Pin;
            echo "<br>";
            echo $gen;
            echo "<br>";
            echo $Email;
            echo "<br>";
            echo $Designation;
            echo "<br>";
  ?> 

/ if ($_SERVER["REQUEST_METHOD"] == "POST") {
  //   if (empty($_POST['FirstName'])) {
  //       $FirstNameErr = 'first name should be not empty';
  //   } elseif (!preg_match("/^[a-zA-Z' ]*$/", $_POST['FirstName'])) {
  //       $FirstNameErr = 'only enter alphabet ';

  //   } elseif (empty($_POST['LastName'])) {
  //       $LastNameErr = 'last name should be not empty ';
  //   } elseif (!preg_match("/^[a-zA-Z' ]*$/", $_POST['LastName'])) {
  //       $LastNameErr = 'only enter alphabet ';

  //   } elseif (empty($_POST['Salary'])) {
  //       $SalaryErr = 'enter your  salary ';
  //   } elseif (!preg_match("/\d/", $_POST['Salary'])) {
  //       $SalaryErr = 'salary must be in digit';

  //   } elseif (empty($_POST['Email'])) {
  //       $EmailErr = 'email should be not empty';
  //   } elseif (!filter_var($_POST['Email'], FILTER_VALIDATE_EMAIL)) {
  //       $EmailErr = 'email invalid'; }

  // if (empty($_POST["gen"])) {
  //   $genErr = "Gender is required";
  // } else {
  //   $gen = test_input($_POST["gen"]);
  // }

  // if (empty($_POST["PhoneNo"])) {
  //   $PhoneNoErr = "PhoneNo is required";
  // } else {
  //   $PhoneNo = test_input($_POST["PhoneNo"]);
  //   // check if e-mail address is well-formed
  //   if (!is_numeric($PhoneNo)) {
  //     $PhoneNoErr = "Invalid PhoneNo format";
  //   }
  // }

  // if (empty($_POST["Designation"])) {
  //   $DesignationErr = "Designation is required";
  // } else {
  //   $Designation = test_input($_POST["Designation"]);
  // }







<?php 
function missing_number($num)
{
 // construct a new array
$new_arr = range($num[0],max($num));                                                    
// use array_diff to find the missing elements 
return array_diff($new_arr, $num);
}
print_r(missing_number(array(1,3,5,7,9)));
// print_r(missing_number(array(10,12,14,16,18)));
?>