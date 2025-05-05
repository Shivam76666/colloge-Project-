<?php
// Database connection (edit if needed)
$conn = new mysqli("localhost", "root", "", "pulsess");

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Get the payment details from the form submission
$application_number = mysqli_real_escape_string($conn, $_POST['application_number']);
$amount = mysqli_real_escape_string($conn, $_POST['amount']);
$payment_method = mysqli_real_escape_string($conn, $_POST['payment_method']);

// Payment-specific data (based on payment method)
$payment_details = '';
if ($payment_method == "UPI") {
    $payment_details = mysqli_real_escape_string($conn, $_POST['upi_id'] ?? 'No UPI ID entered');
} elseif ($payment_method == "Card") {
    $payment_details = 'Card Number: ' . mysqli_real_escape_string($conn, $_POST['card_number']) . ', Expiry: ' . mysqli_real_escape_string($conn, $_POST['expiry_date']);
} elseif ($payment_method == "Net Banking") {
    $payment_details = 'Bank: ' . mysqli_real_escape_string($conn, $_POST['bank_name']);
}

// Debugging: Check form data
// echo "App No: $application_number, Amount: $amount, Payment Method: $payment_method, Payment Details: $payment_details";

// Save payment details in the database
$sql = "INSERT INTO payments1 (application_number, amount, payment_method, payment_details, payment_status) 
        VALUES ('$application_number', '$amount', '$payment_method', '$payment_details', 'Pending')";

if ($conn->query($sql) === TRUE) {
    // Redirect to payment confirmation page
    header("Location: payment_success.php?app_no=$application_number");
    exit();
} else {
    // Handle error if the insertion fails
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>
