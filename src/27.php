<?php
// Initialize session
session_start();

// Check if user is already logged in
if (!isset($_SESSION['username'])) {
    // Redirect to login page
    header("Location: http://example.com/login.php");
    exit();
}

// Get user data from session
$username = $_SESSION['username'];

// Check if the username exists in the database
$user_info = queryUserByUsername($username);

if ($user_info) {
    // User is logged in, proceed with authentication
    echo "Welcome, $username!";
} else {
    // User is not logged in, redirect to login page
    header("Location: http://example.com/login.php");
    exit();
}
?>
