<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>donationpage</title>
    <link rel="stylesheet" href="donation-style.css">
    

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Josefin+Sans&display=swap" rel="stylesheet">


    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Josefin+Sans:wght@100&display=swap" rel="stylesheet">

    <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>    <!-- Thank you font -->
<link href="https://fonts.googleapis.com/css2?family=Abril+Fatface&display=swap" rel="stylesheet">



</head>
<body>
    <?php
    session_start();
    include("connect.php");
    $username=$_SESSION['username'];
    include "header.php";

    if(isset($_POST['submit']))
    {
        $userid=$_SESSION['userid'];
        $amount=$_POST['amount'];
        $cardname=$_POST['card'];
        $exp=$_POST['exp'];
        $sql="insert into donation values('$userid','$amount','$exp','$cardname')";
        $res=mysqli_query($conn,$sql);


    }
    ?>


    <!-- <header>
    
        <div class="head">
            <div class="imgclass">
                <img class="logo" src="./logo.png" style="float: left">
                <span class="heading" style="float: left;">PaweSome</span>
            
            </div>     
            <div class="logo-profile">
                <div class="userimg">
                    <a href="#1234"><img style="height: 5rem;
    width: 5rem;" src="./img/user.jpg"></a>
                    <a  href="#"><p style="font-size: 18px;"> Profile</p></a>

                </div>
            </div>    
        </div>
       
    </header>   -->
    <style>
        header{
            top:-20px;
        }
        .userimg img{
            margin-top:-10px;
        }
        </style>
    <div class="main">
        <div class="container">
            <!-- <div class="desc">
                <h1 style="margin: 0;color:rgb(35, 34, 34);font-family: 'Abril Fatface', cursive;;font-size: 75px;float: right;margin-top: 15rem; font-weight: bolder;">Thank you....<br>For the  donation </h1>
            </div> -->
            
            <div class="donate">
                <h1 style="text-align: center;margin:0;font-family: 'Josefin Sans', sans-serif;margin-top: 1rem;">  Donation Payment Details</h1>
                <form method="POST">
                    <p class="h" style="margin-top:2rem">Card Number</p>
                    <p class="sub-h">Enter the 16-digit card number on the card </p>
                    <input class="input-field" type="number"  placeholder="0000 0000 0000 0000" required>
                    <p class="h">CV Number</p>
                    <p class="sub-h">Enter the 3-4 digit CV number on the card </p>
                    <input class="input-field" type="number"   placeholder="Enter CV number"  required>
                    <p class="h">Expiry Date</p>
                    <p class="sub-h">Enter the Expiry Date on the card </p>
                    <input class="input-field" type="text" name='exp' placeholder="Enter Expiry Date">
                    <p class="h">Card Holder Name</p>
                    <input class="input-field" type="text" name='card' placeholder="Card Holder Name" required><br>
                    <p class="h">Amount</p>
                    <input class="input-field" type="text"name='amount' placeholder="Enter Amount" required><br>
                    <input class="btn" type="submit" name="submit"value="Donate" >


                <!-- <br>
                <input class="input-field" type="text" placeholder="Enter mail ID" required><br>
                <input class="input-field" type="email" placeholder="Enter Phone no." required><br>
                <input class="input-field" type="text" placeholder="Enter Amount" required><br>
                <input class="btn" type="submit" value="Donate" onclick="onclick()">  -->
            </form>


            </div>
            
        </div>
        
        <div class="sec">
            <div >
            <img class="img1" src="./sec-img1.jpg" alt="img">
            </div>
            <div class="text1">
                <p style="padding:58px;font-size:large">Most of the population looks at stray dogs as a menace and a threat. Just a few unfortunate events of dog bites are enough to turn people against stray dogs and perceive them all viciously. In all probability, a dog does not bite unless provoked, sick or in pain. <br>In fact, according to a study conducted by The American College of Veterinary Behaviorists published in Psychology Today, sometimes dogs might not even prefer to interact physically. On the other hand, dogs are often expressive and social animals, eager to talk to us, provided we hear them out.</p>
            </div>
            <div >
                <img class="img2" src="./sec-img2.jpg" alt="img">
            </div>
            <div class="text2">
                <p style="padding:58px;font-size:large">Most of the population looks at stray dogs as a menace and a threat. Just a few unfortunate events of dog bites are enough to turn people against stray dogs and perceive them all viciously. In all probability, a dog does not bite unless provoked, sick or in pain. <br>In fact, according to a study conducted by The American College of Veterinary Behaviorists published in Psychology Today, sometimes dogs might not even prefer to interact physically. On the other hand, dogs are often expressive and social animals, eager to talk to us, provided we hear them out.</p>
            </div>
               
        </div>

    <footer>
        <div class="foot">
            <p style="font-size: 30px;font-weight: bold;">Contact Us</p><br>
            <p style="font-weight: bold;">Phone : 933983929</p><br>
            <p style="font-weight: bold;">Email: pawesome@gmail.com</p><br>
            <p style="font-weight: bold;line-height: 20px;">Address: 917 Quiet Valley Lane <br>Sherman Oaks <br>California </p><br>
             <p style="font-weight: bold;">Zip code: 91403</p>
        </div>
        <div class="footri">
            <p style="font-size: 30px;font-weight: bold;">Contact Us</p><br>
            <div>
                <a href="">
            <img style="width: 1.5rem;height: 2.5rem;margin-right: 1rem;" src="./img/instagram.svg" alt="">
        </a>
        <a href="">
            <img style="width: 1.5rem;height: 2.5rem;" src="./img/twitter.svg" alt="">
        </a>
        <a href="">
            <img style="width: 1.5rem;height: 1.5rem;margin-bottom: 8px;" src="./img/facebook-f.svg" alt="">
        </a>
            </div>
        </div>
    </footer>
    </div>
<!-- <script>
    function onclick(){
        window.location.href = "http://www.w3schools.com";
    }
</script> -->

</body>
</html>