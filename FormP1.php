<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FormP1</title>
    <style>
       .error {color: #FF0000;}
    </style>
</head>
<body>
<fieldset style="width:41%;">
    <?php
       $username = $password = $conformpassword = $PreferredLanguage = $SecurityQuestions = $SecurityAnswer = "";
       $usernameErr = $passwordErr = $conformpasswordErr = $PreferredLanguageErr = $SecurityQuestionsErr = $SecurityAnswerErr = "";
   
       if ($_SERVER["REQUEST_METHOD"] == "POST") {
        if (empty($_POST["username"])) {
          $usernameErr = "Username is required";
        } else {
            $username = test_input($_POST["username"]);
          // check if name only contains letters and whitespace
          if (!preg_match("/^[a-zA-Z-' ]*$/",$username)) {
            $usernameErr = "Only letters and white space allowed";
          }
        }
         
        if (empty($_POST["password"])) {
            $passwordErr = "Password is required";
          } else {
            $password = test_input($_POST["password"]);
          }

       if (empty($_POST["conformpassword"])) {
            $conformpasswordErr = "Conformpassword is required";
          } else {
            $conformpassword = test_input($_POST["conformpassword"]);
          }  

       if (empty($_POST["PreferredLanguage"])) {
            $PreferredLanguageErr = "PreferredLanguage is required";
          } else {
            $PreferredLanguage = test_input($_POST["PreferredLanguage"]);
          }      
          
       if (empty($_POST["SecurityQuestions"])) { 
            $SecurityQuestionsErr = "SecurityQuestions is required";
          } else {
            $SecurityQuestions = test_input($_POST["SecurityQuestions"]);
          }  
          
       if (empty($_POST["SecurityAnswer"])) {
            $SecurityAnswer = "";
          } else {
            $SecurityAnswer = test_input($_POST["SecurityAnswer"]);
          }
       }
       function test_input($data) {
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
      } 
    
    ?>   
     <div><h1  style="display: inline;">Create Your account</h1> <span style="color: orange; margin-left: 180px;"><u>SIGN IN</u></span></div><br>

     <div style=" padding:15px; font-size:22px;">
        <a href="FormP1.php" style="padding:16px;text-decoration: none; color: black;"><b>Basic Details</b></a> 
            <a href="FormP2.php" style="padding:22px;text-decoration: none; color: black;"><b>Personal Details</b></a> 
                <a href="FormP3.php" style="padding:22px;text-decoration: none; color: black"><b>Address</b></a>
           </div><hr><br>
    <p><b>GARBAGE/JUNK VALUES IN PROFILE MAY LEAD TO DEACTIVATION</b><br>
        Please use a valid E-Mail ID and mobile number in registration.</p>

    <p><span class="error">* required field</span></p>
<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">  
  Username:<input type="text" name="username" value="<?php echo $username;?>" style="height:25px;width:400px;">
       <span class="error">* <?php echo $usernameErr;?></span>
  <br><br>
  Password:<input type="password" name="password" value="<?php echo $password;?>"style="height:25px;width:400px;">
       <span class="error">* <?php echo $passwordErr;?></span>
  <br><br>
  Conformpassword: <input type="password" name="conformpassword" value="<?php echo $conformpassword;?>"style="height:25px;width:340px;">
       <span class="error">* <?php echo $conformpasswordErr;?></span>
  <br><br>
  <select name="PreferredLanguage" id="Language"  style="width:470px;height:33px;" value="<?php echo $PreferredLanguage;?>">
            <option value="Preferred Language"  >Preferred Language</option>
            <option value="Hindi">Hindi</option>
            <option value="English">English</option>
            <option value="Gujarati">Gujarati</option>
        </select><span class="error">* <?php echo $PreferredLanguageErr;?></span>
  <br><br>
        <select name="SecurityQuestions" id="Security Questions"  style="width:470px;height:33px;" value="<?php echo $SecurityQuestions;?>">
            <option value="Security Questions">Security Questions</option>
            <option value="1">What is your pet name?</option>
            <option value="2"> What was the name of your first school?</option>
            <option value="3"> Who was your Childhood hero?</option>
            <option value="4"> What is your favorite past-time?</option>
            <option value="5">What is your all time favorite sports team?</option>
            <option value="6"> What is your fathers middle name?</option>
            <option value="7"> What make was your first car or bike?</option>
            <option value="8"> Where did you first meet your spouse?</option>
        </select><span class="error">* <?php echo $SecurityQuestionsErr;?></span>
  <br><br>
  SecurityAnswer:  <input type="text" name="SecurityAnswer" value="<?php echo  $SecurityAnswer;?>" style="height:25px;width:355px;">
        <span class="error"> <?php echo $SecurityAnswerErr;?></span>
  <br><br>
        <input type="reset" name="submit" value="cancel"style="margin-left:10px;height:35px;width: 70px;">  
        <input type="submit" name="submit" value="Continue ->" style="background-color: #ff6600; color: white;height:35px;margin-left:295px;">
          <br><br>&nbsp;
          <button type="submit" formaction="FormP2.php" style="margin-left:200px;">Next</button>
  </form>
    
<?php
  echo "<h2>Your Input:</h2>";
   echo "<br>";
   echo $username;
   echo "<br>";
   echo $password;
   echo "<br>";
   echo $conformpassword;
   echo "<br>";
   echo $PreferredLanguage;
   echo "<br>";
   echo $SecurityQuestions;
   echo "<br>";
   echo $SecurityAnswer;
   
?>
</fildset>
 </body>
</html> 