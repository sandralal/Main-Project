 <?php
include("connect.php");
$sql="select * from pet_sitting";
$res=mysqli_query($conn,$sql);
if(isset($_GET['id']))
{// echo"<script>confirm('Do you want to delete the volunteer details permanently?')</script>";
    $id=$_GET['id'];
    $del=mysqli_query($conn,"update  pet_sitting  set status='booked' where sitting_id='$id'");
}
?>
<html>
    <head>
        <link rel="stylesheet" href="sitting_admin_style.css">
       
</head>
<body class="sitting">
<h1 >  PET-SITTING DETAILS<br><br></h1>


     
<table class="table" border="2" cellpadding="0">
<tr>

<th>pet-sitting id</th>
<th> NAME </th>
<th>NUMBER</th>
<th>Address</th>
<th>PET_NAME</th>
<th>PET</th>
<th>BREED</th>
<th>SEX</th>
<th>DIET</th>
<th>PAYMENT</th>

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

   "<td>"."<a href='sitting_admin.php?id=". $row["sitting_id"]." 'class='btn'>update </a></tr>" ;
   
   
   



}


echo"</table";
    
?>


</body>
    </html>