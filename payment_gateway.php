<?php
// 1. Database connection
$host     = "localhost";
$username = "root";
$password = "";
$database = "pulsess";           // change if your DB is named differently

$conn = new mysqli($host, $username, $password, $database);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// 2. Retrieve POST data
$appNo      = $_POST['application_number'] ?? '';
$amount     = $_POST['amount'] ?? 0;
$method     = $_POST['payment_method'] ?? '';
// 3. Generate a pseudo‑random transaction ID
$txnId      = 'TXN' . time() . mt_rand(100, 999);
// 4. Set the status to match your ENUM('Pending','Completed','Failed')
$status     = 'Completed';

// 5. Insert into payments table with the correct column names
$sql = "INSERT INTO payments 
    (application_number, amount, payment_method, transaction_id, payment_status)
  VALUES (?,?,?,?,?)";
$stmt = $conn->prepare($sql);
$stmt->bind_param("sdsss", $appNo, $amount, $method, $txnId, $status);

if (!$stmt->execute()) {
    die("Insert error: " . $stmt->error);
}

// 6. Close the statement (we’ll close the connection after HTML)
?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
  <title>Payment Receipt</title>
  <style>
    body { font-family: Arial, sans-serif; background-color: #f9f9f9; padding: 40px; }
    .receipt { max-width: 500px; margin: auto; background: #fff; padding: 30px; border-radius: 8px; box-shadow: 0 0 10px rgba(0,0,0,0.1); }
    h1 { text-align: center; color: #4CAF50; }
    p { font-size: 1rem; margin: 10px 0; }
    .label { font-weight: bold; }
  </style>
</head>
<body>

  <div class="receipt">
    <h1>Payment Successful</h1>
    <p><span class="label">Application No.:</span> <?php echo htmlspecialchars($appNo); ?></p>
    <p><span class="label">Amount Paid:</span> ₹<?php echo number_format($amount, 2); ?></p>
    <p><span class="label">Payment Method:</span> <?php echo htmlspecialchars($method); ?></p>
    <p><span class="label">Transaction ID:</span> <?php echo htmlspecialchars($txnId); ?></p>
    <p><span class="label">Status:</span> <?php echo htmlspecialchars($status); ?></p>
    <p style="text-align:center; margin-top:20px;">Thank you for your payment!</p>
  </div>

</body>
</html>

<?php
// 7. Clean up
$stmt->close();
$conn->close();
?>
