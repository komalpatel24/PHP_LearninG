<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">

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
    .container{
        background-color: rgba(0, 0, 0, 0.8);
    }
  </style>
</head>
<body>

    <?php

        include 'config.php';

            $username = $password = "";
            $usernameErr = $passwordErr = "";

            

            if ($_SERVER["REQUEST_METHOD"] == "POST") {
                if (empty($_POST["username"])) {
                  $usernameErr = "username is required";
                } else {
                  // $username = test_input($_POST["username"]);
                  if (!preg_match("/^[a-zA-Z-' ]*$/", $username = "admin")) {
                    // $usernameErr = "Username is Not Valid";
                    echo $username;
                  }else{
                  $usernameErr = "username is not valid";
                  }
                }

                if (empty($_POST["password"])) {
                  $passwordErr = "Password is required";
              } else {
                  if (!preg_match("/.*^(?=.{8,20})(?=.*[a-z])(?=.*[A-Z])(?=.*[0-9]).*$/", $password = "361999")) {
                    echo $password;
                  }else{
                      $passwordErr = "password is not valid";
                  } 
                }
            }

                // if (empty($password)) {
                //     $passwordErr = 'Password should be not empty';
                // } elseif (!preg_match("/[A-Z]/", $password)) {
                //     $passwordErr = 'Password should contain at least one Capital Letter';
                // } elseif (!preg_match("/[a-z]/", $password)) {
                //     $passwordErr = 'Password should contain at least one small Letter';
                // } elseif (!preg_match("/\d/", $password)) {
                //     $passwordErr = 'Password should contain at least one digit';
                // } elseif (!preg_match("/\W/", $password)) {
                //     $passwordErr = 'Password should contain at least one special character';
                // } elseif (strlen($password) < 6) {
                //     $passwordErr = 'Password should be 6 characters';
                // }

            
            
        function test_input($data)
        {
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
        }
     ?>


    <div class="container mt-5 border border-light text-white ">
        <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
            <h1 class="text-center p-3"> Login</h1>
                    <div class="form-group">
                        <label for="">User Name :</label>
                        <input type="text" class="form-control" name="username" placeholder="Enter your name">
                        <span class="error">* <?php echo $usernameErr; ?></span>
                    </div>    
                <div class="form-group">
                        <label for="">Password :</label>
                        <input class="form-control" type="password" id="password" name="password" placeholder="password">
                        <span class="error">* <?php echo $passwordErr; ?></span>
                </div>
            <div class="form-check showPassword">
                <input type="checkbox" class="form-check-input" id="asignInPass" onclick="KIDS()" >
                <label for="asignInPass" class="form-check-label">show password</label>
            </div>
            <input type="submit" name="submit" value='Submit' class="btn btn-info ">
            <input type="reset" name="submit"  value='Reset' class="btn btn-danger">
            <br><br>
        </form>

</div>

      <script>
         function KIDS(){
              var K = document.getElementById("password");
                 if(K.type === "password"){
                    document.getElementById("password").setAttribute("type", "text"); 
                 } else {
                document.getElementById("password").setAttribute("type", "password"); 
               }
             }
    </script>

<?php
echo "<h2>Your Input:</h2>";
echo $username;
echo "<br>";
echo $password;
?>

</body>
</html>