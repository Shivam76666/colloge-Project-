<?php
// Database connection settings
$servername = "localhost";
$username = "root";  // Replace with your database username
$password = "";      // Replace with your database password
$dbname = "pan_card_requests";

// Create a connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check the connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Collecting form data
// Ensure $_POST['title'] is always treated as an array, even if only one checkbox is selected
$title = isset($_POST['title']) ? (is_array($_POST['title']) ? implode(", ", $_POST['title']) : $_POST['title']) : '';

// Other form data
$last_name = $_POST['last_name'];
$first_name = $_POST['first_name'];
$middle_name = $_POST['middle_name'];
$printed_name = $_POST['printed_name'];
$father_last = $_POST['father_last'];
$father_first = $_POST['father_first'];
$father_middle = $_POST['father_middle'];
$dob = $_POST['dob'];
$gender = $_POST['gender'];
$address_type = $_POST['address_type'];
$address = $_POST['address'];
$city = $_POST['city'];
$state = $_POST['state'];
$pincode = $_POST['pincode'];
$country = $_POST['country'];
$country_code = $_POST['country_code'];
$area_code = $_POST['area_code'];
$mobile = $_POST['mobile'];
$email = $_POST['email'];
$aadhaar = $_POST['aadhaar'];
$pan1 = $_POST['pan1'];
$pan2 = $_POST['pan2'];
$pan3 = $_POST['pan3'];
$pan4 = $_POST['pan4'];
$applicant_name = $_POST['applicant_name'];
$capacity = $_POST['capacity'];
$documents_count = $_POST['documents_count'];
$place = $_POST['place'];
$form_date = $_POST['form_date'];

// SQL query to insert data
$sql = "INSERT INTO pan_requests 
        (title, last_name, first_name, middle_name, printed_name, father_last, father_first, father_middle, dob, gender, 
         address_type, address, city, state, pincode, country, country_code, area_code, mobile, email, aadhaar, 
         pan1, pan2, pan3, pan4, applicant_name, capacity, documents_count, place, form_date)
        VALUES ('$title', '$last_name', '$first_name', '$middle_name', '$printed_name', '$father_last', '$father_first', 
                '$father_middle', '$dob', '$gender', '$address_type', '$address', '$city', '$state', '$pincode', 
                '$country', '$country_code', '$area_code', '$mobile', '$email', '$aadhaar', '$pan1', '$pan2', '$pan3', 
                '$pan4', '$applicant_name', '$capacity', '$documents_count', '$place', '$form_date')";

if ($conn->query($sql) === TRUE) {
    echo "Record inserted successfully!";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

// Close the connection
$conn->close();
?>
