<?php
 $conn = mysqli_connect("localhost" ,"root" , "");
 if ($conn) {
    
    if (!mysqli_select_db($conn, "event")) {
       
        $query = "CREATE DATABASE event";

        $rslt = mysqli_query($conn, $query);
    
        if ($rslt) {
           
            mysqli_select_db($conn, "event");
        
        } else {
        
            echo mysqli_error($conn);
        }
     }
} else {
    
    echo "not connected";
}
?>