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
    echo "Connected successfully<br>";
    
    $sql = "SELECT name, country FROM test1 WHERE age=20";
    
    // Execute the query and handle the results
    $result = $conn->query($sql);
    if ($result) {
        if ($result->num_rows > 0) {
            // Output data of each row
            while($row = $result->fetch_assoc()) {
                echo "Name: " . $row["name"] . " - Country: " . $row["country"] . "<br>";
            }
        } else {
            echo "No results found";
        }
    } else {
        echo "Error executing query: " . $conn->error;
    }
    
    $conn->close();
    ?>
</body>
</html>
