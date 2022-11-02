<?php
$username=$_SESSION['username'];
?>
<html>
    <head>
    <link rel="stylesheet"
    href="header.css">
    <script>
        function myFunction() {
          document.getElementById("myDropdown").classList.toggle("show");
        }

       window.onclick = function(event) {
          if (!event.target.matches('.dropbtn')) {
             var dropdowns = document.getElementsByClassName("dropdown-content");
             var i;
             for (i = 0; i < dropdowns.length; i++) {
                 var openDropdown = dropdowns[i];
                 if (openDropdown.classList.contains('show')) {
                     openDropdown.classList.remove('show');
                   }
               }
           }
       }
    </script>

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
               <div class="dropdown">
                <button onclick="myFunction()" class="dropbtn" ><?php echo$username;?></button>
                <div id="myDropdown" class="dropdown-content">
                    <a href="signout.php">Sign Out</a>
                    
                      </div>
                   </div>
              </div>
          </div>  
    </header>
</body>
    </html>

