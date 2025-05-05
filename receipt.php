<?php
$conn = new mysqli("localhost", "root", "", "aadhaar_form_data");

$txn_id = $_GET['txn_id'];
$result = $conn->query("SELECT * FROM payments WHERE transaction_id = '$txn_id'");

if ($row = $result->fetch_assoc()) {
    echo "<h2>Payment Receipt</h2>";
    echo "<p>Application No: " . $row['application_number'] . "</p>";
    echo "<p>Transaction ID: " . $row['transaction_id'] . "</p>";
    echo "<p>Payment Method: " . $row['payment_method'] . "</p>";
    echo "<p>Amount Paid: ₹" . $row['amount'] . "</p>";
    echo "<p>Status: " . $row['status'] . "</p>";
    echo "<p>Date: " . $row['payment_date'] . "</p>";
} else {
    echo "Invalid Transaction ID";
}
$conn->close();
?>
