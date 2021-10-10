<?php
$w = $_POST['w']

  $server = "localhost";
    $username = "root";
    $password = "";
    $database = "mini project";
    
    $conn= mysqli_connect($server, $username, $password, $database);
if (mysqli_connect_error()){
die('Connect Error ('. mysqli_connect_errno() .') '
. mysqli_connect_error());
}
else{
$sql = "INSERT INTO  review(feedback)
values ('$w')";
if ($conn->query($sql)){
echo "New record is inserted sucessfully";
}
else{
echo "Error: ". $sql ."
". $conn->error;
}
$conn->close();


?>