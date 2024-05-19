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

// Insert a new user
$hashed_password = password_hash("userpassword", PASSWORD_DEFAULT);
$sql = "INSERT INTO users (username, password, firstname, lastname, age, country) VALUES ('testuser', '$hashed_password', 'John', 'Doe', 25, 'USA')";
if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>
