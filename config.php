<?php
    $server = "localhost";
    $username = "root";
    $password = "";
    $database = "retailready";
    
    $con = mysqli_connect($server, $username, $password, $database);
    
    if($con){
        echo "Connection sucessfully made";
    }
    else{
        echo "Failed to connect to database";
    }
?>