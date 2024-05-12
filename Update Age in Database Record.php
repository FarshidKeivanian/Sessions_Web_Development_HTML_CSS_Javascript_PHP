<html>
<body>
    <?php
    $servername = "ict502";
    $username = "root";
    $password = "";

    // Create connection
    $conn = new mysqli('localhost', $username, $password, $servername);

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
