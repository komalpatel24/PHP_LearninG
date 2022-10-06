<?php
$conn = mysqli_connect("localhost", "root", "");
if ($conn) {
    
    if (!mysqli_select_db($conn, "test2")) {
    
        $query = "CREATE DATABASE test2";
    
        $rslt = mysqli_query($conn, $query);
    
        if ($rslt) {
    
            mysqli_select_db($conn, "test2");
    
        } else {
    
            echo mysqli_error($conn);
    
        }
    
    }
} else {
    
    echo "not connected";
}
