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
        
    ?>