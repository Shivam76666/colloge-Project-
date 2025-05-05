<?php
// Assume application_no is generated in form2.php and passed via URL
$application_no = $_GET['application_no'];
?>

<h2>Form Submitted Successfully!</h2>
<p>Your Application Number is: <strong><?php echo $application_no; ?></strong></p>

<a href="payment.php?application_no=<?php echo $application_no; ?>">
    <button>Proceed to Payment</button>
</a>

<a href="print_application.php?application_no=<?php echo $application_no; ?>" target="_blank">
    <button>Print Application</button>
</a>
