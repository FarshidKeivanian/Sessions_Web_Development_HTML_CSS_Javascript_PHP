<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "mywebsite";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Insert new users with plain text passwords
$sql1 = "INSERT INTO users (username, password, firstname, lastname, age, country) VALUES ('testuser1', 'userpassword1', 'John', 'Doe', 25, 'USA')";

if ($conn->query($sql1) === TRUE && $conn->query($sql2) === TRUE) {
    echo "New records created successfully";
} else {
    echo "Error: " . $conn->error;
}

$conn->close();
?>
