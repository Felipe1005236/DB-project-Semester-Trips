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
        $search_type=$_REQUEST["input_type"];

        
        
        switch($search_type){
            
            case 'max_fee':

                $user_input = $_REQUEST["max_fee"];    
                $sql = "SELECT d.name AS destination_name, d.location, a.entry_fee
                        FROM Destination AS d
                        INNER JOIN Attraction AS a ON d.dest_id = a.attraction_id
                        where a.entry_fee < " . $user_input . " ORDER BY d.name;"

                $result = $connection->query($sql);

                if($result){
                    if($result->num_rows > 0){
                        echo "<table>";
                        echo "<tr class="header">";
                        echo "<th class=\"dest_name\">Destination name</th>";
                        echo "<th class=\"location\">Location</th>";
                        echo "<th class=\"entry_fee\">Entry Fee</th>";
                        echo "</tr>"
                        while($row = $result->fetch_assoc()) {
                            echo "<tr>";
                            echo "<td><a class=\"hidden-link\" href=\"details_page.php?dest_id=" . $row["dest_id"] . "\">" . $row["name"] . "</a></td>";
                            echo "<td>" . $row["location"] . "</td>"; 
                            echo "<td>" . $row["entry_fee"] . "</td>"; 
                            echo "</tr>";
                    }
                    echo "</table>";
                    }
                }

                break;

            case 'attraction':
                
                $user_input = $_REQUEST["attraction"];

                $sql = "SELECT name, opening_time
                        FROM Destination
                        WHERE opening_time < '10:00:00'";
                        
                $result = $connection->query($sql);

                if($result){
                    if($result->num_rows > 0){
                        echo "<table>";
                        echo "<tr class=\"header\">";
                        echo "<th class=\"dest_name\">Destination name</th>";
                        echo "<th class=\"opening_time\">Opening Time</th>";
                        while($row = $result->fetch_assoc()) {
                            echo "<tr>";
                            echo "<td><a class=\"hidden-link\" href=\"details_page.php?dest_id=" . $row["dest_id"] . "\">" . $row["name"] . "</a></td>";
                            echo "<td>" . $row["opening_time"] . "</td>"; 
                            echo "</tr>";
                        }
                        echo "</table>";
                    }
                }

                break;

            case 'students':

                $sql = "SELECT s.username AS student_username, u.name AS user_name, u.email
                        FROM Student AS s
                        JOIN User AS u ON s.student_id = u.user_id;";
                
                $result = $connection->query($sql);

            case 'cuisine_type':

                $sql = "SELECT d.name AS destination_name, d.location, f.cuisine_type
                        FROM Destination AS d
                        INNER JOIN Food_place AS f ON d.dest_id = f.food_id
                        WHERE f.cuisine_type = 'Italian';";

                $result = $connection->query($sql);
        }

        $result = $connection->query($sql);

        if($result->num_rows > 0){
            if($result->num_rows > 0){

                echo "<table>";

            }
        }
    ?>
</body>
</html>