 <?php
include("connect.php");
$sql="select * from pet_sitting";
$res=mysqli_query($conn,$sql);

?>
<html>
    <head>
    <link rel="stylesheet" href="admin.css">
       
       
</head>
<body class="sitting">
<h1 > <center> PET-SITTING DETAILS</center><br><br></h1>


     
<table class="table" border="3" >
<tr>

<th >pet-sitting id</th>
<th> NAME </th>
<th>NUMBER</th>
<th>Address</th>
<th>PET_NAME</th>
<th>PET</th>
<th>BREED</th>
<th>SEX</th>
<th>DIET</th>
<th>PAYMENT</th>
<th>APPROVE/REJECT</th>
<th>STATUS</th>

</tr>

 

<?php

while($row=mysqli_fetch_assoc($res))

{ 
    echo
    "
    <tr><td>  " . $row["sitting_id"]."</td>".
    "<td> " . $row["name"]."</td>".
    " <td>" .$row["number"]."</td>".
    "<td> " . $row["address"]."</td>".
    "<td> " . $row["pet_name"]."</td>". 
    "<td> " . $row["pets"]."</td>". 
    "<td> " . $row["breed"]."</td>". 
    "<td> " . $row["sex"]."</td>".
 "<td> " . $row["diet"]."</td>". 
    "<td> " . $row["payment"]."</td>".
    

   "<td>"."<a href='sitting_admin.php?id=". $row["sitting_id"]." 'class='btn'>Approve Booking </a>" .
  
"<td> " . $row["status"]."</td></tr>";
if(isset($_GET['id']))
{// echo"<script>confirm('Do you want to delete the volunteer details permanently?')</script>";
    $id=$_GET['id'];
    $del=mysqli_query($conn,"update  pet_sitting  set status='booked' where sitting_id='$id'");
}

   
   



}


echo"</table";

    
?>


</body>
    </html>