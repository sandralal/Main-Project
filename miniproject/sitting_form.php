<?php
session_start();
include 'connect.php';
$userid=$_GET['userid'];

//echo"<script> alert('{$curuser}')</script>";
if(isset($_POST['submit'])){


  $usname=$_POST['name'];
  $phn=$_POST['number'];
  $address=$_POST['address'];
  $petname=$_POST['pet_name'];
  $pet=$_POST['pets']; 
  $breed=$_POST['breed'];
  $sex=$_POST['sex'];
  $diet=$_POST['diet'];
  $payment=$_POST['payment'];
  if($payment=="1-day"){
                    
    //echo"<script> alert('{$curuser}')</script>";
    $price="100";
}
elseif($payment=="2-day"){
    //echo"<script> alert('{$curuser}')</script>";
    $price="200";
}
elseif($payment=="3-day"){
    //echo"<script> alert('{$curuser}')</script>";
    $price="300";
}
elseif($payment=="4-day"){
    //echo"<script> alert('{$curuser}')</script>";
    $price="400";
}
elseif($payment=="5-day"){
    //echo"<script> alert('{$curuser}')</script>";
    
    $price="500";
}
else{
    echo"error";
}



  
  
  $sql = "INSERT INTO pet_sitting(name,number,address,pet_name,pets,breed,sex,diet,payment,total,userid) value ('$usname','$phn','$address','$petname','$pet','$breed','$sex','$diet','$payment','$price','$userid')";
  $query=mysqli_query($conn,$sql);
  $last_id = mysqli_insert_id($conn);
  $_SESSION['sitid']=$last_id;

  
  
 
  
if(!$query){
   echo "not";
}
else{
  header("Location:pay.php?userid='$userid'");
}
  
  
}

?>
<html>
    <head>
        <link rel="stylesheet" href="form_style.css">
        <title>sitting-form</title>
</head>
<body>
    <div class="content">
        <div class="sideimg">
            <img src="img/form.jpg">
        </div>
    <h1>ENTER YOUR INFORMATIONS HERE </h1>
    <form class="sitting-form" action="#" method='POST'>
        <input type="text" placeholder="Enter Your Name" name="name" id="name"><BR><BR>
        <input type="text" placeholder="Enter Your Contact Number" name="number" id="number"><BR><BR>
      
        <textarea  name="address" placeholder="Enter Your Address" rows="4" cols="50" id="address"></textarea><br><br>
        <input type="text" placeholder="Enter Your Pet's Name" name="pet_name" id="pet_name"><BR><BR>
        <select name="pets" id="pets">
    <option value="Select pet" disabled selected>Select pet</option>
  <option value="dog">DOG</option>
  <option value="cat">CAT</option>
  <option value="rabbit">RABBIT</option>
  <option value="bird">BIRDS</option>
</select>
        <br><br>
<input type="text" placeholder="Enter Pet Breed" name="breed" id="breed"><br><br>
<select name="sex" id="sex">
<option value="Select sex" disabled selected>Select sex</option>
  <option value="female">F</option>
  <option value="male">M</option>
</select><br><br>
<textarea type="text" placeholder="enter yours pet's diet details " name="diet" id="diet"></textarea><br><br>
<select name="payment" id="payment">
    <option value="Select PAYMENT days" disabled selected>how many days </option>
  <option value="1-day">ONE-DAY</option>
  <option value="2-day">TWO-DAYS</option>
  <option value="3-day">THREE-DAYS</option>
  <option value="4-day">FOUR-DAYS</option>
  <option value="5-day">FIVE-DAYS</option>
</select><br><br>
  <input type="submit" class="subBut"name="submit" id="submit" value="proceed to billing"  >
</form>

  </div>
  
</body>
</html>
