<?php
$FirstName = $LastName = $Salary = $PhoneNo = $Email = $Designation = "";
$FirstNameErr = $LastNameErr = $SalaryErr = $PhoneNoErr = $EmailErr = $DesignationErr = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  if (empty($_POST["FirstName"])) {
    $FirstNameErr = "FirstName is required";
  } else {
    $FirstName = test_input($_POST["FirstName"]);
    // check if name only contains letters and whitespace
    if (!preg_match("/^[a-zA-Z-' ]*$/", $FirstName)) {
      $FirstNameErr = "Only letters and white space allowed";
    }
  }

  if (empty($_POST["LastName"])) {
    $LastNameErr = "LastName is required";
  } else {
    $LastName = test_input($_POST["LastName"]);
    if (!preg_match("/^[a-zA-Z-' ]*$/", $LastName)) {
      $LastNameErr = "Only letters and white space allowed";
    }
  }

  if (empty($_POST["Salary"])) {
    $SalaryErr = "Salary is required";
  } else {
    $Salary = (int)$Salary;
    $Salary = test_input($_POST["Salary"]);
   if (!is_numeric($Salary)) {
      $SalaryErr = "Invalid Salary format";
    }
  }

  if (empty($_POST["PhoneNo"])) {
    $PhoneNoErr = "PhoneNo is required";
  } else {
    $PhoneNo = test_input($_POST["PhoneNo"]);
    // check if e-mail address is well-formed
    if (!is_numeric($PhoneNo)) {
      $PhoneNoErr = "Invalid PhoneNo format";
    }
  }

  if (empty($_POST["Email"])) {
    $EmailErr = "Email is required";
  } else {
    $Email = test_input($_POST["Email"]);
    if (!filter_var($Email, FILTER_VALIDATE_EMAIL)) {
      $EmailErr = "Invalid Email format";
    }
  }

  if (empty($_POST["Designation"])) {
    $DesignationErr = "Designation is required";
  } else {
    $Designation = test_input($_POST["Designation"]);
  }
}
function test_input($data)
{
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}
?>

<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <style>
    .error {
      color: #FF0000;
    }
  </style>
</head>

<body>

  <legend>Employes:</legend>


  <p><span class="error">* required field</span></p>
  <form method="post" action="">
    First Name: <input type="text" name="FirstName" placeholder="Enter your name">
    <span class="error">* <?php echo $FirstNameErr; ?></span>
    <br><br>
    Last Name: <input type="text" name="LastName" placeholder="Enter your last name">
    <span class="error">* <?php echo $LastNameErr; ?></span>
    <br><br>
    Salary: <input type="number" name="Salary"> <span class="error">* <?php echo $SalaryErr?></span>
    <br><br>
    Phone No: <input type="tel" name="PhoneNo">
    <span class="error">* <?php echo $PhoneNoErr; ?></span>
    <br><br>
    Email: <input type="text" name="Email">
    <span class="error">* <?php echo $EmailErr; ?></span>
    <br><br>
    Designation: <select name="Designation">
      <option value="Accountant">Accountant</option>
      <option value="Marketting">Marketting</option>
      <option value="Salesman">Salesman</option>
      <option value="web designer and developer">web designer and developer</option>
      <option value="graphics designer">graphics designer</option>
      <option value="App Develope">App Developer</option>
      <option value="Android Developer">Android Developer</option>
      <option value="Game Developer">Game Developer</option>
    </select><span class="error">* <?php echo $DesignationErr; ?></span>
    <br><br>
    <input type="reset" name="submit" value="Cancel">
    <input type="submit" name="submit" value="submit" style="margin-left:50px;">

  </form>

</body>

</html>