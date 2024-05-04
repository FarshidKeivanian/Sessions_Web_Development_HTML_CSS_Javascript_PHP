<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $number1 = $_POST['number1'];
    $number2 = $_POST['number2'];
    $operation = $_POST['operation'];
    $result = calculateResult($number1, $number2, $operation);
}

function calculateResult($number1, $number2, $operation) {
    switch ($operation) {
        case "Addition":
            return $number1 + $number2;
        case "Subtraction":
            return $number1 - $number2;
        case "Multiplication":
            return $number1 * $number2;
        case "Division":
            if ($number2 != 0) {
                return $number1 / $number2;
            } else {
                return "Cannot divide by zero";
            }
        default:
            return 0;
    }
}
?>
