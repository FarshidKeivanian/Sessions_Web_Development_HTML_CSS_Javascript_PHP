<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "mywebsite";
// Create connection
$conn = new mysqli($servername, $username, $password);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
// Create database
$sql = "CREATE DATABASE IF NOT EXISTS $dbname";
if ($conn->query($sql) === TRUE) {
    echo "Database created successfully or already exists.<br>";
} else {
    echo "Error creating database: " . $conn->error;
}
$conn->select_db($dbname);
// Create table
$sql = "CREATE TABLE IF NOT EXISTS users (
    id INT AUTO_INCREMENT PRIMARY KEY,
    username VARCHAR(50) NOT NULL UNIQUE,
    password VARCHAR(255) NOT NULL,
    firstname VARCHAR(50) NOT NULL,
    lastname VARCHAR(50) NOT NULL,
    age INT NOT NULL,
    country VARCHAR(50) NOT NULL
)";
if ($conn->query($sql) === TRUE) {
    echo "Table created successfully or already exists.<br>";
} else {
    echo "Error creating table: " . $conn->error;
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