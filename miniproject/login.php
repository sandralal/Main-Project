<?php
session_start();
require 'connect.php';

if(isset($_POST['submit']))
{

$email = $_POST['us_email'];
$passw = $_POST['us_password'];

$sqllog= "SELECT * from sign_up WHERE Email = '$email'";

$result = mysqli_query($conn,$sqllog);

$numrows=mysqli_num_rows($result);

if($numrows!=0){

    while($row=mysqli_fetch_assoc($result)){
        $depassw=base64_decode($row['Pass']);
        $cat=$row['category_user'];
        $name=$row['Name'];
        $userid=$row['userid'];
        $_SESSION['username']=$name;
        $_SESSION['userid']=$userid;
        if($passw == $depassw)
        {
            if($cat=='1')
        {

        
         header("Location:dashboard.php");
        }
        else{
            header("Location:admin-dash.php");
        }
        }
        else
        {
			echo"<script> alert('invalid password')</script>";
			header("Location:sign_up.php");
        }
	}
 
}
else{
	echo"<script> alert('invalid email')</script>";
}	
}	?>
<!DOCTYPE html>
<html lang="en">  
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>signIn page</title>
    <link rel="stylesheet" href="login-styles.css">

</head>
<body>
    <div class="cont">
    <div class="header">
		<h2 style='color:white;text-align: center'>Login to your account</h2>
	</div>
    <form id="form" class="form" method="POST" >
		<div class="form-control">
			
			<input type="email" placeholder="email" id="email" name="us_email" required />
			
			<i class="fas fa-check-circle"></i>
			<i class="fas fa-exclamation-circle"></i>
			
		</div>
        <div class="form-control">
			
			<input type="password" placeholder="Password" id="password" name="us_password" required/>
			
			<i class="fas fa-check-circle"></i>
			<i class="fas fa-exclamation-circle"></i><br>
			<div class="sub-log">
		 <input type="submit" value="Login" name="submit"  ><br>
        </div>
			<span style='text-align: center; color:white'>Don't have an account?</span><a href="sign_up.php" >   SignUp</a>
		</div>
    </div>
    
</body>
</html>