<?php
require('fpdf.php');
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "pulsess";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$app_no = $_POST['application_number'];
$sql = "SELECT * FROM aadhaar_form_data WHERE application_number='$app_no'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    $row = $result->fetch_assoc();

    $pdf = new FPDF();
    $pdf->AddPage();

    // Header
    $pdf->SetFillColor(0, 153, 76); // Green background
    $pdf->SetTextColor(255);
    $pdf->SetFont('Arial', 'B', 14);
    $pdf->Cell(0, 10, 'Aadhaar Enrolment/Correction/Update Form', 0, 1, 'C', true);

    $pdf->SetTextColor(0);
    $pdf->SetFont('Arial', 'B', 12);
    $pdf->Ln(5);
    $pdf->Cell(0, 10, 'Section 1: Basic Details', 0, 1);
    $pdf->SetFont('Arial', '', 12);
    $pdf->Cell(60, 8, 'Application Number:', 0, 0);
    $pdf->Cell(80, 8, $row['application_number'], 0, 1);
    $pdf->Cell(60, 8, 'Aadhaar Number:', 0, 0);
    $pdf->Cell(80, 8, $row['aadhaar_number'] ?? 'N/A', 0, 1);
    $pdf->Cell(60, 8, 'Fields to Update:', 0, 0);
    $pdf->Cell(80, 8, $row['fields_to_update'] ?? 'N/A', 0, 1);

    $pdf->Ln(5);
    $pdf->SetFont('Arial', 'B', 12);
    $pdf->Cell(0, 10, 'Section 2: Personal Information', 0, 1);
    $pdf->SetFont('Arial', '', 12);
    $pdf->Cell(60, 8, 'Full Name:', 0, 0);
    $pdf->Cell(80, 8, $row['full_name'], 0, 1);
    $pdf->Cell(60, 8, 'Gender:', 0, 0);
    $pdf->Cell(80, 8, $row['gender'], 0, 1);
    $pdf->Cell(60, 8, 'Date of Birth:', 0, 0);
    $pdf->Cell(80, 8, $row['dob'], 0, 1);
    $pdf->Cell(60, 8, 'Mobile Number:', 0, 0);
    $pdf->Cell(80, 8, $row['mobile'], 0, 1);
    $pdf->Cell(60, 8, 'Email:', 0, 0);
    $pdf->Cell(80, 8, $row['email'], 0, 1);
    $pdf->Cell(60, 8, 'Address:', 0, 0);
    $pdf->MultiCell(120, 8, $row['address']);

    $pdf->Ln(5);
    $pdf->SetFont('Arial', 'B', 12);
    $pdf->Cell(0, 10, 'Section 3: Document Verification', 0, 1);
    $pdf->SetFont('Arial', '', 12);
    $pdf->Cell(60, 8, 'Verification Type:', 0, 0);
    $pdf->Cell(80, 8, $row['verification_type'] ?? 'N/A', 0, 1);
    $pdf->Cell(60, 8, 'Proof of Identity:', 0, 0);
    $pdf->Cell(80, 8, $row['proof_identity'] ?? 'N/A', 0, 1);
    $pdf->Cell(60, 8, 'Proof of Address:', 0, 0);
    $pdf->Cell(80, 8, $row['proof_address'] ?? 'N/A', 0, 1);

    $pdf->Ln(5);
    $pdf->SetFont('Arial', 'B', 12);
    $pdf->Cell(0, 10, 'Section 5: Document Selection', 0, 1);
    $pdf->SetFont('Arial', '', 12);
    $pdf->Cell(60, 8, 'Selected Documents:', 0, 0);
    $pdf->Cell(80, 8, $row['selected_documents'] ?? 'N/A', 0, 1);

    // Received By Section
    $pdf->Ln(10);
    $pdf->SetFont('Arial', 'B', 12);
    $pdf->Cell(0, 10, 'Received By:', 0, 1, 'L');
    
    $pdf->SetFont('Arial', '', 12);
    $pdf->Cell(80, 8, 'Name: ____________________________', 0, 1);
    $pdf->Cell(80, 8, 'Designation: _______________________', 0, 1);
    $pdf->Cell(80, 8, 'Date: _____________________________', 0, 1);

    // Generated On
    $pdf->Ln(10);
    $pdf->SetFont('Arial', '', 10);
    $pdf->Cell(0, 10, 'Generated on: ' . date('d-m-Y h:i A'), 0, 1, 'R');

    $pdf->Output();
} else {
    echo "No application found!";
}

$conn->close();
?>
