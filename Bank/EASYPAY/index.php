<?php
include 'db-connect.php';
?>




<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BharatBank</title>
</head>

<body>
    <h1>India Bank Payment Portal</h1>
    <img src="assets\bharat-bill-payment-system-500x500.jpg" />
    <br />
    <h1>Vendor: Gujarat Gas Limited</h1>
    <h2>Enter Customer id</h2>
    <form action="" method="post">

        <input type="text" name="customer_id" placeholder="Customer ID" />

        <input type="submit" name="submit" />
    </form>



    <?php
    if (empty($_POST["customer_id"])) {
    } else {
        $url_id = $_POST["customer_id"];
        $sql = "SELECT `CustomerID`, `Name`, `PhoneNumber`, `AmountDue`, `AmountPaid` FROM `gujaratgas` WHERE CustomerId='$url_id'";
        $result = $conn->query($sql);

        if (mysqli_num_rows($result) > 0) {
            while ($row = mysqli_fetch_array($result)) {
                echo '<h1>' . $row['Name'] . '</h1>';
                echo '<h1>' . 'Customer ID: ' . $_POST["customer_id"] . '</h1>';
                
                if($row['AmountDue']==0)
                {
                    echo '<h1>'.'You do not have any pending amount'.'</h1>';
                }
                else
                {
                    
                //     echo '<h1>Your due amount is: Rs.' . $row['AmountDue'] . '</h1>';
                //     echo '<form action="" method="post">
                // <input type="text" name="Transaction_ID" placeholder="Transaction ID" /><br/>
                // <input type="password" name="Password" placeholder="Password" /><br/>
                // <input type="password" name="OTP" placeholder="OTP" /><br/>
                // <input type="submit" name="Pay" value="Pay"/></form>';
                
                echo '<h1>Your due amount is: Rs.' . $row['AmountDue'] . '</h1>';
                echo '<form action="ack.php" method="post">
                <input type="text" name="Transaction_ID" placeholder="Transaction ID" /><br/>
                <input type="password" name="Password" placeholder="Password" /><br/>
                <input type="password" name="OTP" placeholder="OTP" /><br/>
                <input type="submit" name="Pay" value="Pay"/></form>';
                

                // if(isset($_POST["Submit1"]))
                // {
                // $sum=$_POST["str1"] + $_POST["str2"];
                // echo "The sum = ". $sum;

                // }

                // if(isset($_POST["Pay"]))
                // {
                //     $sql2 = "UPDATE gujaratgas SET AmountPaid=AmountDue, AmountDue=0 WHERE CustomerId='$url_id'";
                //     $result2 = $conn->query($sql2);
                // }

                // $sql = "UPDATE gujaratgas SET AmountPaid=AmountDue, AmountDue=0 WHERE CustomerId='$url_id'";
                // $result = $conn->query($sql);

                // $page = "ack.php";
                // $sec = "1";
                // header("Refresh: $sec; url=$page");
                }
                // echo '<button class="button button1">' . 'Pay Now' . '</button>';
            }
            // echo '<h1>' . 'Welcome Mr. Pushottam' . '</h1>';
            // echo '<h1>' . $_POST["customer_id"] . '</h1>';
            // echo '<h1>Your due amount is: Rs. 300</h1>';
        } else {
            echo '<h1>' . 'Not a valid Customer ID' . '</h1>';
        }
    }
    ?>




</body>

</html>