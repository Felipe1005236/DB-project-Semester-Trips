<?php

$servername = "5.75.182.107";
$username = "rfelipe";
$password = "Diez.cinco5";
$dbname = "rfelipe_db";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $student_id = $_POST['s_id'];
    $student_destination = $_POST['s_destination'];
    $student_rating = $_POST['s_rating'];

    // Use prepared statements to prevent SQL injection
    $stmt = $conn->prepare("INSERT INTO Reviews (d_id, rating, s_id) VALUES (?, ?, ?)");
    $stmt->bind_param("isi", $student_destination, $student_rating, $student_id);

    if ($stmt->execute()) {
        echo "Review added successfully!";
    } else {
        echo "Error: " . $stmt->error;
    }

    $stmt->close();
}

$conn->close();
?>