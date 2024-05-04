<?php
session_start(); // Start the session to store user data

// Check if the form was submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Collect and sanitize user input
    $name = htmlspecialchars($_POST['name']);
    $email = htmlspecialchars($_POST['email']);

    // Store data in session variables
    $_SESSION['name'] = $name;
    $_SESSION['email'] = $email;

    // Redirect to a confirmation page
    header("Location: Registration Confirmation Page.php");
    exit();
}
?>
