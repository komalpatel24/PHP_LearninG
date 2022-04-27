<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FormP3</title>
    <style>
       .error {color: #FF0000;}
    </style>
</head>
<body>
<fieldset style="width: 50%;">   
<?php
    $Flat = $Street = $Area = $PinCode = $State = $Phone = $SelectaCity = $SelectaPostoffice =  $Choic = $Note = $Note2 ="";
    $FlatErr = $StreetErr = $AreaErr = $PinCodeErr = $StateErr = $PhoneErr = $SelectaCityErr = $SelectaPostofficeErr =  $ChoicErr = $NoteErr = $Note2Err ="";

    if ($_SERVER["REQUEST_METHOD"] == "POST") {

        if (empty($_POST["Flat"])) {
            $FlatErr = "Flat is required";
        } else {
            $Flat = test_input($_POST["Flat"]);
        }

        if (empty($_POST["Street"])) {
            $StreetErr = "Street is required";
        } else {
            $Street = test_input($_POST["Street"]);
        } 

        if (empty($_POST["Area"])) {
            $AreaErr = "Area is required";
        } else {
            $Area = test_input($_POST["Area"]);
        } 

        if (empty($_POST["PinCode"])) {
            $PinCodeErr = "PinCode is required";
        } else {
            $PinCode = test_input($_POST["PinCode"]);
        } 

        if (empty($_POST["State"])) {
            $StateErr = "State is required";
        } else {
            $State = test_input($_POST["State"]);
        } 

        if (empty($_POST["Phone"])) {
            $PhoneErr = "Phone is required";
        } else {
            $Phone = test_input($_POST["Phone"]);
        } 

        if (empty($_POST["SelectaCity"])) {
            $SelectaCityErr = "SelectaCity is required";
        } else {
            $SelectaCity = test_input($_POST["SelectaCity"]);
        } 

        if (empty($_POST["SelectaPostoffice"])) {
            $SelectaPostoffice = "";
        } else {
            $SelectaPostoffice = test_input($_POST["SelectaPostoffice"]);
        }

        if (empty($_POST["Choic"])) {
            $ChoicErr = "Choic is required";
        } else {
            $Choic = test_input($_POST["Choic"]);
        } 

        if (empty($_POST["Note"])) {
            $Note = "";
        } else {
            $Note = test_input($_POST["Note"]);
        }

        if (empty($_POST["Note2"])) {
            $Note2Err = "This is required";
        } else {
            $Note2 = test_input($_POST["Note2"]);
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
     <p><span class="error">* required field</span></p>
<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>"> 

        Flat/Door/Block No.: <input type="text" name="Flat/Door/Block No." value="<?php echo $Flat;?>" style="height:24px;width:150px;">
        <span class="error">* <?php echo $FlatErr;?></span>&nbsp;&nbsp;

        Street/Lane(optional):  <input type="text"  name="Street/Lane(optional)" value="<?php echo $Street;?>" style="height:24px;width:150px;" >
        <span class="error">* <?php echo $StreetErr;?></span>&nbsp;
                <br><br>
        Area/Locality(optional): <input type="text"  name="Area/Locality(optional)" value="<?php echo $Area;?>" style="height:24px;width:150px;">
        <span class="error">* <?php echo $AreaErr;?></span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;

        Pin Code: <input type="number" name="Pin Code" value="<?php echo $PinCode;?>" style="height:24px;width:150px;">
         <span class="error">* <?php echo $PinCodeErr;?></span>&nbsp;
                <br><br>
        State: <input type="text"  name="State" value="<?php echo $State;?>" style="height:24px;width:150px;">
        <span class="error">* <?php echo $StateErr;?></span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                                            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                                            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        Phone: <input type="number" name="Phone" value="<?php echo $Phone;?>" min="10" max="10" style="height:24px;width:150px;">
            <span class="error">* <?php echo $PhoneErr;?></span>&nbsp;
       
            <br><br>
        
        <select name="Select a City"  value="<?php echo $SelectaCity;?>" style="height:29px;width:265px;margin-left:35px;">
            <option value="Select a City">Select a City</option>
            <option value="Select a City">Select a City</option>
        </select> <span class="error">* <?php echo $SelectaCityErr;?></span>&nbsp;
            
        <select name="Select a Post office" value="<?php echo $SelectaPostoffice;?>" placeholder="Select a Post office" style="height:29px;width:265px;margin-left:36px;">
            <option value="Select a Post office">Select a Post office</option>
            <option value="Select a Post office">Select a Post office</option>
        </select><span class="error">* <?php echo $SelectaPostofficeErr;?></span>&nbsp;
       
            <br><br>
            &nbsp;&nbsp;<b>Copy Residence to office Address</b>
            <br>
            &nbsp;&nbsp;&nbsp; <input type="radio" name="Choice"<?php if (isset($gender) && $gender==">Yes") 
              echo "checked";?> value="Yes"> Yes
        <input type="radio" name="Choice"<?php if (isset($gender) && $gender==">No") 
              echo "checked";?> value="No"> No
             <span class="error">* <?php echo $ChoicErr;?></span> 
                <br><br>
        <input type="checkbox" name="Note"value="<?php echo $Note;?>" style="margin-left:20px;"> 
           <span class="error"> <?php echo $NoteErr;?></span>
             &nbsp; Please inform me about IRCTC Co-branded credit card through Phone/Email/ <br>
             &nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; SMS(Optional)
            <br><br>
                
            &nbsp; &nbsp; &nbsp;&nbsp;&nbsp; &nbsp; &nbsp;Book free Railway tickets using Reward Points and Enjoy Zero payment 
                <br>  &nbsp; &nbsp;&nbsp; &nbsp; &nbsp;&nbsp; gateway charge with IRCTC SBI Card
            <br><br>
        
        <input type="checkbox" name="Note2"value="<?php echo $Note2;?>"style="margin-left:20px;">
            <span class="error">* <?php echo $Note2Err;?></span>
          &nbsp; I have read and agree with the <a href="https://contents.irctc.co.in/en/Terms%20and%20conditions.pdf"> Terms and Conditions.</a> and also agree to<br>
          &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp; &nbsp;  receive promotional emails/SMS/offers/announcements from<br>
          &nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;  IRCTC & associated partners
               
            <br><br>
                   
        <input type="reset" name="submit" value="cancel"style="margin-left:60px;height:35px;width:70px;">  
        <input type="submit" name="submit" value="Continue ->" style="background-color: #ff6600; color: white;height:35px;margin-left:350px;">
</form>

<?php
    echo "<h2>Your Input:</h2>";
     echo $Flat;
     echo "<br>";
     echo $Street;
     echo "<br>";
     echo $Area;
     echo "<br>";
     echo $PinCode;
     echo "<br>";
     echo $State;
     echo "<br>";
     echo $Phone;
     echo "<br>";
     echo $SelectaCity;
     echo "<br>";
     echo $SelectaPostoffice;
     echo "<br>";
     echo $Choic;
     echo "<br>";
     echo $Note;
     echo "<br>";
     echo $Note2;
?>
</fieldset>           
</body>
</html>