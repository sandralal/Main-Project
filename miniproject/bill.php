<?php
session_start();
$last_id=$_SESSION['sitid'];
$price=NULL;
include("connect.php");
$selectbill="select * from pet_sitting where sitting_id='$last_id';";
$resultbill=mysqli_query($conn,$selectbill);
$rowbill=mysqli_fetch_assoc($resultbill);
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Invoice</title>
<link rel="stylesheet" href="bill.css">
</head>
<body>

<div class="headname">
<h1>PaweSome Pet Rescue </h1>
<h2>Invoice</h2>
</div>
<div class="margin">
<div class="heed">
<span>Name:<?php echo  $rowbill['name'] ?></span><br>
<span>Address:<?php echo  $rowbill['address'] ?></span><br>
<span>Phone:<?php echo  $rowbill['number'] ?></span><br>

</div><br><br>
<div class="tab">

<table cellpadding=6 colspacing=2>
<thead>
<tr>
<th>ID</th>
<th>Pet Type</th>
<th>Pet Name</th>
<th>Breed</th>
<th>Sex</th>
<th>Diet</th>
<th>Days</th>
<th>Amount</th>
<tr>
<tbody>
                            <tr>
                               
                                <td>1</td>
                                <td><?php echo  $rowbill['pets'] ?></td>
                                <td><?php echo  $rowbill['pet_name'] ?></td>
                                <td><?php echo  $rowbill['breed'] ?></td>
                                <td><?php echo  $rowbill['sex'] ?></td>
                                <td><?php echo  $rowbill['diet'] ?></td>
                                <td><?php echo  $rowbill['payment'] ?></td>
                                <td><?php echo  $rowbill['total'] ?></td></tr>
                        

</tbody>
</table></div>
<div class="but">
<form method="POST">
<input type="submit" value="Confirm" name="submit" class="sub-btn">

</form>
</div>
<?php


if(isset($_POST['submit'])){
        
        
        header("location:dashboard.php");
        }


?>
</div>

</body>
</html> 