<?php
session_start();
include("connect.php");
if(isset($_POST['submit'])){
    
   
    $dob=$_POST['dob'];
    $time=$_POST['time'];
    $addr=$_POST['address'];
    $state=$_POST['state'];
    $dist=$_POST['district'];
    $pincode=$_POST['pincode'];
    $city=$_POST['city'];
    @$exp=$_POST['exp'];
   @ $gender=$_POST['gender'];
   
    
    $doberror=$housenameerror=$cityerror=$pincodeerror=$staterror=$pincodeerror=$gendererror=$experror=$disterror=NULL;
    if(empty($dob)){
        $doberror="Please select correct Date of Birth";
    }
    if(empty($addr)){
        $housenameerror="Please enter the address";
    }
    if(empty($city)){
        $cityerror="Please enter the city";
    }elseif (!preg_match("/^([a-zA-Z' ]+)$/",$city)){
        $cityerror="city name should not contain any special characters";
    }
        
    if(empty($dist)){
        $disterror="Please enter the city";
    }elseif (!preg_match("/^([a-zA-Z' ]+)$/",$dist)){
        $disterror="state name should not contain any special characters";
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

    
    $sql="INSERT INTO volunteer_table(dob,time_contact,address,state,district,city,pincode) VALUES('$dob','$time','$addr','$state','$dist','$city','$pincode')";
    $result=mysqli_query($conn,$sql);
    if(!$result){
        echo "not inserted";
    }
}
}
?>