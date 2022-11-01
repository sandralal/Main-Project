<?php
session_start();
include("connect.php");

$username=$_SESSION['username'];
$petid=$_GET['petid'];
echo $petid;
$PetID;
$name;

//$petid=$_GET["PetID"];
//$userid=$_GET['userid'];


$sql="SELECT * FROM `pet_details` WHERE petID='$petid'";


$res=mysqli_query($conn,$sql);
while($row=mysqli_fetch_assoc($res))
{
    $type_pet=$row["type_of_pet"];
    $status=$row["status"];
    $image=$row["images"];
    $place=$row['place_of_adoption'];
    
}



?>
<html>
    <head>
    <link rel="stylesheet"
    href="adoption.css">
</head>

<style>
        header{
            top:-4px;
        }
        </style>
<body>
    <?php
    include('header.php');?>
    <h1>ADOPTION CONFIRMATION</h1>
    
    <?php
    echo 
    '<div class="content">
        <div class="oneBox" >
            <div clas="twoBox">
                <img class="petPic2" src="'.$image.'"> 
            </div>';
    echo'
    <span class="textPic">
            <p>Name:'.$type_pet.'</p>
            <p>Place Of Rescue:'.$place.'</p>
            <span>Are you sure the adoption?<br></span>';
       
      $yes=" <a href='change.php?name=yes&petid={$petid}' >Yes</a>";
      $no=" <a href='adoption.php' >No</a>";
      echo $yes;
      echo $no;
     echo'</span>    </div></div>'
    ?>

       
     

        
    

</body>
</html>