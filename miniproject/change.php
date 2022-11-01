<?php
session_start();
include("connect.php");
$username=$_SESSION['username'];
$nm=$_GET['name'];
$userid=$_SESSION['userid'];
$PetID=$_GET['petid'];
//$userid=$_SESSION['userid'];
if(isset($_POST['submit']))
{
    $address=$_POST['address'];
    $address2=$_POST['address2'];
    $dis=$_POST['district'];
    $state=$_POST['state'];
    $pincode=$_POST['pincode'];
    if($nm=='yes')
{   
    $sql="update pet_details set status='adopted',userid='$userid' , address='$address',address2='$address2',district='$dis',state='$state',pincode='$pincode'where petID='$PetID'";
  
    $res=mysqli_query($conn,$sql);
    
    header("Location:home.php");

   

    

}

else
{
    $sql="update pet_details set status='to adopt' where petID='$petid'";
   
    $res=mysqli_query($conn,$sql);
}
}

?>
<html>
    <?php include('header.php');
    ?>
    <head>
        <link rel="stylesheet" href="adoption.css">
        <script src="https://kit.fontawesome.com/41a6b15354.js" crossorigin="anonymous"></script>
</head>
<style>
    header{
        top:-10px;
    }
    </style>
<body>
    <div class="details">
    <img src="adopconfirm.jpg">
    <div class="formbox">

    
<h1>Please enter your contact address:</h1>



<form action=""method="POST">


<div class="inputbox">
    
<input id="address" name="address" placeholder="Address line 1...." ><br>
<input id="address" name="address2" placeholder="Address line 2...." ><br>
<input type="text" name="state" placeholder="State ">
<input type="text" name="district" placeholder="District"> 
<input type="text" name="pincode" placeholder="Pincode"> <br><br>
<input type="checkbox" name="confirm"> 
   <label for="confirm" style="color:black">Contact Address is verified</label><br><br>
<label for="con">Are you sure that you will take care of your pet?</label><br>
        <select name="confirmation" >
            <option value="yes">Yes</option>
            <option value="No">No</option>
        </select> <br>
<br>

   
  <button type="submit" name="submit" class="button">
    <span class="text-button">Save My data</span>
    <i class="fa-solid fa-check icon"></i> 

</button>
</div>
</div>
</div>
    

</form>

</body>
    </html>