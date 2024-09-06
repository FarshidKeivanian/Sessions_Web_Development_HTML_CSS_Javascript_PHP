<!DOCTYPE html>  
<html>  
<head>  
    <title>Using functions</title>  
</head>  
<body>
<?php  
    $CalculatorResult = ''; // Initialize the result variable

    // Function to perform the calculation
    function MyCalculator($Number1, $Number2, $Result) {
        $compute = 0; // Initialize $compute

        switch($Result) {  
            case "Sum":   
                $compute = $Number1 + $Number2;   
                break;  
            case "Subtraction":  
                $compute = $Number1 - $Number2;   
                break;  
            case "Multiplication":  
                $compute = $Number1 * $Number2;   
                break;  
            case "Division":  
                // Handle division by zero
                if ($Number2 != 0) {
                    $compute = $Number1 / $Number2;   
                } else {
                    $compute = "Error: Division by Zero";
                }
                break;  
        }  
        return $compute; // returning the calculated value  
    }  

    // Check if the form has been submitted
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $Number_no_1 = $_POST['Number_no_1'];  
        $Number_no_2 = $_POST['Number_no_2'];  
        $Result = $_POST['operator_specified']; // Get the selected operation

        // Calculate the result
        $CalculatorResult = MyCalculator($Number_no_1, $Number_no_2, $Result);
    }
?>  

<div id="page-wrap">  
    <h1>Calculator by NK using switch case</h1>  
    <form action="" method="post" id="quiz-form">  
        <p>  
            <input type="number" name="Number_no_1" id="Number_no_1" required="required" value="<?php echo isset($Number_no_1) ? $Number_no_1 : ''; ?>" /> <b>First Number</b>  
        </p>  
        <p>  
            <input type="number" name="Number_no_2" id="Number_no_2" required="required" value="<?php echo isset($Number_no_2) ? $Number_no_2 : ''; ?>" /> <b>Second Number</b>  
        </p>  
        <p>  
            <input readonly="readonly" name="CalculatorResult" value="<?php echo htmlspecialchars($CalculatorResult); ?>"> <b>CalculatorResult</b>  
        </p>  
        <input type="submit" name="operator_specified" value="Sum" />  
        <input type="submit" name="operator_specified" value="Subtraction" />  
        <input type="submit" name="operator_specified" value="Multiplication" />  
        <input type="submit" name="operator_specified" value="Division" />  
    </form>  
</div>  
</body>  
</html>
