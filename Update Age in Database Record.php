<html>
<body>
    <?php
    $servername = "localhost"; // This should be 'localhost' for XAMPP
    $dbname = "ict502"; // Database name
    $username = "root";
    $password = "";
    // Create connection
    $conn = new mysqli($servername, $username, $password, $dbname);
    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }
    echo "Connected successfully";
    $sql = "UPDATE test1 SET age=30 WHERE name='Alex'";
    if ($conn->query($sql) === TRUE) {
        echo "The row has been updated successfully";
    } else {
        echo "Error updating the row: " . $conn->error;
    }
    $conn->close();
    ?>
</body>
</html>
