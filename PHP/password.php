<?php
session_start();

include "../Forms/requirements.php";

$connection = new mysqli($servername, $username, $password, $dbname)

        if ($connection->connect_errno) {
            echo "Failed to connect to database. " . $mysqli->connect_error;
            exit();
        }


if (isset($_POST["login"])) {
   if (empty($_POST["username"]) || empty($_POST["password"])) {
       $message = '<label>Both fields have to be filled!</label>';
   } else {
       $password = $_POST["password"];

       $query = "SELECT * FROM Users WHERE username = 'admin' AND password = :password";
       $statement = $connection->prepare($query);
       $statement->execute(['password' => $password]);
       $result = $statement->fetchAll();

       if (count($result) > 0) {
           $_SESSION["username"] = 'admin';
           header("location: maintenance.html");
           exit();
       } else {
           $message = '<label>Password is incorrect!</label>';
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