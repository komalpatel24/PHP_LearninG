<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FormP2</title>
    <style>
       .error {color: #FF0000;}
    </style>
</head>
<body>
<fieldset style="width: 60%;">
 <?php
    $FirstName = $MiddleName = $LastName = $SelectOccupation = $Date = $Status = $india = $gender = $Email = $Mobile = $SelectaNationality = "";
    $FirstNameErr = $MiddleNameErr = $LastNameErr = $SelectOccupationErr = $DateErr = $StatusErr = $indiaErr = $genderErr = $EmailErr = $MobileErr = $SelectaNationalityErr = "";

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        if (empty($_POST["FirstName"])) {
          $FirstNameErr = "FirstName is required";
        } else {
            $FirstName = test_input($_POST["FirstName"]);
          // check if name only contains letters and whitespace
          if (!preg_match("/^[a-zA-Z-' ]*$/",$FirstName)) {
            $FirstNameErr = "Only letters and white space allowed";
          }
        }
    
    if (empty($_POST["MiddleName"])) {
        $MiddleNameErr = "MiddleName is required";
      } else {
          $MiddleName = test_input($_POST["MiddleName"]);
        // check if name only contains letters and whitespace
        if (!preg_match("/^[a-zA-Z-' ]*$/",$MiddleName)) {
          $MiddleNameErr = "Only letters and white space allowed";
        }
      }
  
    if (empty($_POST["LastName"])) {
    $LastNameErr = "LastName is required";
  } else {
      $LastName = test_input($_POST["LastName"]);
    // check if name only contains letters and whitespace
    if (!preg_match("/^[a-zA-Z-' ]*$/",$LastName)) {
      $LastNameErr = "Only letters and white space allowed";
    }
  }

   if (empty($_POST["SelectOccupation"])) {
      $SelectOccupationErr = "SelectOccupation is required";
  } else {
      $SelectOccupation= test_input($_POST["SelectOccupation"]);
  }

   if (empty($_POST["Date"])) {
      $DateErr = "Date is required";
  } else {
      $Date = test_input($_POST["Date"]);
  }

   if (empty($_POST["Status"])) {
      $StatusErr = "Status is required";
  } else {
      $Status = test_input($_POST["Status"]);
  }

   if (empty($_POST["india"])) {
      $india = "";
  } else {
      $india = test_input($_POST["india"]);
  }

   if (empty($_POST["gender"])) {
      $genderErr = "gender is required";
   } else {
      $gender = test_input($_POST["gender"]);
   }

   if (empty($_POST["Email"])) {
    $EmailErr = "Email is required";
  } else {
    $Email = test_input($_POST["Email"]);
    // check if e-mail address is well-formed
    if (!filter_var($Email, FILTER_VALIDATE_EMAIL)) {
      $EmailErr = "Invalid Email format";
    }
  }

  if (empty($_POST["Mobile"])) {
    $MobileErr = "Mobile is required";
 } else {
  $Mobile = test_input($_POST["Mobile"]);
 }


   if (empty($_POST["SelectaNationality"])) {
      $SelectaNationalityErr = "SelectaNationality is required";
   } else {
      $SelectaNationality = test_input($_POST["SelectaNationality"]);
   }
}

 function test_input($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
  } 
 ?>   


<div><h1  style="display: inline;">Create Your account</h1> <span style="color: orange; margin-left: 350px;"><u>SIGN IN</u></span></div><br>
      
     <div style=" padding:15px; font-size:22px;">
        <a href="FormP1.php" style="padding:16px;text-decoration: none; color: black;"><b>Basic Details</b></a> 
            <a href="FormP2.php" style="padding:22px;text-decoration: none; color: black;"><b>Personal Details</b></a> 
                <a href="FormP3.php" style="padding:22px;text-decoration: none; color: black"><b>Address</b></a>
           </div><hr><br>

     <p><span class="error">* required field</span></p>
<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
First Name: <input type="text" name="First Name" value="<?php echo $FirstName;?>" style="height:23px;">
            <span class="error">* <?php echo $FirstNameErr;?></span>&nbsp;

Middle Name: <input type="text" name="Middle Name" value="<?php echo $MiddleName;?>"style="height:23px;">
            <span class="error">* <?php echo $MiddleNameErr;?></span>  &nbsp; 
            
Last Name: <input type="text" name="Last Name" value="<?php echo $LastName;?>"style="height:23px;">
            <span class="error">* <?php echo $LastNameErr;?></span> &nbsp; 
    <br><br>    
    <p style="font-size:20px"><b>Info!Please provide your exact name as per Aadhaar to avail  
            Aadhaar based <br> benefits on IRCTC eTicketing website.</b></p>
            <br>
