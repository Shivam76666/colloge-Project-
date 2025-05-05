<?php
error_reporting(E_ALL);
ini_set('display_errors', 1); // Enable error reporting

require('fpdf/fpdf.php'); // Include FPDF library

// Database connection
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "pulseess";

$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Check if application number is passed
if (!isset($_GET['application_number']) || empty($_GET['application_number'])) {
    echo "Error: Application number is missing.";
    exit;
}

$application_number = $_GET['application_number'];

// Use prepared statement for security
$sql = "SELECT * FROM aadhaar_form_data WHERE application_number = ?";
$stmt = $conn->prepare($sql);
$stmt->bind_param("s", $application_number);
$stmt->execute();
$result = $stmt->get_result();

// Check if data is found
if ($result->num_rows > 0) {
    $row = $result->fetch_assoc();

    // Debugging output
    echo "<pre>";
    print_r($row); // Check the fetched data
    echo "</pre>";

    // Generate PDF
    $pdf = new FPDF();
    $pdf->AddPage();
    $pdf->SetFont('Arial', 'B', 16);
    $pdf->Cell(200, 10, "Aadhaar Form - Application Number: " . $application_number, 0, 1, 'C');

    $pdf->Ln(10);
    $pdf->SetFont('Arial', '', 12);
    $pdf->Cell(40, 10, 'Name:');
    $pdf->Cell(0, 10, $row['name'], 0, 1);
    $pdf->Cell(40, 10, 'Date of Birth:');
    $pdf->Cell(0, 10, $row['dob'], 0, 1);
    $pdf->Cell(40, 10, 'Address:');
    $pdf->Cell(0, 10, $row['address'], 0, 1);
    $pdf->Cell(40, 10, 'Contact:');
    $pdf->Cell(0, 10, $row['contact'], 0, 1);
    $pdf->Cell(40, 10, 'Email:');
    $pdf->Cell(0, 10, $row['email'], 0, 1);

    // Output the PDF (force download)
    $pdf_filename = "aadhaar_APP" . $application_number . ".pdf";
    $pdf->Output('D', $pdf_filename);
} else {
    echo "No record found for the given application number.";
}

$conn->close();
?>
