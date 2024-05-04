<?php
session_start(); // Ensure access to session variables

if (isset($_SESSION['name']) && isset($_SESSION['email'])) {
    echo "<h1>Welcome, " . $_SESSION['name'] . "!</h1>";
    echo "<p>Your registration is confirmed.</p>";
    echo "<p>Email: " . $_SESSION['email'] . "</p>";
    echo "<p>You are accessing this from " . $_SERVER['REMOTE_ADDR'] . "</p>";
} else {
    echo "<p>Error: It looks like you haven't registered.</p>";
}
?>
