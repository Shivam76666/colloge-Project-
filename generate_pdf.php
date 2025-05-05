<?php
require('fpdf.php');
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "pulsess";

// DB se data fetch karna
$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$app_no = $_POST['application_number'];

$sql = "SELECT * FROM aadhaar_data WHERE application_number='$app_no'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    $row = $result->fetch_assoc();

    $pdf = new FPDF();
    $pdf->AddPage();

    // Heading
    $pdf->SetFont('Arial', 'B', 16);
    $pdf->Cell(0, 10, 'Aadhaar Application Details', 0, 1, 'C');

    $pdf->SetFont('Arial', '', 12);

    // Displaying data
    $pdf->Ln(5);
    $pdf->Cell(50, 10, 'Application No:', 0, 0);
    $pdf->Cell(100, 10, $row['application_number'], 0, 1);

    $pdf->Cell(50, 10, 'Full Name:', 0, 0);
    $pdf->Cell(100, 10, $row['full_name'], 0, 1);

    $pdf->Cell(50, 10, 'DOB:', 0, 0);
    $pdf->Cell(100, 10, $row['dob'], 0, 1);

    $pdf->Cell(50, 10, 'Gender:', 0, 0);
    $pdf->Cell(100, 10, $row['gender'], 0, 1);

    $pdf->Cell(50, 10, 'Mobile Number:', 0, 0);
    $pdf->Cell(100, 10, $row['mobile'], 0, 1);

    $pdf->Cell(50, 10, 'Email:', 0, 0);
    $pdf->Cell(100, 10, $row['email'], 0, 1);

    $pdf->Cell(50, 10, 'Address:', 0, 0);
    $pdf->MultiCell(100, 10, $row['address']);

    $pdf->Ln(10);
    $pdf->Cell(0, 10, 'Generated on: ' . date('d-m-Y'), 0, 1, 'R');

    $pdf->Output();
} else {
    echo "No application found!";
}

$conn->close();
?>
