<?php

require_once('../model/db.php');

// Function to sanitize input data
function sanitizeInput($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}

// Check if the form is submitted
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Retrieve and sanitize form data
    $name = sanitizeInput($_POST['name']);
    $contact = sanitizeInput($_POST['contact']);
    $username = sanitizeInput($_POST['username']);
    $password = password_hash($_POST['password'], PASSWORD_DEFAULT); 

    // Insert data into the database
    $sql = "INSERT INTO registration_db (name, contact, username, password) VALUES ('$name', '$contact', '$username', '$password')";

    if (mysqli_query($conn, $sql)) {
        echo "Registration successful!";
       
    } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }

    // Close the database connection
    mysqli_close($conn);
}
?>
