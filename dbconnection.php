<?php
    $servername = "localhost";
    $username = "root";
    $password = "root";
    $database = "TechEdu";

    // Create connection
    $con = new mysqli($servername, $username, $password, $database);

    // Check connection
    if ($con->connect_error) {
        die("Connection failed: " . $con->connect_error);
    }

    // Connection successful, now you can execute queries using $con

    // Example query:
    $sql = "SELECT * FROM your_table";
    $result = $con->query($sql);
    // ... rest of your code

    // Remember to close the connection when you're done with database operations:
    $con->close();
?>
