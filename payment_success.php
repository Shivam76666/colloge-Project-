<?php
$application_number = $_GET['app_no'] ?? 'APP123456';
?>

<!DOCTYPE html>
<html>
<head>
    <title>Payment Successful</title>
    <style>
        body {
            font-family: Arial;
            background-color: #f2f2f2;
            padding: 30px;
        }
        .container {
            background-color: #fff;
            width: 400px;
            margin: auto;
            padding: 25px;
            border-radius: 10px;
            box-shadow: 0 0 10px #aaa;
        }
        h2 { text-align: center; color: #333; }
        p {
            text-align: center;
            color: green;
            font-size: 18px;
        }
    </style>
</head>
<body>

<div class="container">
    <h2>Payment Successful</h2>
    <p>Your payment has been processed successfully!</p>
    <p><strong>Application Number:</strong> <?php echo $application_number; ?></p>
    <p><a href="long page4.html">Back to Home</a></p>
</div>

</body>
</html>
