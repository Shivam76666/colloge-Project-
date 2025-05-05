<?php
$host = "localhost";
$username = "root";
$password = "";
$database = "pulsess";

// Create DB connection
$conn = new mysqli($host, $username, $password, $database);

// Check DB connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Function to generate unique application number
function generateApplicationNumber() {
    $prefix = "APP";
    $datePart = date("Ymd");
    $randomPart = mt_rand(1000, 9999);
    return $prefix . $datePart . $randomPart;
}

// Generate application number
$applicationNumber = generateApplicationNumber();

// File upload folder
$uploadDir = "uploads/";
if (!is_dir($uploadDir)) {
    mkdir($uploadDir, 0777, true);
}

// Get form data
$residentType = $_POST['residentType'];
$preEnrolmentId = $_POST['preEnrolmentId'];
$aadhaarNumber = $_POST['aadhaarNumber'];
$updateFields = isset($_POST['updateField']) ? implode(", ", $_POST['updateField']) : '';
$fullName = $_POST['fullName'];
$gender = $_POST['gender'];
$dob = $_POST['dob'];
$address = $_POST['address'];
$mobile = $_POST['mobile'];
$email = $_POST['email'];
$verificationType = $_POST['verificationType'];
$documentType = $_POST['documentType'];
$panNumber = $_POST['panNumber'] ?? '';
$voterIdNumber = $_POST['voterIdNumber'] ?? '';
$declarationConfirmed = isset($_POST['declarationCheckbox']) ? 1 : 0;

// Handle file uploads
$poiFile = $_FILES['poi']['name'];
$poaFile = $_FILES['poa']['name'];

// Validate file types (only allow PDF, JPG, PNG)
$allowedTypes = ['image/jpeg', 'image/png', 'application/pdf'];
$poiFileType = $_FILES['poi']['type'];
$poaFileType = $_FILES['poa']['type'];

// Check file types
if (!in_array($poiFileType, $allowedTypes) || !in_array($poaFileType, $allowedTypes)) {
    die("Error: Invalid file type. Only JPG, PNG, or PDF files are allowed.");
}

// Check file size (max 5MB for each file)
$maxFileSize = 5 * 1024 * 1024; // 5MB
if ($_FILES['poi']['size'] > $maxFileSize || $_FILES['poa']['size'] > $maxFileSize) {
    die("Error: File size exceeds the 5MB limit.");
}

$poiTarget = $uploadDir . basename($poiFile);
$poaTarget = $uploadDir . basename($poaFile);

// Move files to the upload directory
if (!move_uploaded_file($_FILES['poi']['tmp_name'], $poiTarget)) {
    die("Error: Failed to upload POI file.");
}

if (!move_uploaded_file($_FILES['poa']['tmp_name'], $poaTarget)) {
    die("Error: Failed to upload POA file.");
}

// Insert data into the database
$sql = "INSERT INTO aadhaar_form_data (
    application_number, resident_type, pre_enrolment_id, aadhaar_number, update_fields, full_name, gender, dob, address, mobile, email, 
    verification_type, poi_file, poa_file, document_type, pan_number, voter_id_number, declaration_confirmed
) VALUES (
    ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?
)";

// Prepare the statement
$stmt = $conn->prepare($sql);
$stmt->bind_param(
    "ssssssssssssssssis",
    $applicationNumber, $residentType, $preEnrolmentId, $aadhaarNumber, $updateFields, $fullName, $gender, $dob, $address,
    $mobile, $email, $verificationType, $poiFile, $poaFile, $documentType, $panNumber, $voterIdNumber, $declarationConfirmed
);

// Execute the query
if ($stmt->execute()) {
    // ✅ Redirect to payment page with application number
    header("Location: payment.php?app_no=$applicationNumber");
    exit();
} else {
    // Error: Output the error message from the prepared statement
    echo "Error: " . $stmt->error;
}

$stmt->close();
$conn->close();
?>
