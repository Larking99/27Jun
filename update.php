<?php
// Connection parameters
$host = 'localhost';
$database = 'registration_form';
$username = 'student';
$password = '#2Larking';

// Connect to MySQL
$conn = mysqli_connect($host, $username, $password, $database);
if (!$conn) {
    die('Could not connect to the database: ' . mysqli_connect_error());
}

// Retrieve form data and escape special characters
$name = mysqli_real_escape_string($conn, $_POST['name']);
$email = mysqli_real_escape_string($conn, $_POST['email']);
$password = mysqli_real_escape_string($conn, $_POST['password']);
$dob = mysqli_real_escape_string($conn, $_POST['dob']);
$id = mysqli_real_escape_string($conn, $_POST['id']);

// Perform any additional validation or sanitization here

// Update form data in the database
$query = "UPDATE users SET name='$name', email='$email', password='$password', dob='$dob' WHERE id='$id'";
if (mysqli_query($conn, $query)) {
    echo 'Record updated successfully.';
} else {
    echo 'Error: ' . mysqli_error($conn);
}

// Close the database connection
mysqli_close($conn);
?>
