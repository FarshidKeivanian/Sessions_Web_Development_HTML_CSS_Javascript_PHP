<?php
date_default_timezone_set('Australia/Sydney');
$hourOfDay = date("G");

// Check if 'artType' is set in the URL parameters, otherwise default to 'default'
$artType = isset($_GET['artType']) ? $_GET['artType'] : 'default';

// Greeting based on time of day
if ($hourOfDay >= 6 && $hourOfDay < 12) {
    $greeting = "Good Morning";
} elseif ($hourOfDay >= 12 && $hourOfDay < 18) {
    $greeting = "Good Afternoon";
} else {
    $greeting = "Good Evening";
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

// Check if the form has been submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $firstName = htmlspecialchars($_POST['firstName']);  // Collecting first name
    $familyName = htmlspecialchars($_POST['familyName']);  // Collecting family name
    $yearOfBirth = htmlspecialchars($_POST['yearOfBirth']);  // Collecting year of birth

    // Function to display the name and year of birth
    function displayFamilyNameAndYear($firstName, $familyName, $yearOfBirth) {
        return "$firstName $familyName. You were born in $yearOfBirth.";
    }

    // Output the greeting, suggested activity, and personal information
    echo $greeting . " " . $firstName . "! Here is a suggested activity for you: " . $output . ". ";
    echo displayFamilyNameAndYear($firstName, $familyName, $yearOfBirth);
} else {
    // Display the form for the first time
    ?>
    <form action="" method="post">
        First Name: <input type="text" name="firstName" required><br>
        Family Name: <input type="text" name="familyName" required><br>
        Year of Birth: <input type="number" name="yearOfBirth" required><br>
        <input type="submit" value="Submit">
    </form>
    <?php
}
?>
