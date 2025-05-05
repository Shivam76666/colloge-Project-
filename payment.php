<?php
// Ensure application number is passed via GET or set default
$application_number = $_GET['app_no'] ?? 'APP123456';
?>

<!DOCTYPE html>
<html>
<head>
    <title>Payment Gateway</title>
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
        h2 {
            text-align: center;
            color: #333;
        }
        label, select, input, button {
            width: 100%;
            padding: 10px;
            margin-top: 10px;
        }
        button {
            background-color: #4CAF50;
            color: white;
            border: none;
            cursor: pointer;
            font-weight: bold;
        }
        button:hover {
            background-color: #45a049;
        }
        .method-details {
            display: none;
        }
    </style>
</head>
<body>

<div class="container">
    <h2> Payment Page</h2>

    <form action="payment_process.php" method="post">
        <label>Application Number:</label>
        <input type="text" value="<?php echo $application_number; ?>" disabled>
        <input type="hidden" name="application_number" value="<?php echo $application_number; ?>">

        <label>Amount to Pay:</label>
        <input type="text" value="₹50.00" disabled>
        <input type="hidden" name="amount" value="50.00">

        <label>Choose Payment Method:</label>
        <select name="payment_method" id="payment_method" required onchange="showMethodFields()">
            <option value="">-- Select --</option>
            <option value="UPI">UPI</option>
            <option value="Card">Card</option>
            <option value="Net Banking">Net Banking</option>
        </select>

        <!-- UPI Section -->
        <div id="upi_section" class="method-details">
            <label>Enter UPI ID:</label>
            <input type="text" name="upi_id" placeholder="example@upi">
        </div>

        <!-- Card Section -->
        <div id="card_section" class="method-details">
            <label>Card Number:</label>
            <input type="text" name="card_number" placeholder="1234 5678 9012 3456">
            <label>Expiry Date:</label>
            <input type="text" name="expiry_date" placeholder="MM/YY">
            <label>CVV:</label>
            <input type="password" name="cvv" placeholder="123">
        </div>

        <!-- Net Banking Section -->
        <div id="netbanking_section" class="method-details">
            <label>Select Your Bank:</label>
            <select name="bank_name">
                <option value="">-- Choose Bank --</option>
                <option value="SBI">State Bank of India</option>
                <option value="HDFC">HDFC Bank</option>
                <option value="ICICI">ICICI Bank</option>
                <option value="Axis">Axis Bank</option>
                <option value="PNB">Punjab National Bank</option>
            </select>
        </div>

        <button type="submit">Pay Now</button>
    </form>
</div>

<script>
    function showMethodFields() {
        // Hide all
        document.getElementById('upi_section').style.display = 'none';
        document.getElementById('card_section').style.display = 'none';
        document.getElementById('netbanking_section').style.display = 'none';

        // Show selected
        const method = document.getElementById('payment_method').value;
        if (method === "UPI") {
            document.getElementById('upi_section').style.display = 'block';
        } else if (method === "Card") {
            document.getElementById('card_section').style.display = 'block';
        } else if (method === "Net Banking") {
            document.getElementById('netbanking_section').style.display = 'block';
        }
    }
</script>

</body>
</html>
