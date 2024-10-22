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

    $conn = new mysqli($servername, $username, $password, $dbname);

    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    if ($_SERVER["REQUEST_METHOD"] == "POST") {

        $input_type = $_POST['input_type'] ?? '';

        if(!empty($input_type)){

            $sql = '';

            switch($input_type){

                case 'Activities':
                    
                    $fee = $conn->real_escape_string($_POST['fee']);
                    $act_id = $conn->real_escape_string($_POST['att_id']);

                    $sql = "INSERT INTO Activity (activity_id, entry_fee) VALUES ('$att_id', '$fee')";

                    break;

                case 'Attractions':

                    $fee = $conn->real_escape_string($_POST['fee']);
                    $att_id = $conn->real_escape_string($_POST['att_id']);

                    $sql = "INSERT INTO Attraction (att_id, fee) VALUES ('$att_id','$fee')";

                    break;

                case 'Destination':
                    
                    $dest_id = $conn->real_escape_string($_POST['dest_id']);
                    $dest_name = $conn->real_escape_string($_POST['name']);
                    $location = $conn->real_escape_string($_POST['location']);
                    $opening = $conn->real_escape_string($_POST['opening_time']);
                    $closing = $conn->real_escape_string($_POST['closing_time']);

                    $sql = "INSERT INTO Destination (dest_id, name, location, opening_time, closing_time) VALUES ('$dest_id', '$dest_name', '$location', '$opening', '$closing')";

                    break;

                case 'Editor':
                    
                    $editor_id = $conn->real_escape_string($_POST['editor_id']);
                    $type = $conn->real_escape_string($_POST['type']);
                    $username = $conn->real_escape_string($_POST['username']);

                    $sql = "INSERT INTO Editor (editor_id, type, username) VALUES ('$editor_id', '$type', '$username')";

                    break;

                case 'Food':
                    
                    $food_id = $conn->real_escape_string($_POST['food_id']);
                    $cuisine_type = $conn->real_escape_string($_POST['cuisine_type']);

                    $sql = "INSERT INTO Food_place (food_id, cuisine_type) VALUES ('$food_id', '$cuisine_type')";

                    break;

                case 'Review':
                    
                    $review_id = $conn->real_escape_string($_POST['review_id']);
                    $destination_id = $conn->real_escape_string($_POST['dest_id']);
                    $rating = $conn->real_escape_string($_POST['rating']);
                    $comment = $conn->real_escape_string($_POST['comment']);

                    $sql = "INSERT INTO Reviews (review_id, dest_id, rating, comment) VALUES ('$review_id', '$dest_id', '$rating', '$comment')";

                    break;

                case 'Student':

                    $student_id = $conn->real_escape_string($_POST['student_id']);
                    $school = $conn->real_escape_string($_POST['school']);
                    $username = $conn->real_escape_string($_POST['username']);
                    $age = $conn->real_escape_string($_POST['age']);

                    $sql = "INSERT INTO Student (student_id, school, username, age) VALUES ('$student_id', '$school', '$username', '$age')";

                    break;

                case 'User':
                    
                    $user_id = $conn->real_escape_string($_POST['user_id']);
                    $user_name = $conn->real_escape_string($_POST['name']);
                    $email = $conn->real_escape_string($_POST['email']);

                    $sql = "INSERT INTO User (user_id, name, email,) VALUES ('$user_id', '$user_name', '$email')"

                    break;
                
                default:
                    echo "Invalid input";
                    exit;
            }

            if($conn->query($sql) === TRUE){
                echo "Values Inserted correctly";
            } 
            else {
                echo "Error: ", $sql . "<br>" . $conn->error;
            }
        }
        else {
            echo "No input given";
        }
    }
    else{
        echo "Invalid request";
    }

    $conn->close();
    ?>
<div>