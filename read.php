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

// Retrieve data from the database
$query = "SELECT * FROM users";
$result = mysqli_query($conn, $query);

if (!$result) {
    echo 'Error: ' . mysqli_error($conn);
} else {
    
// Display the data
while ($row = mysqli_fetch_assoc($result)) {
    echo 'Name: ' . $row['name'] . '<br>';
    echo 'Email: ' . $row['email'] . '<br>';
    echo 'Password: ' . $row['password'] . '<br>';
    echo 'DOB: ' . $row['dob'] . '<br><br>';
}
}

// Close the database connection
mysqli_close($conn);
?>
