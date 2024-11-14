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
                    $tags[] = $row["name"];
                }
            }
        }

        header('Content-type: application/json');
        echo json_encode($tags);

        //$real_result = json_encode($tags);
//
        //echo "<script>$(\"#autocomplete\").autocomplete({source: $real_result});</script>";
        
    ?>