<?php
	$Review = $_POST['w'];
	$Comments = $_POST['Comments'];
	
$DB_SERVER ='localhost';
$DB_USERNAME='root';
$DB_PASSWORD='';
$DB_NAME='mini project';
	$conn = new mysqli($DB_SERVER,$DB_USERNAME,$DB_PASSWORD,$DB_NAME);
	if($conn->connect_error){
		echo "$conn->connect_error";
		die("Connection Failed : ". $conn->connect_error);
	} else {
		$stmt = $conn->prepare("INSERT IN review(Review,Comments) VALUES(?, ?)");
		$stmt->bind_param("ss", $Review, $Comments);
		$execval = $stmt->execute();
		echo $execval;
		echo "Registration successfully...";
		$stmt->close();
		$conn->close();
	}
?>


    

    