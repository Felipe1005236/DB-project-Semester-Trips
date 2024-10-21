<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
</body>
</html>

<div> 
    <?php

    include 'requirements.php'

    // Create connection
    $conn = new mysqli($servername, $username, $password, $dbname);

    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    // Check if the form is submitted
    if ($_SERVER["REQUEST_METHOD"] == "POST") {

        $input_type = $_POST['input_type'] ?? '';

        if(!empty($input_type)){

            $sql = '';

            switch($input_type){

                case 'Activities':
                    
                    $act_name = $conn->real_escape_string($_POST['act_name']);
                    $fee = $conn->real_escape_string($_POST['fee']);
                    

                    break;

                case 'Attractions':
                    
                    break;

                case 'Destinations':
                    
                    break;

                case 'Editor':

                    break;

                case 'Food':

                    break;

                case 'Review':

                    break;

                case 'Student':

                    break;

                case 'User':

                    break;

            }
        }
    }

    $conn->close();
    ?>
<div>