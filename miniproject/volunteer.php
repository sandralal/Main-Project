<?php

session_start();
$username=$_SESSION['username'];
$userid=$_SESSION['userid'];
include("connect.php");
if(isset($_POST['submit'])){
    
   
    $dob=$_POST['dob'];
    $time=$_POST['time'];
    $addr=$_POST['address'];
    $state=$_POST['state'];
    $dist=$_POST['district'];
    $pincode=$_POST['pincode'];
    $city=$_POST['city'];
    $exp=$_POST['exp'];
   $gender=$_POST['gender'];
   
    
    $doberror=$housenameerror=$cityerror=$pincodeerror=$staterror=$pincodeerror=$gendererror=$experror=$disterror=NULL;
    if(empty($dob)){
        $doberror="Please select correct Date of Birth";
    }
    if(empty($addr)){
        $housenameerror="Please enter the address";
    }
    if(empty($city)){
        $cityerror="Please enter the city";
    }if (!preg_match("/^([a-zA-Z' ]+)$/",$city)){
        $cityerror="city name should not contain any special characters";
    }
        
    

    
       if(empty($state))
       {
        $staterror="Please enter the state";
    }elseif (!preg_match("/^([a-zA-Z' ]+)$/",$state)){
        $staterror="state name should not contain any special characters";
    }

    if(empty($pincode)){
        $pincodeerror="Please enter the pincode";
    }elseif (!preg_match("/^([0-9' ]{6})$/",$pincode)){
        $pincodeerror="invalid pincode";
    }
    if(empty($gender)){
        $gendererror="Please select correct gender";
    }
    if(empty($exp)){
        $experror="Please select yes if you have experience ";
    }
    if( !$doberror &&!$housenameerror &&!$cityerror &&!$pincodeerror &&!$staterror &&!$pincodeerror &&!$gendererror &&!$experror &&!$disterror)
    {

    
    $sql="INSERT INTO volunteer_tbl(dob,time_contact,address,state,district,city,pincode,experience,gender,userid) VALUES('$dob','$time','$addr','$state','$dist','$city','$pincode','$exp','$gender','$userid')";
    $result=mysqli_query($conn,$sql);
    if(!$result){
        echo "not inserted";
    }
}
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet"
    href="volunteer_style.css">

</head>
<body>
    <?php
    include('header.php');?>
    <div class="volImage"><img src="volunteer.jpg"></div>
    <div class="volForm">        
    <form action="#" method="POST"> 
        <h1>welcome <?php echo $username;?> </h1>  
        <h1>VOLUNTEER REGISTRATION </h1>
        <div class="user">
                     
                    <div class="input-box">
                        <span class="details">Date Of Birth</span>
                        <input type="date" name="dob" placeholder="Enter your dob"> 
                        <span style='color:red;font-size:small;'><?php if(isset($dob))echo $doberror ?><br></span>

                    </div>
                    <div class="input-box">
                        <span class="details">Best time to contact</span>
                        <input type="text" name="time" placeholder="ex. 5-7pm "> 

                        
                    </div>
                    <div class="input-box">
                        <span class="details">Address Line 1</span>
                        <input type="text" name="address" placeholder="Address line"> 
                        <span style='color:red;font-size:small;'><?php if(isset($addr))echo $housenameerror ?><br></span>
                    

                    </div>
                    
                    <div class="input-box">
                        <span class="details">State</span>
                        <input type="text" name="state" placeholder="State "> 
                        <span style='color:red;font-size:small;'><?php if(isset($state))echo $staterror ?><br></span>
                    

                    </div>
                    <div class="input-box">
                        <span class="details">District</span>
                        <input type="text" name="district" placeholder="Enter your District"> 
                        <span style='color:red;font-size:small;'><?php if(isset($dist))echo $disterror ?><br></span>

                    </div>
                    <div class="input-box">
                        <span class="details">City</span>
                        <input type="text" name="city" placeholder="Enter your city"> 
                        <span style='color:red;font-size:small;'><?php if(isset($city))echo $cityerror ?><br></span>
                    </div>
                    <div class="input-box">
                        <span class="details">Pincode</span>
                        <input type="text" name="pincode" placeholder="Enter your pincode"> 
                        <span style='color:red;font-size:small;'><?php if(isset($pincode))echo $pincodeerror?><br></span>

                    </div>
                    <div class="gender-det">
                        <span class="category">Previous Experience</span>
                        <input type="radio" id="yes" name="exp" value="yes">
                        <label for="yes">Yes</label><br>
                        <input type="radio" id="no" name="exp" value="no">
                        <label for="no">No</label><br>
                        <span style='color:red;font-size:small;'><?php if(isset($exp))echo $experror ?><br></span> 
                   </div>
                    <div class="gender-det">
                        <span class="gender-title">Gender</span><br><br>
                        <div class="category">
                        <input type="radio" id="female" name="gender" value="female">
                        <label for="female">Female</label><br>
                        <input type="radio" id="male" name="gender" value="male">
                        <label for="male">Male</label><br>
                        <input type="radio" id="others" name="gender" value="others">
                        <label for="others">Others</label><br>
                        <span style='color:red;font-size:small;'><?php if(isset($gender))echo $gendererror ?><br></span>
                    </div>
                        
                    </div>
                    <br>
                   
                    <div class="buttonsub">
                        <button type="submit" name="submit"href="#">Submit Now</button>

                    </div>

                  </div>   
                </div>
            </form>
        </div>
</body>
</html>