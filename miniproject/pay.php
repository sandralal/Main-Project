<?php
session_start();
include("connect.php");

$username=$_SESSION['username'];
$last_id=$_SESSION['sitid'];
$selectbill="select total from pet_sitting where sitting_id='$last_id';";
$resultbill=mysqli_query($conn,$selectbill);
$rowbill=mysqli_fetch_assoc($resultbill);
if(isset($_POST['submit']))
{
    header("Location:bill.php");
}



?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Payment Form</title>
    <link rel="stylesheet" href="pay.css">
    <link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&display=swap" rel="stylesheet">
</head>
<body>
    <div class="container">
        <form method="POST">
        <h1>Confirm Your Payment</h1>
        <div class="owner">
                <h3>Amount</h3>
                
        <div class="input-field">
                    <input type="text" value="Total amount to be paid:  Rs <?php echo $rowbill['total'];?>" name="amount" id="amount" required>
                </div>
                </div>
        <div class="first-row">
            <div class="owner">
                <h3>Owner</h3>
                <div class="input-field">
                    <input type="text" value="<?php echo $username;?>" name="ownername" id="ownername" required>
                </div>
            </div>
            <div class="cvv">
                <h3>CVV</h3>
                <div class="input-field">
                    <input type="password" value="" pattern="[0-9]{3}"name="cvv" id="cvv" required>
                </div>
            </div>
        </div>
        <div class="second-row">
            <div class="card-number">
                <h3>Card Number</h3>
                <div class="input-field">
                    <input type="text" value="" pattern="[0-9]{12}"name="cardno" id="cardno" required>
                </div>
            </div>
        </div>
        <div class="third-row">
            <h3>Valid Upto</h3>
            <div class="selection">
                <div class="date">
                    <select name="months" id="months" required>
                        <option value="Jan">Jan</option>
                        <option value="Feb">Feb</option>
                        <option value="Mar">Mar</option>
                        <option value="Apr">Apr</option>
                        <option value="May">May</option>
                        <option value="Jun">Jun</option>
                        <option value="Jul">Jul</option>
                        <option value="Aug">Aug</option>
                        <option value="Sep">Sep</option>
                        <option value="Oct">Oct</option>
                        <option value="Nov">Nov</option>
                        <option value="Dec">Dec</option>
                      </select>
                      <select name="years" id="years" required>
                        <option value="2027">2027</option>
                        <option value="2026">2026</option>
                        <option value="2025">2025</option>
                        <option value="2024">2024</option>
                        <option value="2023">2023</option>
                        <option value="2022">2022</option>
                      </select>
                </div>
                <div class="cards">
                    <img src="./images/mc.png" alt="">
                    <img src="./images/vi.png" alt="">
                    <img src="./images/pp.png" alt="">
                </div>
            </div>    
        </div>
        <div class="control">
        <input type="submit" value="Proceed to Pay" name="submit">
        </div>
</form>
    </div>
</body>
</html>