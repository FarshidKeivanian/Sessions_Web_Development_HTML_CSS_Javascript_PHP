<?php
session_start();

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $username = $_POST['username'];
    $password = $_POST['password'];

    // Placeholder for actual authentication logic
    // Here, we simply check if the username and password are "admin"
    if ($username === 'admin' && $password === 'admin') {
        $_SESSION['loggedin'] = true;
        echo "Login successful!";
    } else {
        echo "Invalid username or password.";
    }
} else {
    echo "Invalid request method.";
}
?>
