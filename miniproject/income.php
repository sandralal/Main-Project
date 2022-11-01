<?php
session_start();
include 'connect.php';
$sql="select sum(Amount)as Sum from donation";
$res=mysqli_query($conn,$sql);


?>
<html>
    <body>
        <?php
        include 'header.php';
        ?>
        <h1>SUm:</h1>
        <?php echo$sql;?>

</body>
    </html>