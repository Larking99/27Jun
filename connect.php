<?php 
// Connection values
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

// Insert form data into the database
$query = "INSERT INTO users (name, email, password, dob) VALUES ('$name', '$email', '$password', '$dob')";
if (mysqli_query($conn, $query)) {
    echo 'Registration successful.';
} else {
    echo 'Error: ' . mysqli_error($conn);
}

// Close the database connection
mysqli_close($conn);
?>
