<!DOCTYPE html>
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

<div class="img_container">
        <img src="../images/window-transformed.png" alt="background" id="window">
        <!--user inputs a destination, gets attractions there and entry fee of those attractions-->

        <div class="form_on_img">
            <h1> Find Opening Times for a location</h1>
            <input type="hidden" name="input_type" value="attraction">
            <form action="connect_ser.php" method="post">
            <div class="aligning_questions">
            <label for="autocomplete">Select a Location</label>
            <input id ="autocomplete">
                <!-- <label for="autocomplete" class="question"> Location:</label>
                <input itemid="autocomplete" type="text" id="destination" name="destination" placeholder="e.g. Bremer Kunsthalle"> -->
            </div>
            <br>
            <div class="button-container">
                <button type="submit">Search</button>
            </div>
            </form>
        </div>
        <div>
            <h3><a class="link" href="../HTML/search_page.html">Back to Search Page</a></h3>
        </div>

    </div>


    <?php

        include "../Forms/requirements.php";

        $connection = new mysqli($servername, $username, $password, $dbname);

        if ($connection->connect_error) {
            die("Connection failed: " . $connection->connect_error);
        }

        $query = "SELECT * FROM Destination";

        $res = $connection->query($query);

        $tags = [];

        if($res){
            if($res->num_rows > 0){
                while($row = $res->fetch_assoc()){
                    $tags[] = $row["location"];
                }
            }
        }

        $real_result = json_encode($tags);

        echo "<script>$(\"#autocomplete\").autocomplete({source: $real_result});</script>";
        
    ?>

    <!-- <script>
        $("#autocomplete").autocomplete({
            source: ["Hamburg", "Bremen", "Dresden", "Hannover"]
        });
    </script> -->
</body>
</html>