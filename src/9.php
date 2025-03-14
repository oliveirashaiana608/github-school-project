<?php

// Connect to the database
$db = new PDO('mysql:host=localhost;dbname=test', 'username', 'password');

// Retrieve all data from the "users" table
$stmt = $db->prepare('SELECT * FROM users');
$stmt->execute();
$results = $stmt->fetchAll();

// Print each user's name and email address
foreach ($results as $row) {
    echo $row['name'] . ' - ' . $row['email'] . '<br>';
}

?>