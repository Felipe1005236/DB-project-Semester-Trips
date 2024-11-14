<?php
include "../Forms/requirements.php"; // Adjust the path based on your setup

$connection = new mysqli($servername, $username, $password, $dbname);

if ($connection->connect_error) {
    die("Connection failed: " . $connection->connect_error);
}

// Retrieve the term sent by the JavaScript function
if (isset($_GET['term'])) {
    $term = $connection->real_escape_string($_GET['term']);
    $query = "SELECT name FROM students WHERE name LIKE '%$term%'"; // Modify based on your table and column names
    $result = $connection->query($query);

    $suggestions = [];
    if ($result) {
        while ($row = $result->fetch_assoc()) {
            $suggestions[] = $row['name'];
        }
    }

    echo json_encode($suggestions); // Return suggestions in JSON format
}

$connection->close();
?>