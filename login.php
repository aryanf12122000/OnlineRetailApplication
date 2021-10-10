<?php 
    include "config.php";
?>

<!DOCTYPE html>
<html>
<head>
     <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.css">
	<title>Login</title>
</head>
<body style="background-color: lightgreen">
<?php
session_start(); 	
if(isset($_POST['email'])){
$email=stripslashes($_REQUEST['email']);
$email=mysqli_real_escape_string($con,$email);
$password=stripslashes($_REQUEST['password']);
$password=mysqli_real_escape_string($con,$password);	

$query="SELECT * FROM user_info WHERE email='$email' and password='$password'";
$result=mysqli_query($con,$query) or die(mysql_error());
$rows=mysqli_num_rows($result);
if($rows==1){
	$_session['Email']=$email;
	header("location:homepage.php");
}else{
	echo"<div class='form'>
	<h3>Email/Password is Incorrect</h3>
	<br>Click here to<a href='login.php'>Login</a> </div>";
}
}
else{
?>

 <table style="margin-left: auto;margin-right: auto;margin-top: 150px;background-color: white;width: 25%" border="1">
 <th>
<div style="margin-left: 45px" class="form">
	<h3>LOGIN FORM</h3>
   <p><b>Please fill in the credentials to login</b></p>
	<form action="" method="post" name="login">
    <div style="margin-right: 112px">Email ID</div>
    <input type="text" name="email" placeholder="Email" required />
    <br>
    <br>
      <div style="margin-right: px"> Password</div><input type="password" name="password" placeholder="Password" required/><br><br>
    <input class="btn btn-primary" type="submit" name="submit" value="Login"/>	
    </form>
    <p>Don't have an account?<a href="registration.php">SignUp</a></p>

</div>  
</th>
</table>

<?php } ?>
</body>
</html>
