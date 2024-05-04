<?php
// Create an indexed array of car brands
$cars = array("Volvo", "BMW", "Toyota");

// Print each car brand using indexed access
echo "I like " . $cars[0] . ", " . $cars[1] . ", and " . $cars[2] . ".";

// Determine the number of car brands in the array
$car_count = count($cars);
echo "<br>The array contains " . $car_count . " car brands.";

// Exercise: Create an associative array of fruits with their respective color
$fruits = array("Apple" => "Red", "Banana" => "Yellow", "Orange" => "Orange");

// Access and print the color of a specific fruit
echo "<br>An apple is " . $fruits['Apple'] . ".";

// Exercise: Output the number of fruits in the array
echo "<br>There are " . count($fruits) . " fruits in the array.";

// Additional example with manual indexing
$cars[0] = "Volvo";
$cars[1] = "BMW";
$cars[2] = "Toyota";
echo "<br>I still like " . $cars[0] . ", " . $cars[1] . ", and " . $cars[2] . ".";
?>
