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

    <h1> Input Page 1</h1>
    <form action="connect_ser.php" method="post">
    <div class="center">
        <h3> Student posting reviews </h3>

        <form>
            <div class="aligning_questions">
                <label class="question"> Student ID: </label>
                <input type="text" id="s_id" name="s_id">
            </div>
            <br>
            <div class="aligning_questions">
                <label class="question"> Destination ID:</label>
                <input type="text" id="d_id" name="s_destination">
            </div>
            <br>
            <div class="aligning_questions">
                <label class="question"> Enter rating:</label>
                <select id="rating" name="s_rating">
                <option value="5">⭐⭐⭐⭐⭐</option>
                <option value="4">⭐⭐⭐⭐</option>
                <option value="3">⭐⭐⭐</option>
                <option value="2">⭐⭐</option>
                <option value="1">⭐</option>
                </select>

                <label class="question"> stars </label>
                <br>
            </div>
            <div class="button-container">
                <button type="submit">Submit</button>
            </div>
        </form>
    </div>

</body>
</html>