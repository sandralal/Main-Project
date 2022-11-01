<?php
session_start();
 //$username=$_GET['name'];
//$userid=$_GET['userid'];
$userid=$_SESSION['userid'];
$username=$_SESSION['username'];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet"
    href="style_dash.css">

</head>
<body>
<?php
include "header.php";
   ?>
<main>
    <div class="content">
        
            
 <img src="adopt.jpg">
 <div class="text-display">
 <span class="text-primary">
                <h3 >Join Us <br></h3></span>
                <span class="text-secondary">Are you looking for a best friend? <br>
                Come and join us.<br>
                Approximately 1478 dogs & cats die every day on road in India. 
                Pawesome is on a mission to provide every dog and cat a home before 2030. <br>
                It's just one of the many ways Pawesome! gives back and helps you become a part of something larger. <br>
                Join Pawesome Community and help setting up Pet houses in your surrounding for strays.<br>
                 Adopt the rescued animals from our petshelter absolutely free</span ><br>
                <a  href='adoption.php'>ADOPT NOW</a>
                
                </div>
                         
            
                <img src ="petsitting.jpg">
                <div class="pet">
                <img src="pet-sit.png">

                
                <a class="petbut"href="sitting.php">BOOK YOUR SLOTS</a></h3>
                </div>
                
              
            



            <img src="volunteer.jpg">
            <div class="vol">
            <h3>Volunteer now</h3>
            <span class="vol-text"> Giving back to the community has positive emotional and psychological effects. <br>
            Working with animals has additional benefits that can boost your overall health.<br>
            Petting and cuddling pets have been shown to reduce blood pressure and increase levels of serotonin and dopamine. <br>
            Those hormones help you to relax and manage depression and stress. <br>
            Studies show that people who frequently play with pets tend to have lower levels of triglycerides and cholesterol.
            <br><br>
            Its not too late ...<br>extend your helping hands to our new pet shelter initiative Pawesome</span>
            <h3><a href='volunteer.php'>VOLUNTEER NOW</a></h3>
            </div>
         
         
    
    </div>
    
</main>


    
</body>
</html>