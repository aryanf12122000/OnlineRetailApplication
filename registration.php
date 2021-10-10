<?php 
    include "config.php";
?>

<html>
    <head>
        <style>
            tr{
                height: 30px
            }
        </style>
        <title>REGISTER</title>
     <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.css">
    </head>

    <body style="background-color: lightgreen">
        <table style="margin-left: auto;margin-right: auto;margin-top: 60px;background-color: white;width: 30%" border="1">
            <th>
        <form method="POST">
            <table style="margin-left: 89px">
              <div style="text-align: center;"> <b>REGISTERATION FORM</b></div>
               <br>
                <tr>
                    <td><b>Fullname:</b> </td><br>
                </tr>
                <tr>
                    <td><input type="text" name="name" value="<?php echo @$name ?>"></td>
                </tr>
        
                <tr>
                    <td><b>Mobile:</b> </td>
</tr>
<tr>
                    <td><input type="text" name="mobile" value="<?php echo @$mobile ?>"></td>
               
                </tr>
            

               <tr>
                    <td><b>Email:</b> </td>
</tr>
<tr>
                    <td><input type="email" name="email" value="<?php echo @$email ?>"></td>
                </tr>

                <tr>
                    <td><b>Password:</b> </td>
</tr>
<tr>
                    <td><input type="password" name="password" value="<?php echo @$password ?>"></td>
                </tr>

                <tr>
                    <td><b>Repassword:</b> </td>
</tr>
<tr>
                    <td><input type="password" name="repassword" value="<?php echo @$repassword ?>"></td>
                </tr>

                <tr>
                    <td><b>Address:</b> </td>
</tr>
<tr>
                    <td><input type="text" name="address" value="<?php echo @$address ?>"></td>
                </tr>            


            </table>
            <br>
            <input class="btn btn-primary" style="color: "type="submit" name="submit" value="Register">

        <br>
        <a href="login.php">Already Have An Account</a>
    </form>
    </th>

    </table>
    </body>
</html>

<?php
extract($_POST);
if(isset($submit))
{
 $namecheck = "/^[a-zA-Z ]+$/";
$emailValidation = "/^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9]+(\.[a-z]{2,4})$/";
$numbercheck = "/^[0-9]+$/";

if(empty($name) || empty($email) || empty($password) || empty($repassword) || empty($mobile) || empty($address))
{
        echo "
            <div class='alert alert-warning'>
                <a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a><b>PLease fill all fields..!</b>
            </div>
        ";
        exit();
}
else 
{
if(!preg_match($namecheck,$name))
{
        echo "
            <div class='alert alert-warning'>
                <a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a>
                <b>$name is not valid..!</b>
            </div>
        ";
        exit();
}
if(!preg_match($emailValidation,$email))
{
        echo "
            <div class='alert alert-warning'>
                <a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a>
                <b>$email is not valid..!</b>
            </div>
        ";
        exit();
}
if(strlen($password) < 9 )
{
        echo "
            <div class='alert alert-warning'>
                <a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a>
                <b>Password is weak</b>
            </div>
        ";
        exit();
}
if(strlen($repassword) < 9 )
{
        echo "
            <div class='alert alert-warning'>
                <a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a>
                <b>Password is weak</b>
            </div>
        ";
        exit();
}
if($password != $repassword)
{
        echo "
            <div class='alert alert-warning'>
                <a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a>
                <b>password doesnot match</b>
            </div>
        ";
}
if(!preg_match($numbercheck,$mobile))
{
        echo "
            <div class='alert alert-warning'>
                <a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a>
                <b>Mobile number $mobile is not valid</b>
            </div>
        ";
        exit();
}
if(!(strlen($mobile) == 10))
{
        echo "
            <div class='alert alert-warning'>
                <a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a>
                <b>Mobile number must be 10 digit</b>
            </div>
        ";
        exit();
}
    //existing email address in our database
$sql = "SELECT User_id FROM user_info WHERE email = '$email' LIMIT 1" ;
$check_query = mysqli_query($con,$sql);
$count_email = mysqli_num_rows($mysqli_result);
if($count_email > 0)
{
        echo "
            <div class='alert alert-danger'>
                <a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a>
                <b>Email Address Already Exists Try Another</b>
            </div>
        ";
        exit();
} 
else
{
        $query ="INSERT INTO user_info  VALUES (NULL, '$name', '$mobile','$email', '$password', '$address')";
        $data = mysqli_query($con, $query);
        if($data){
                echo "Account Created Successfully!!  :)";
                        
            }
            else{
                echo "Error Occured Try Again!!  :(";
            }
}
}       
}
?>
