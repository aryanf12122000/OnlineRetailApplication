<?php
$review = $_POST['w'];
$comments = $_POST['Comments'];
if (!empty($review) || !empty($comments) {
 $host = "localhost";
    $dbUsername = "root";
    $dbPassword = "";
    $dbname = "mini project";
    //create connection
    $conn = new mysqli($host, $dbUsername, $dbPassword, $dbname);
    if (mysqli_connect_error()) {
     die('Connect Error('. mysqli_connect_errno().')'. mysqli_connect_error());
    } else {
    
     $INSERT = "INSERT Into review (Review,Comments) values(?, ?)";
     //Prepare statement
    
      $stmt = $conn->prepare($INSERT);
      $stmt->bind_param("ss", $Review, $Comments);
      $stmt->execute();
      echo "New record inserted sucessfully";
     } else {
      echo "Someone already register using this email";
     }
     $stmt->close();
     $conn->close();
    }
} else {
 echo "All field are required";
 die();
}
?>