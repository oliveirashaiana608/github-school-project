<?php
// Initialize database connection
$conn = mysqli_connect("localhost", "root", "password", "school_project");

// Check if the connection was successful
if ($conn) {
    echo "Connection to the database is successful.";
} else {
    echo "Error: Could not connect to the database. Please check your credentials and try again.";
}
?>
