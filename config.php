<?php
# connect to database
$conn = mysqli_connect('localhost', 'root', '');

# create database if not exist, else select database
if ($conn) { 
    if (!mysqli_select_db($conn,'test1')) {
        $createDB = "CREATE DATABASE test1";  
        if(mysqli_query($conn,$createDB)){
            mysqli_select_db($conn,"test1");
        }
    }
}else{
    echo mysqli_connect_error();
    
}

?>