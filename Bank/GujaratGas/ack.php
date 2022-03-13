<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width='device-width', initial-scale=1.0">
    <title>BharatBank</title>
</head>
<body>
    <h1>India Bank Payment Portal</h1>
    <img src="assets\bharat-bill-payment-system-500x500.jpg" />
    <br />
    <h1>Vendor: Gujarat Gas Limited</h1>
    <h2>Your payment is acknowledged, the browser will refresh in 10 seconds.</h2>
    <?php
    include 'db-connect.php';
    $sql2 = "UPDATE gujaratgas SET AmountPaid=AmountDue, AmountDue=0 WHERE CustomerId='1122345'";
    $result2 = $conn->query($sql2);

    $page = "index.php";
    $sec = "10";
    header("Refresh: $sec; url=$page");
    ?>
</body>
</html>