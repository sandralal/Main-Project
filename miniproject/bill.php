<?php
session_start();
$sitid=$_SESSION['sitid'];
$userid=$_GET['userid'];
$price=NULL;
include("connect.php");
if(isset($_POST['btn']))
{
 
//getting total amount from pet sitting table
                  $sql="select payment from pet_sitting where sitting_id='$sitid'";
                  $res=mysqli_query($conn,$sql);
                  $row=mysqli_fetch_assoc($res);
                  if($row['payment']=="1-day"){
                    
                      //echo"<script> alert('{$curuser}')</script>";
                      $price="6 $";
                  }
                  elseif($row['payment']=="2-day"){
                      //echo"<script> alert('{$curuser}')</script>";
                      $price="12 $";
                  }
                  elseif($row['payment']=="3-day"){
                      //echo"<script> alert('{$curuser}')</script>";
                      $price="18 $";
                  }
                  elseif($row['payment']=="4-day"){
                      //echo"<script> alert('{$curuser}')</script>";
                      $price="24 $";
                  }
                  elseif($row['payment']=="5-day"){
                      //echo"<script> alert('{$curuser}')</script>";
                      
                      $price="30 $";
                  }
                  else{
                      echo"error";
                  }

?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Invoice</title>
<link rel="stylesheet" href="./css/bill.css">
</head>
<body>

<div class="headname">
<h1>Kwik Wash Laundry Services</h1>
<h2>Invoice</h2>
</div>
<div class="margin">
<div class="heed">
<span>Name:<?php echo  $rowuser['us_fstname'] ?>  <?php echo  $rowuser['us_lastname'] ?></span><br>
<span>Email:<?php echo  $rowuser['us_email'] ?></span><br>
<span>Phone:<?php echo  $rowuser['us_phone'] ?></span><br>
<span>House name:<?php echo  $rowuser['us_housename'] ?></span><br>
<span>City:<?php echo  $rowuser['us_city'] ?></span><br>
<span>Pincode:<?php echo  $rowuser['us_pincode'] ?></span><br>
<span>Pincode:<?php echo  $rowus['pickupdate'] ?></span><br>
</div><br><br>
<div class="tab">

<table>
<thead>
<tr>
<th>ID</th>
<th>Item Name</th>
<th>Price</th>
<th>Quantity</th>
<th>Total</th>
<tr>
<tbody>
<?php

$billrequest="SELECT laundry_request.request_id,
        laundry_request.pickupdate,
        laundry_request.top,
        laundry_request.bottom,
        laundry_request.woollen,
        laundry_request.other ,
        laundry_request.service_type,
        price_tb.top_wear,
        price_tb.bottom_wear,
        price_tb.woollen_wear,
        price_tb.other_wear FROM 
        laundry_request,price_tb 
        WHERE laundry_request.request_id='$last_id' AND price_tb.price_id='1'";

$result = mysqli_query($conn,$billrequest);

                    if(mysqli_num_rows($result) != 0){
                        while($row=mysqli_fetch_assoc($result)){
                                $bill_date=$row['pickupdate'];
                            $total_top = $row['top_wear'] * $row['top'];
                            $total_bottom = $row['bottom_wear'] * $row['bottom'];
                            $total_woollen = $row['woollen_wear'] * $row['woollen'];
                            $total_other = $row['other_wear'] * $row['other'];
                            $tp=$total_top+$total_bottom+$total_woollen+$total_other;
                            echo"<tr>
                               
                                <td>1</td>
                                <td>top</td>
                                <td>{$row['top_wear']}</td>
                                <td>{$row['top']}</td>
                                <td>{$total_top}</td></tr>
                                ";
                        echo"<tr>
                                <td>2</td>
                                <td>bottom</td>
                                <td>{$row['bottom_wear']}</td>
                                <td>{$row['bottom']}</td>
                                <td>{$total_bottom}</td></tr>
                                ";
                        echo"<tr>
                                <td>3</td>
                                <td>woollen</td>
                                <td>{$row['woollen_wear']}</td>
                                <td>{$row['woollen']}</td>
                                <td>{$total_woollen}</td></tr>
                                ";
                        
                        echo"<tr>
                                <td>4</td>
                                <td>other</td>
                                <td>{$row['other_wear']}</td>
                                <td>{$row['other']}</td>
                                <td>{$total_other}</td></tr>
                                ";
                        echo"<tr ' >
                                <divclass='left'><td  style='text-align: right;' colspan='4'><b>Grand Total<b></td>
                                </div>
                                <td style='text-align: center;'>{$tp}</td></tr>
                                
                                ";
                        }
                    }else{
                        echo "fail";
                    }
                    
                    ?>

</tbody>
</table></div><br><br><br><br>
<div class="but">
<form method="POST">
<input type="submit" value="Pay Now" name="submit" class="sub-btn">
<input type="submit" value="Cancel" name="cancel" class="can-btn">

</form>
</div>
<?php
if(isset($_POST['cancel'])){
        $cancellsql="DELETE FROM laundry_request WHERE request_id='$last_id' AND us_id='$us_id' ";
        $cancellresult=mysqli_query($conn,$cancellsql);

        if($cancellresult){
        header("location:us_laundryrequest.php");
}
}
if(isset($_POST['submit'])){
        $submitsql="INSERT INTO bill(tot_top,tot_bottom,tot_woollen,tot_other,total_price,request_id,bill_date) 
                VALUES ('$total_top','$total_bottom','$total_woollen','$total_other','$tp','$last_id','$bill_date')";
        $submitresult=mysqli_query($conn,$submitsql);

        if($submitresult){
        $selbill="SELECT bill_id FROM bill WHERE request_id='$last_id'";
        $resselbill=mysqli_query($conn,$selbill);
        if(mysqli_num_rows($resselbill) != 0){
                while($row=mysqli_fetch_assoc($resselbill)){
                        $bill_id=$row['bill_id'];
                        $_SESSION['bill_id']=$bill_id;
                }
        }
        header("location:pay.php");
        }

}
?>
</div>

</body>
</html> 