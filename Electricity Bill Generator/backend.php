<!DOCTYPE html>
<html>
<head>
    <title>Electricity Bill</title>
    <link rel="stylesheet" type="text/css" href="styles.css">
</head>
<body>
    <div class="container">
        <h1>Electricity Bill</h1>
        <?php
        if ($_SERVER["REQUEST_METHOD"] === "POST") {
            $units = $_POST["units"];
            $name = $_POST["names"];
            
            if($units<=50)
                $ratePerUnit=3.50;
            else if($units>50&&$units<=150)
                $ratePerUnit=4.00;
            else if($units>150&&$units<=250)
                $ratePerUnit=5.20;
            else 
                $ratePerUnit=6.50;

            $totalBill = $units * $ratePerUnit;
        ?>
            <p>Name: <?php echo $name; ?></p>
            <p>Total Units Consumed: <?php echo $units; ?></p>
            <p>Total Amount Payable: Rs. <?php echo $totalBill; ?></p>
            <h3>Payment Options</h3>
            
            <div style="margin-left:110px">
                <button><img src="upi.png" width="40px" height="40px"></button>
                <button><img src="mastercard.png" width="40px" height="40px"></button>
                <button><img src="visa.png" width="40px" height="40px"></button>
            </div>
        <?php
        } else {
            echo "<p>No units provided. Please go back and enter units.</p>";
        }
        ?>
    </div>
</body>
</html>
