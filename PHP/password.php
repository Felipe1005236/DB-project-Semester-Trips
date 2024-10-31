<?php
session_start();
include "../Forms/requirements.php";

// Database connection
$connection = new mysqli($servername, $username, $password, $dbname);
if ($connection->connect_errno) {
    echo "Failed to connect to database. " . $connection->connect_error;
    exit();
}

// Login handling
if (isset($_POST["login"])) {
    if (empty($_POST["username"]) || empty($_POST["password"])) {
        $message = '<label>Both fields must be filled!</label>';
    } else {
        $username = $_POST["username"];
        $password = $_POST["password"];

        // Prepare SQL query to get user info
        $query = "SELECT * FROM User_ad WHERE username = ?";
        $statement = $connection->prepare($query);
        $statement->bind_param("s", $username);
        $statement->execute();
        $result = $statement->get_result();
        $user = $result->fetch_assoc();

        // Verify password
        if ($user && password_verify($password, $user['password'])) {
            $_SESSION["username"] = $username;
            header("location: maintenance.html");
            exit();
        } else {
            $message = '<label>Invalid username or password!</label>';
        }
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <title>Login Page</title>
   <link rel="stylesheet" href="styles.css" type="text/css">
</head>
<body>

   <h2 style="padding-left: 200px; padding-right: 300px; padding-top: 100px">
       Please log in as admin first:
   </h2>
   <section style="padding-top: 20px; padding-left: 150px; padding-right: 150px">
   <?php
   if (isset($message)) {
       echo '<label>' . $message . '</label>';
   }
   ?>
   <form method="post">
       <label>User Name:</label><br><br>
       <input type="text" name="username" class="form-control" required/><br/><br/>
       <label>Password:</label><br><br>
       <input type="password" name="password" class="form-control" required/><br/><br>
       <input type="submit" name="login" class="btn btn-info" value="Login"/>
   </form>
   </section>
</body>
</html>