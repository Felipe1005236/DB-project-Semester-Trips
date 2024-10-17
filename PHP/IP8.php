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

    <h1> Input Page 8</h1>
    <form action="connect_ser.php" method="post">
    <div class="center">
        <h3> Activities Form </h3>

        <form>
            <div class="aligning_questions">
                <label class="question"> Name of activity: </label>
                <input type="text" name="act_name">
            </div>
            <br>
            <div class="aligning_questions">
                <label class="question"> Entrance fee:</label>
                <input type="number" id="fee" name="fee">
            </div>
            <br>
            <div class="aligning_questions">
                <label class="question"> Activity ID:</label>
                <input type="text" name="att_id">
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