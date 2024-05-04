<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Simple PHP Calculator</title>
</head>
<body>
    <div id="page-wrap">
        <h1>Calculator</h1>
        <form action="" method="post" id="quiz-form">
            <p>
                <input type="number" name="number1" id="number1" required="required" placeholder="First Number" value="<?php echo isset($_POST['number1']) ? $_POST['number1'] : ''; ?>"/>
                <b>First Number</b>
            </p>
            <p>
                <input type="number" name="number2" id="number2" required="required" placeholder="Second Number" value="<?php echo isset($_POST['number2']) ? $_POST['number2'] : ''; ?>"/>
                <b>Second Number</b>
            </p>
            <p>
                <input readonly="readonly" name="result" value="<?php echo isset($result) ? $result : ''; ?>">
                <b>Result</b>
            </p>
            <input type="submit" name="operation" value="Addition" />
            <input type="submit" name="operation" value="Subtraction" />
            <input type="submit" name="operation" value="Multiplication" />
            <input type="submit" name="operation" value="Division" />
        </form>
    </div>
</body>
</html>
