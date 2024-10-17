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

    <h1> Input Page 5</h1>
    <form action="connect_ser.php" method="post">
    <div class="center">
        <h3> Editor Form </h3>

        <form>
        <div class="aligning_questions">
                <label class="question"> Editor name: </label>
                <input type="text" id="editor_name" name="editor_name">
            </div>
            <div class="aligning_questions">
                <label class="question"> Editor ID: </label>
                <input type="text" id="editor_id" name="editor_id">
            </div>
            <br>
            <div class="aligning_questions">
                <label class="question"> Type of editor:</label>
                    <select id="type" name="type">
                    <option value="writer">Text writer</option>
                    <option value="frontend">Frontend</option>
                    <option value="backend">Backend</option>
                    <option value="photo">Photo editor</option>
                    <option value="review">Reviewer</option>
                </select>
                <br>
            </div>
           
            <br>
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