<?php
include("connect.php");
$sql="select * from sitting_bill";
$res=mysqli_query($conn,$sql);

?>
<html>
    <head>
       
       
</head>
<body class="sitting">
<h1 > SITTING-bill DETAILS<br><br></h1>


     
<table class="table" border="2" cellpadding="0">
<tr>

<th>FULL NAME</th>
<th> EMAIL </th>
<th>Address</th>
<th>CITY</th>
<th>STATE</th>
<th>ZIP</th>
<th>TOTAL</th>


</tr>

 

<?php

while($row=mysqli_fetch_assoc($res))

{ 
    echo    "
    <tr><td>  " . $row["full_name"]."</td>".
    "<td> " . $row["email"]."</td>".
    " <td>" .$row["address"]."</td>".
    "<td> " . $row["city"]."</td>".
    "<td> " . $row["state"]."</td>". 
    "<td> " . $row["zip"]."</td>". 
    "<td> " . $row["total"]."</td>" ;
   
   
   



}


echo"</table>";
    
?>


</body>
    </html>