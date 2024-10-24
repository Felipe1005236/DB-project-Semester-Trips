<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        include "../Forms/requirements.php";

        $connection = new mysqli($servername, $username, $password, $dbname)

        if ($connection->connect_errno) {
            echo "Failed to connect to database. " . $mysqli->connect_error;
            exit();
        }

        $sql = '';
        $result;

        $type = $_GET["type"];

        

        switch($type){



        }
    ?>
</body>
</html>

