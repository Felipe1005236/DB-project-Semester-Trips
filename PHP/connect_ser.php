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
        $connection = new msqli($host, $user, $password, $db);

        if($connection->connect_errno){
            echo "Failed to connect to db " . $mysqli->connect_error;
            exit();
        }
        
        $student_id = $_REQUEST['s_id'];
        $student_destination = $_REQUEST['s_destination'];
        $student_rating = $_REQUEST['s_rating'];
        $e_id = $_REQUEST['e_id'];
        $e_destination = $_REQUEST['e_destination'];
        $e_rating = $_REQUEST['e_rating'];
        $s_destination = $_REQUEST['s_destination'];
        $s_location = $_REQUEST['s_location'];
        $s_opening_time = $_REQUEST['opening_time'];
        $e_destination = $_REQUEST['e_destination'];
        $e_location = $_REQUEST['e_location'];
        $e_time = $_REQUEST['e_time'];
        
    ?>