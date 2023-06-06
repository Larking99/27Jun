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

// Retrieve the ID of the record to delete
$id = mysqli_real_escape_string($conn, $_GET['id']);

// Delete the record from the database
$query = "DELETE FROM users WHERE id='$id'";
if (mysqli_query($conn, $query)) {
    echo 'Record deleted successfully.';
} else {
    echo 'Error: ' . mysqli_error($conn);
}

// Close the database connection
mysqli_close($conn);
?>
