<?php
session_start();

if (!isset($_SESSION['username'])) {
    // If the user is not logged in, redirect them to the login page
    header("Location: login.php");
    exit;
}

echo "Welcome, " . $_SESSION['username'] . "! You are logged in.";
?>

<!-- Link to the long page (page4.html) -->
<a href="page4.html">Go to Long Page (page4.html)</a>
