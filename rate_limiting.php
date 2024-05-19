<?php
session_start();

// Function to perform rate limiting
function rateLimit($userIP, $maxRequests, $timeFrame) {
    // Initialize or update session variables for rate limiting
    if (!isset($_SESSION['requests'][$userIP])) {
        $_SESSION['requests'][$userIP] = ['count' => 1, 'start_time' => time()];
    } else {
        $sessionData = &$_SESSION['requests'][$userIP];
        $sessionData['count']++;
        $elapsedTime = time() - $sessionData['start_time'];
        
        if ($elapsedTime > $timeFrame) {
            $sessionData['count'] = 1;
            $sessionData['start_time'] = time();
        }
        
        if ($sessionData['count'] > $maxRequests) {
            return false;
        }
    }
    return true;
}

$userIP = $_SERVER['REMOTE_ADDR'];
$maxRequests = 10; // Maximum allowed requests
$timeFrame = 60; // Time frame in seconds

if (!rateLimit($userIP, $maxRequests, $timeFrame)) {
    header("HTTP/1.1 429 Too Many Requests");
    exit("Too many requests. Please try again later.");
}

// Proceed with normal processing if rate limit is not exceeded
echo "Welcome! You have access to the site.";
?>
