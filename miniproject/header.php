<?php
$username=$_SESSION['username'];
?>
<html>
    <head>
    <link rel="stylesheet"
    href="header.css">

</head>
    <body>
    <header>
        <div class="head">
                        <div class="imgclass">
                            <img src="logo.jpg" style="float: left">
                            <span class="heading" style="float: left;">PaweSome</span>
                        </div>
                            <div class="donation">
                            <a href="./donation.php" class="donation">Donate</a>
                            </div>
        </div>     
        <div class="logo-profile">
            <div class="userimg">
               <a href="#1234"><img src="admin.png"></a>
               <a href="#"><?php echo$username;?></a>
              </div>
          </div>  
    </header>
</body>
    </html>

