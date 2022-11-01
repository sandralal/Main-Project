
<?php
session_start();
include("connect.php");
$userid=$_GET['userid'];
$sql="select * from pet_details";
$res=mysqli_query($conn,$sql);
?>
<!DOCTYPE html>
<html lang="en">
    
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>adoption</title>
    <link rel="stylesheet"
    href="adoption.css">
    
    <style>
        header{
            top:-4px;
        }
        </style>
</head>

<body>

<?php
    include('header.php');?> 
<main>
    <h1>ADOPT YOUR NEW FRIEND 
    </h1>
    <div class="content">
            <div class="onebox red">
                <div class="twobox green">

                </div>
                </div>
                <div class="onebox red">
                <div class="twobox green">

                </div>
    </div>
    </div>
                
          

    </main>
    
    </body>
    </html>