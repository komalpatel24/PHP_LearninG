
    
   <?php
        include 'config.php';
        $FirstNameErr = $LastNameErr = "";

        if (isset($_POST['submit'])) {

            $selectTable = "SELECT * FROM stud";
      
     if (!mysqli_query($conn, $selectTable)) {
          $sql = "CREATE TABLE stud (
            id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
            FirstName VARCHAR(30) NOT NULL,
            LastName VARCHAR(30) NOT NULL)";
            if (!mysqli_query($conn, $sql)) {
                echo mysqli_error($conn);
            }
            
        $FirstName = $_POST['FirstName'];
        $LastName = $_POST['LastName'];

        $sql = "INSERT INTO stud ('FirstName', 'LastName') VALUES ('$FirstName','$LastName')";

        if ($conn->query($sql) === TRUE) {
        echo "New record created successfully";
        } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
        }
      }
        $conn->close();
      
        }
    ?>

<!DOCTYPE html>
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
    button{
      margin-left: 10%;
    }
    .container{
        background-color: rgba(0, 0, 0, 0.7);
    }
  </style>
</head>
<body>
    
   <div class="container mt-5   border border-light text-white ">
        <form method="POST" action="" enctype="multipart/form-data"> <br>
            <h1 class="text-center ">Register</h1> <br> <br>
            <div class="row">
                <div class="col-lg-12 ">
                    <div class="form-group">
                        <label for="">First Name :</label>
                        <input type="text" class="form-control" name="FirstName" placeholder="Enter your name">
                        <span class="error">* <?php echo $FirstNameErr; ?></span>
                    </div>    
                </div>
                <div class="col-lg-12">
                    <div class="form-group">
                    <label for="">Last Name :</label>
                    <input type="text" class="form-control" name="LastName" placeholder="Enter your last name">
                    <span class="error">* <?php echo $LastNameErr; ?></span>
                    </div>
                </div>
          </div>
          <div class="col-lg-6 mt-4 mb-5">
                  <button type="reset" name="reset" value="resrt">Reset</button>
                  <button type="submit" name="submit" value="submit">Submit</button>
              </div>
          
      </form>
   </div>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>

</body>
</html>