<select name="Select Occupation"  id="Select Occupation" value="<?php echo $SelectOccupation;?>" style="width:340px;height:29px;margin-left:15px">
            <option value="Select Occupation">Select Occupation</option>
            <option value="1">GOVERNMENT</option>
            <option value="2">PUBLIC</option>
            <option value="3"> PRIVATE</option>
            <option value="4"> PROFESSIONAL</option>
            <option value="5">SELF EMPLOYED</option>
            <option value="6"> STUDENT</option>
            <option value="7">OTHER</option>
</select> <span class="error">* <?php echo $SelectOccupationErr;?></span> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
Date: <input type="date" id="Date of Birth" name="Date of Birth" value="<?php echo $Date;?>" style="width:340px;height:27px;">
            <span class="error">* <?php echo $DateErr;?></span>
    <br><br> 
    
    &nbsp;&nbsp;&nbsp; Status: <input type="radio" name="Status" <?php if (isset($gender) && $gender==">Married") 
              echo "checked";?> value="Married">Married
        <input type="radio" name="Status" <?php if (isset($gender) && $gender=="Unmarried") 
              echo "checked";?> value="Unmarried">Unmarried
        <span class="error">* <?php echo $StatusErr;?></span> 

<select name="india" id="india" value="<?php echo $india;?>" style="width:346px;height:31px;margin-left:190px">
            <option value="1">India</option>
            <option value="2">Albania</option>
            <option value="3">Algeria</option>
            <option value="4">Bangladesh</option>
            <option value="5">Barbados</option>
            <option value="6">Belarus</option>
            <option value="7">Brazil</option>
            <option value="8">Canada</option>
            <option value="9">China</option>
            <option value="10">Fiji</option>
            <option value="11">Finland</option>
            <option value="12">France</option>
            <option value="13">Germany</option>
            <option value="14">Greece</option>
            <option value="15">Russia</option>
            <option value="16">Iran</option>
            <option value="17">Italy</option>
            <option value="18">Japan</option>
            <option value="19">North Korea</option>
</select><span class="error"> <?php echo $indiaErr;?></span>
     <br><br>


 &nbsp;&nbsp; Gender: <input type="radio" name="gender" <?php if (isset($gender) && $gender=="Male") 
          echo "checked";?> value="female">Male
        <input type="radio" name="gender" <?php if (isset($gender) && $gender=="Female") 
          echo "checked";?> value="male">Female
        <input type="radio" name="gender" <?php if (isset($gender) && $gender=="Transgender") 
           echo "checked";?> value="other">Transgender  
        <span class="error">* <?php echo $genderErr;?></span>  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        
   E-mail: <input type="text" name="Email" value="<?php echo $Email;?>" style="width:343px;height:25px;">
        <span class="error">* <?php echo $EmailErr;?></span>
  <br><br>
  <input type="number" id="num" name="num" value="91"  style="background-color: rgb(134, 147, 160); width:30px;height:25px;"  readonly >
        <input type="Mobile" id="Mobile" name="Mobile" value="<?php echo $Mobile;?>" min="10" max="10" style="width:150px;height:25px;margin-left:17px;">
           <span class="error">* <?php echo $MobileErr;?></span>
<select type="text" id="Select a Nationality" name="Select a Nationality" value="<?php echo $SelectaNationality;?>" style="width:347px;height:31px;margin-left:209px">
            <option value="01">Select a Nationality</option>
            <option value="1">India</option>
            <option value="2">Albania</option>
            <option value="3">Algeria</option>
            <option value="4">Bangladesh</option>
            <option value="5">Barbados</option>
            <option value="6">Belarus</option>
            <option value="7">Brazil</option>
            <option value="8">Canada</option>
            <option value="9">China</option>
            <option value="10">Fiji</option>
            <option value="11">Finland</option>
            <option value="12">France</option>
            <option value="13">Germany</option>
            <option value="14">Greece</option>
            <option value="15">Russia</option>
            <option value="16">Iran</option>
            <option value="17">Italy</option>
            <option value="18">Japan</option>
            <option value="19">North Korea</option>
</select><span class="error">* <?php echo $SelectaNationalityErr;?></span>
    <br><br><br>


        <input type="reset" value="Back"style="margin-left:40px;height:35px;width:70px;"> 
        <input type="submit" value="Continue ->" style="background-color: #ff6600; color: white;margin-left:490px;height:35px;">
       <br><br>
       <button type="submit" formaction="FormP3.php" style="margin-left:200px;">Next</button>
</form>   
<?php
  echo "<h2>Your Input:</h2>";
  echo $FirstName;
  echo "<br>";
  echo $MiddleName;
  echo "<br>";
  echo $LastName;
  echo "<br>";
  echo $SelectOccupation;
  echo "<br>";
  echo $Date;
  echo "<br>";
  echo $Status;
  echo "<br>";
  echo $india;
  echo "<br>";
  echo $gender;
  echo "<br>";
  echo $Email;
  echo "<br>";
  echo $Mobile;
  echo "<br>";
  echo $SelectaNationality;
?>        
</fieldset>
</body>
</html>