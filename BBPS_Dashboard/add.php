<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>EasyPay Dashboard</title>
</head>
<body>

<div class="header">
	<h2>EasyPay Dashboard</h2>
</div>
<form action="http://localhost/BBPS_dashboard/index.php" method="post">
<h2>Customer ID: <input type="text" name="Customer_ID"></h2><br>
<h2>Name: <input type="text" name="Name"></h2><br>
<h2>Phone Number: <input type="text" name="Phone_Number"></h2><br>
<h2>Amount Due: <input type="text" name="Amount_Due"> </h2><br>
<input type="submit" value="Add Entry">


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
</body>
</html>