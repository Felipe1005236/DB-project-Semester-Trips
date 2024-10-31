<!DOCTYPE html>
<html>

<head>
    <title>Railway Getaway - Review Page</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="UTF-8">
    <link rel="stylesheet" href="../CSS/ip.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=EB+Garamond:ital,wght@0,400..800;1,400..800&display=swap" rel="stylesheet">
</head>

<body>

    <h1>Review Page</h1>
    <form action="connect_ser.php" method="post">
        <input type="hidden" name="input_type" value="Review"> <!-- Ensure this matches the case in connect_ser.php -->
        <div class="center">
            <h3>Review Form</h3>
            <div class="aligning_questions">
                <label class="question">Destination:</label>
                <select id="d_id" name="dest_id">
                    <!-- Dropdown options populated by fetch_destination_data.php -->
                    <?php include 'fetch_destination_data.php'; ?>
                </select>
            </div>
            <br>
            <div class="aligning_questions">
                <label class="question">Enter Rating:</label>
                <select id="rating" name="rating">
                    <option value="5">⭐⭐⭐⭐⭐</option>
                    <option value="4">⭐⭐⭐⭐</option>
                    <option value="3">⭐⭐⭐</option>
                    <option value="2">⭐⭐</option>
                    <option value="1">⭐</option>
                </select>
                <label class="question">stars</label>
            </div>
            <br>
            <div class="aligning_questions">
                <label class="question">Comment:</label>
                <input type="text" id="comment_id" name="comment" required>
            </div>
            <br>
            <div class="button-container">
                <button type="submit">Submit</button>
            </div>
        </div>
    </form>
    
    <a href="../HTML/maintenance.html">Back to Maintenance page</a>

</body>

</html>
