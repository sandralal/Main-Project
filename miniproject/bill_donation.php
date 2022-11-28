<?php
session_start();
$last_id=$_SESSION['userid'];
$price=NULL;
include("connect.php");
$selectbill="select * from donation where userid='$last_id';";
$resultbill=mysqli_query($conn,$selectbill);
$rowbill=mysqli_fetch_assoc($resultbill);
?>
<html>
    <head>
        <link rel="stylesheet"
        href="bill.css">
</head>
    </html>
    <body>

<div class="headname">
<h1>PaweSome Pet Rescue </h1>
<h2>Invoice Donation</h2>
</div>
<div class="margin">
<div class="heed">
    <span>
<h1>Thank You for your Kind Donation..
<h1>Continue with your charity...
Build better world</h1>
</span>
</div><br><br>
<div class="tab">

<table cellpadding=6 colspacing=2>
<thead>
<tr>
<th>ID</th>
<th>Name</th>
<th>Amount</th>

<tr>
<tbody>
                            <tr>
                               
                                <td>1</td>
                                <td><?php echo  $rowbill['cardholderName'] ?></td>
                                <td><?php echo '₹' .$rowbill['Amount'] ?></td>
                                </tr>
                        

</tbody>
</table></div>
<div class="but">
<form method="POST" onsubmit()="confirmation.php">
<input type="submit" value="Confirm" name="submit" class="sub-btn">

</form>

<?php


if(isset($_POST['submit'])){
        
        
        header("location:confirmation.php");
        }


?>
</div>
