<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Railway Getaway</title>
</head>
<body>
    <h1>Hello</h1>
    <?php
    $connection = new mysqli("5.75.182.017", "rfelipe@", "Diez.cinco5", "rfelipe_db");

    if ($connection->connect_errno) {
        echo "Failed to connect to db " . $connection->connect_error;
        exit();
    }

    // Check if the form is submitted
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $student_id = $_POST['s_id'];
        $student_destination = $_POST['s_destination'];
        $student_rating = $_POST['s_rating'];
        $e_id = $_POST['e_id'];
        $e_destination = $_POST['e_destination'];
        $e_rating = $_POST['e_rating'];
        $s_location = $_POST['s_location'];
        $s_opening_time = $_POST['opening_time'];
        $e_location = $_POST['e_location'];
        $e_time = $_POST['e_time'];

        // Use prepared statements to prevent SQL injection
        // Example for student review insertion (adapt for other data)
        $stmt = $connection->prepare("INSERT INTO Reviews (d_id, rating, s_id) VALUES (?, ?, ?)");
        $stmt->bind_param("isi", $student_destination, $student_rating, $student_id);

        if ($stmt->execute()) {
            echo "Review added successfully!";
        } else {
            echo "Error: " . $stmt->error;
        }

        $stmt->close();
    }
    $connection->close();
    ?>
    </body>
</html>