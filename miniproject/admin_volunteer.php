
<?php
include("connect.php");
$sql="select * from volunteer_tbl inner join sign_up where sign_up.userid=volunteer_tbl.userid";
$res=mysqli_query($conn,$sql);
if(isset($_GET['id']))
{// echo"<script>confirm('Do you want to delete the volunteer details permanently?')</script>";
    $id=$_GET['id'];
    $del=mysqli_query($conn,"delete from volunteer_tbl where voID='$id'");
}
?>
<html> 
    <head>
        <link rel="stylesheet" href="admin.css">
       
</head>
<body class="volunteer">
<h1 >  VOLUNTEER DETAILS<br><br></h1>


     
<table class="table" border="2" cellpadding="0">
<tr>

<th>volunteer id</th>
<th>Volunteer Name</th>
<th> DOB </th>
<th>Time to contact</th>
<th>Address</th>
<th>State</th>
<th>District</th>
<th>City</th>
<th>Pincode</th>
<th>Experience</th>
<th>Gender</th>
<th>Operation</th>
</tr>

 

<?php

while($row=mysqli_fetch_assoc($res))

{ 
    echo
    "
    <tr><td>  " . $row["voID"]."</td>".
    
    "<td> " . $row["Name"]."</td>".
    "<td> " . $row["dob"]."</td>".
    " <td>" .$row["time_contact"]."</td>".
    "<td> " . $row["address"]."</td>".
    "<td> " . $row["state"]."</td>". 
    "<td> " . $row["district"]."</td>". 
    "<td> " . $row["city"]."</td>". 
    "<td> " . $row["pincode"]."</td>". 
    "<td> " . $row["experience"]."</td>". 
    "<td> " . $row["gender"]."</td>".

    "<td>"."<a href='admin_volunteer.php?id=". $row["voID"]." 'class='btn'>DELETE </a></tr>" ;
   
   



}


echo"</table";
    
?>


</body>
    </html>
