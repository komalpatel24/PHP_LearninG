<?php
$FirstName = $LastName = $Salary = $PhoneNo = $Email = $gen = $Designation = "";
$FirstNameErr = $LastNameErr = $SalaryErr = $PhoneNoErr = $EmailErr = $genErr = $DesignationErr = "";

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

  if (empty($_POST["gen"])) {
    $genErr = "Gender is required";
  } else {
    $gen = test_input($_POST["gen"]);
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
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
  <title>Document</title>
  <style>
    .error {
      color: #FF0000;
    }
    body{
      background-image: url("emoji/a1.jpg");
      height: 90vh;
    background-repeat: no-repeat;
    background-size: cover;
    background-attachment: fixed;
      
    }
  </style>
</head>

<body>


    <div class="container mt-5  text-white border border-light  ">
        <form method="POST" action="" enctype="multipart/form-data">
            <h1 class="text-center text-danger">Register</h1>
            <div class="row">
               <div class="col-lg-6 ">

                  <!-- <div class="form-group"> -->
                      <label for="">First Name:</label>
                      <input type="text" class="form-control" name="FirstName" placeholder="Enter your name">
                      <span class="error">* <?php echo $FirstNameErr; ?></span>
                  <!-- </div>     -->
                
                  <!-- <div class="form-group"> -->
                    <label for="">Salary:</label>
                    <input type="number" class="form-control" name="Salary"> 
                    <span class="error">* <?php echo $SalaryErr?></span>
                  <!-- </div> -->
                  <!-- <div class="form-group"> -->
                      <label for="">Email:</label>
                    <input type="text" class="form-control" name="Email">
                    <span class="error">* <?php echo $EmailErr; ?></span>
                  <!-- </div> -->

              </div>
          </div>

        <div class="row">
            <div class="col-lg-6 ">
                <!-- <div class="form-group"> -->
                  <label for="">Last Name:</label>
                  <input type="text" class="form-control" name="LastName" placeholder="Enter your last name">
                  <span class="error">* <?php echo $LastNameErr; ?></span>
                <!-- </div> -->

                <!-- <div class="form-group"> -->
                    <label for="">Phone No:</label>
                    <input type="tel" class="form-control" name="PhoneNo">
                    <span class="error">* <?php echo $PhoneNoErr; ?></span>
                <!-- </div> -->
          
                <label for="">Gender <span class="error">* <?php echo $genErr; ?></span>
                        <div class="form-check">
                            <label for="" class="form-check-label">
                                <input type="radio" value="male" class="form-check-input" name="gender" <?php checked('gender', 'male', 'checked'); ?>> male
                            </label>
                        </div>
                        <div class="form-check">
                            <label for="" class="form-check-label">
                                <input type="radio" value="female" class="form-check-input" name="gender" <?php checked('gender', 'female', 'checked'); ?>> female
                            </label>
                        </div>
                 </label>
             </div>
      </div>

          <div class="row">
             <div class="col-lg-6 ">
                  <div class="form-ckeck">
                    <label for="">Designation:</label>
                    <select class="form-control" name="Designation">
                      <option value="Accountant">Accountant</option>
                      <option value="Marketting">Marketting</option>
                      <option value="Salesman">Salesman</option>
                      <option value="web designer and developer">web designer and developer</option>
                      <option value="graphics designer">graphics designer</option>
                      <option value="App Develope">App Developer</option>
                      <option value="Android Developer">Android Developer</option>
                      <option value="Game Developer">Game Developer</option>
                    </select><span class="error">* <?php echo $DesignationErr; ?></span>
                  </div>
             </div>
              <div class="col-lg-6 ">
                  <input type="reset" name="submit" value="Cancel">
                  <input type="submit" name="submit" value="submit" style="margin-left:50px;">
              </div>
          </div>

        </form>
  </div>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
</body>

</html>