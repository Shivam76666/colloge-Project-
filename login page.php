<?php
session_start();

// Database connection settings
$servername = "localhost"; // Your server name, e.g., 'localhost'
$username = "root"; // Your MySQL username
$password = ""; // Your MySQL password
$dbname = "registrationdb"; // Your database name

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Get form data
    $userID = $_POST['username'];
    $password = $_POST['password'];

    // Prepare SQL statement to fetch user data
    $stmt = $conn->prepare("SELECT * FROM registrations WHERE username = ?");
    $stmt->bind_param("s", $userID);
    $stmt->execute();
    $result = $stmt->get_result();
    
    // Check if user exists
    if ($result->num_rows > 0) {
        // Fetch the user data
        $user = $result->fetch_assoc();
        
        // Verify password
        if (password_verify($password, $user['password'])) {
            // Password is correct, login success
            $_SESSION['username'] = $user['username']; // Set session variable
            header("Location: index1.html"); // Redirect to long page4.html after successful submit
            exit;
        } else {
            // Invalid password
            header("Location: login.php?message=Invalid password!");
            exit;
        }
    } else {
        // User not found
        header("Location: login.php?message=No user found with that username!");
        exit;
    }

    // Close statement and connection
    $stmt->close();
    $conn->close();
}
?>
