<html>
    <body>
        <?php
        $servername = "localhost"; // This should be 'localhost' for XAMPP
        $username = "root";
        $password = "";       
        $dbname = "ict502"; // Database name

        // Create connection
        $conn = new mysqli($servername, $username, $password, $dbname); 
        
        // Check connection
        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }
        echo "Connected successfully";       
        
        $sql = "INSERT INTO test1 VALUES ('Alex', 20, 'Australia', 2000)";
        if ($conn->query($sql) === TRUE) {
            echo "The new row is added successfully";
        } else {
            echo "Error creating the row: " . $conn->error;
        }
        $conn->close();
        ?>
    </body>
</html>
