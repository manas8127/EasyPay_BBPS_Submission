<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="./styleOG.css">
</head>
<body style="background-color: white">
<h1 class="heading-title" style="background-color: #133158; color:#BBD6FF">EasyPay Dashboard</h1>
<div class="container" style="background-color: #bde0f8; margin-bottom: 2em;">
    <div class="left-container" style="background-color:#eaf1ee">
    <form action="http://localhost/BBPS_dashboard/index.php" style="background-color:#eaf1ee"  method="post">
<h2 class="CID-label" style="background-color:#eaf1ee">Customer ID: </h2><input style="background-color: #bde0f8"  type="text" name="Customer_ID">
<h2 class="CID-label" style="background-color:#eaf1ee">Name: </h2><input style="background-color: #bde0f8"  type="text" name="Name">
<h2 class="CID-label" style="background-color:#eaf1ee">Phone Number: </h2><input style="background-color: #bde0f8"  type="text" name="Phone_Number">
<h2 class="CID-label" style="background-color:#eaf1ee">Amount Due: </h2><input style="background-color: #bde0f8"  type="text" name="Amount_Due"> <br>
<input type="submit" style="width:8em" value="Add Entry">


<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "customer";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

if(isset($_POST['Customer_ID']))
{
    $sql2 = "INSERT INTO gujaratgas (CustomerID, Name, PhoneNumber, AmountDue, AmountPaid)
    VALUES ('1122348', 'Thomas Shelby', '9876543212', '500', '0');";
    $result2 = $conn->query($sql2);
}


?>
</form>
    </div>
</div>

</body>
</html>