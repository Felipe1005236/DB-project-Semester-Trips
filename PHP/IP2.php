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

    <h1> Input Page 2</h1>

    <div class="center">
        <h3> Student Form </h3>
        <form action="connect_ser.php" method="post">
        <form>
            <div class="aligning_questions">
                <label class="question"> Name: </label>
                <input type="text" id="name" name="name">
            </div>
            <br>
            <div class="aligning_questions">
                <label class="question"> Age:</label>
                <input type="number" id="age" name="age">
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