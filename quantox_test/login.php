<?php

session_start();
require_once 'db.php';


if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = $conn->real_escape_string($_POST["email"]);
    $pass = $conn->real_escape_string($_POST["password"]);

    $sql = "
        SELECT * FROM users WHERE email = '$email'
    ";
    $result = $conn->query($sql);

    if (!$result) {
        echo "Error logging you in!";
    } else {
        if ($result->num_rows == 0) {
            echo "The user with this email does not exist in the database";
        } else {
            $row = $result->fetch_assoc();
            if (md5($pass) != $row['password']) {
                echo "Passwords do not match";
            } 
            else {

                $_SESSION['id'] = $row['id'];
                header('Location: welcome.php');
            }
        }
    }
}


?>



<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous" />
    <link rel="stylesheet" href="style.css">
    <title>Document</title>
    <style>
        h1 {
            color: #3c84e2;
        }
        
        
    
    </style>
</head>

<body>
    <a class="back_btn" type="button" href="index.php">Back</a>

    <div class="login_section">
        <div class="container">
            <h1>Login</h1>
            <div id="login">
                <form action="login.php" method="post" id="signup-form">
                    <div class="form-group">
                        <div>
                            <div>
                                <label for="email">Email</label>
                                <input type="email" name="email" id="email" class="form-control" required />
                            </div>
                        </div>
                        <div>
                            <label for="password">Password</label>
                            <input type="password" id="password" name="password" class="form-control" required />
                        </div>
                    </div>
                    <button class="btn btn-primary" type="submit">Login</button>
                </form>
            </div>
        </div>
    </div>
</body>

</html>