<?php
date_default_timezone_set('Australia/Sydney');
$hourOfDay = date("G");

// Check if 'artType' is set in the URL parameters, otherwise default to 'default'
$artType = isset($_GET['artType']) ? $_GET['artType'] : 'default';

// Greeting based on time of day
if ($hourOfDay > 6 && $hourOfDay < 12) {
    $greeting = "Good Morning";
} elseif ($hourOfDay == 12) {
    $greeting = "Good Noon Time";
} else {
    $greeting = "Good Afternoon or Evening";
}

// Suggest activity based on art preference
switch ($artType) {
    case "PT":
        $output = "Painting Exhibition";
        break;
    case "SC":
        $output = "Sculpture Workshop";
        break;
    default:
        $output = "Local Art Gallery Tour";
        break;
}

// Define a custom function
function familyName($fname, $year) {
    echo "$fname Refsnes. Born in $year<br>";
}

// Use the custom function
familyName("Hege", "1975");
familyName("Stale", "1978");
familyName("Kai Jim", "1983");

// Output the greeting and suggested activity
echo $greeting . "! Here is a suggested activity for you: " . $output . ".";
?>
