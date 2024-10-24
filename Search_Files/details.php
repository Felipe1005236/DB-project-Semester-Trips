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

            case 'max_fee':

            $type = $_GET["max_fee"];

            $sql = "SELECT d.dest_id, a.attraction_id, d.name, d.location, a.entry_fee, d.opening_time, d.closing_time 
                    FROM Destination AS d
                    INNER JOIN Attraction AS a ON d.dest_id = a.attraction_id
                    WHERE a.entry_fee < $user_input 
                    ORDER BY d.name";

            $result = $connection->query($sql);

            if($result){
                if($result->num_rows > 0){
                    echo "<table>";
                    echo "<tr class=\"table-header\">";
                    echo "<th>Attribute</th><th>Value</th>";
                    echo "</tr>";
                    while($row = $result->fetch_assoc()) {
                        echo "<tr>";
                        echo "<td>Destination ID</td>";
                        echo "<td>" . $row["dest_id"] . "</td>";
                        echo "</tr>";
                        echo "<tr>";
                        echo "<td>Destination Name</td>";
                        echo "<td>" . $row["name"] . "</td>";
                        echo "</tr>";
                        echo "<tr>";
                        echo "<td>Location</td>";
                        echo "<td>" . $row["location"] . "</td>";
                        echo "</tr>";
                        echo "<tr>";
                        echo "<td>Opening Time</td>";
                        echo "<td>" . (($row["opening_time"] == 1) ? "Yes":"No"). "</td>";
                        echo "</tr>";
                        echo "<tr>";
                        echo "<td>Closing Time</td>";
                        echo "<td>" . $row["closing_time"] . "</td>";
                        echo "</tr>";
                    }
                    echo "</table>";
                }
            }
            else{
                echo "<p> Not found";
            }
            else{
            echo "<p> Search failed" . $connection->error . "</p>";
            }    
                break;

            case 'attraction':

                $type = $_GET["attraction"];

                $sql = "SELECT Destination.*
                        FROM Destination
                        WHERE name = $type;";

                $result = $connection->query($sql);

                if($result){
                    if($result->num_rows > 0){
                        echo "<table>";
                        echo "<tr class=\"table-header\">";
                        echo "<th>Attribute</th><th>Value</th>";
                        echo "</tr>";
                        while($row = $result->fetch_assoc()) {
                            echo "<tr>";
                            echo "<td>Destination ID</td>";
                            echo "<td>" . $row["dest_id"] . "</td>";
                            echo "</tr>";
                            echo "<tr>";
                            echo "<td>Destination Name</td>";
                            echo "<td>" . $row["name"] . "</td>";
                            echo "</tr>";
                            echo "<tr>";
                            echo "<td>Location</td>";
                            echo "<td>" . $row["location"] . "</td>";
                            echo "</tr>";
                            echo "<tr>";
                            echo "<td>Opening Time</td>";
                            echo "<td>" . (($row["opening_time"] == 1) ? "Yes":"No"). "</td>";
                            echo "</tr>";
                            echo "<tr>";
                            echo "<td>Closing Time</td>";
                            echo "<td>" . $row["closing_time"] . "</td>";
                            echo "</tr>";
                        }
                        echo "</table>";
                    }
                }
                else{
                    echo "<p> Not found";
                }
                else{
                echo "<p> Search failed" . $connection->error . "</p>";
                }    
                break;

            case 'student':

                $type = $_GET["student"];

                $sql = "SELECT s.student_id, u.user_id, u.name, s.username, u.email, s.age
                        FROM Student AS s
                        JOIN User AS u ON s.student_id = u.user_id
                        WHERE u.name = $type;";

                $result = $connection->query($sql);

                if($result){
                    if($result->num_rows > 0){
                        echo "<table>";
                        echo "<tr class=\"table-header\">";
                        echo "<th>Attribute</th><th>Value</th>";
                        echo "</tr>";
                        while($row = $result->fetch_assoc()) {
                            echo "<tr>";
                            echo "<td>User ID</td>";
                            echo "<td>" . $row["user_id"] . "</td>";
                            echo "</tr>";
                            echo "<tr>";
                            echo "<td>Name</td>";
                            echo "<td>" . $row["name"] . "</td>";
                            echo "</tr>";
                            echo "<tr>";
                            echo "<td>Email</td>";
                            echo "<td>" . $row["email"] . "</td>";
                            echo "</tr>";
                            echo "<tr>";
                            echo "<td>School</td>";
                            echo "<td>" . $row["school"] . "</td>";
                            echo "</tr>";
                            echo "<tr>";
                            echo "<td>Username</td>";
                            echo "<td>" . $row["username"] . "</td>";
                            echo "</tr>";
                            echo "<tr>";
                            echo "<td>Age</td>";
                            echo "<td>" . $row["age"] . "</td>";
                            echo "</tr>";
                        }
                        echo "</table>";
                    }
                }
                else{
                    echo "<p> Not found";
                }
                else{
                echo "<p> Search failed" . $connection->error . "</p>";
                }                
                break;

            case 'cuisine':

                $type = $_GET["cuisine"];

                $sql = "SELECT d.dest_id, f.food_id, d.name AS destination_name, d.location, f.cuisine_type, d.opening_time, d.closing_time
                        FROM Destination AS d
                        INNER JOIN Food_place AS f ON d.dest_id = f.food_id 
                        WHERE f.cuisine_type = :user_input;";

                $result = $connection->query($sql);

                if($result){
                    if($result->num_rows > 0){
                        echo "<table>";
                        echo "<tr class=\"table-header\">";
                        echo "<th>Attribute</th><th>Value</th>";
                        echo "</tr>";
                        while($row = $result->fetch_assoc()) {
                            echo "<tr>";
                            echo "<td>Destination ID</td>";
                            echo "<td>" . $row["dest_id"] . "</td>";
                            echo "</tr>";
                            echo "<tr>";
                            echo "<td>Name</td>";
                            echo "<td>" . $row["name"] . "</td>";
                            echo "</tr>";
                            echo "<tr>";
                            echo "<td>Location</td>";
                            echo "<td>" . $row["location"] . "</td>";
                            echo "</tr>";
                            echo "<tr>";
                            echo "<td>Opening Time</td>";
                            echo "<td>" . $row["opening_time"] . "</td>";
                            echo "</tr>";
                            echo "<tr>";
                            echo "<td>Closing Time</td>";
                            echo "<td>" . $row["closing_time"] . "</td>";
                            echo "</tr>";
                            echo "<tr>";
                            echo "<td>Cuisine</td>";
                            echo "<td>" . $row["cuisine_type"] . "</td>";
                            echo "</tr>";
                        }
                        echo "</table>";                        
                    }
                    else{
                        echo "<p> Not found";
                    }
                    else{
                    echo "<p> Search failed" . $connection->error . "</p>";
                    } 
                }
                break;
                
            }

        echo "<a href=\"../HTML/search_page.html\">Go back to Search Page</a>"
    ?>
</body>
</html>

