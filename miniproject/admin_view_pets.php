<html>
    <head>
        <link rel="stylesheet"
        href="adoption.css">
</head>
<body><h1>PETS IN PAWESOME
</h1>
</body>
    </html>
    <?php
include("connect.php");
$sql="select * from pet_details inner JOIN sign_up on pet_details.userid=sign_up.userid;";
$res=mysqli_query($conn,$sql);
 
while($row=mysqli_fetch_assoc($res))
{
    $petid=$row["petID"];
    $type_pet=$row["type_of_pet"];
    $status=$row["status"];
    $image=$row["images"];
    $place=$row["place_of_adoption"];
    $username=$row['Name'];

   echo '<div class="container" >
        <img class="petPic" src="'.$image.'">
        <div">
        <p>Name:'.$type_pet.'</p>
        <p>Status:'.$status.'</p>
        <p>place:'.$place.'</p>';

        if($status=='adopted')
        {

       echo' <p>Adopted By:'.$username.'</p>
       </div>
            </div> ';
        }        
            


echo'<br><br>';



}
?>
