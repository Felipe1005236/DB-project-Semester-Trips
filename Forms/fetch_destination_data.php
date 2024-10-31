<?php
// fetch_destination_data.php
include 'requirements.php';

$connection = new mysqli($servername, $username, $password, $dbname);

if ($connection->connect_error) {
    die("Connection failed: " . $connection->connect_error);
}

$sql = "SELECT dest_id, name FROM Destination";
$result = $connection->query($sql);

if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        echo '<option value="' . $row['dest_id'] . '">' . $row['name'] . '</option>';
    }
} else {
    echo '<option value="">No destinations available</option>';
}

$connection->close();
?>
