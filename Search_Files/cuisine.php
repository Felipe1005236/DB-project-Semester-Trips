global$dbname; global$password; global$username; global$servername; <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Demo</title>
    <link rel="stylesheet" href="https://code.jquery.com/ui/1.13.3/themes/smoothness/jquery-ui.css">
    <script src="https://code.jquery.com/jquery-3.7.1.js"></script>
    <script src="https://code.jquery.com/ui/1.13.3/jquery-ui.js"></script>
</head>
<body>

<label for="autocomplete">Select a Location</label>
<input id ="autocomplete">

<?php

include "../Forms/requirements.php";

$connection = new mysqli($servername, $username, $password, $dbname);

if ($connection->connect_error) {
    die("Connection failed: " . $connection->connect_error);
}

$query = "SELECT * FROM Food_place";

$res = $connection->query($query);

$tags = [];

if($res){
    if($res->num_rows > 0){
        while($row = $res->fetch_assoc()){
            $tags[] = $row["cuisine_type"];
        }
    }
}

$real_result = json_encode($tags);

echo "<script>$(\"#autocomplete\").autocomplete({source: $real_result});</script>";

?>
</body>
</html>