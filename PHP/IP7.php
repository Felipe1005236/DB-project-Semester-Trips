<!DOCTYPE html>
<html>

<head>
    <title>
        Railway Getaway
    </title>
    <meta name="viewpoint" content="width=device-width, initial-scale=1.0">
    <meta charset="UTF-8">
    <link rel="stylesheet" href="ip.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=EB+Garamond:ital,wght@0,400..800;1,400..800&display=swap" rel="stylesheet">
</head>

<body>

    <h1> Input Page 7</h1>
    <form action="connect_ser.php" method="post">
    <div class="center">
        <h3> Food Place Form </h3>

        <form>
            <div class="aligning_questions">
                <label class="question"> Name of Food Place: </label>
                <input type="text" name="food_name">
            </div>
            <br>
            <div class="aligning_questions">
                <label class="question"> Food Place ID:</label>
                <input type="text" id="food_id" name="food_id">
            </div>
            <br>
            <div class="aligning_questions">
                <label class="question"> Type of cuisine:</label>
                    <select id="cuisine" name="cuisine">
                    <option value="chinese">chinese</option>
                    <option value="german">German</option>
                    <option value="indian">Indian</option>
                    <option value="turkish">Turkish</option>
                    <option value="mediterranian">Mediterranian</option>
                </select>
                <br>
            </div>
            <div class="button-container">
                <button type="submit">Submit</button>
            </div>
        </form>
    </div>
    
    <?php
        echo "<a href="maintenance.html"><h2 class="back">Back to maintenance page</h2></a>";
    ?>

</body>
</html>