<?php

require_once 'db.php';
$email = null;
$username = null;
$pass = null;
$repeatPassword = null;

if (!empty($_POST)) {
    $email = $conn->real_escape_string($_POST['email']);
    $username = $conn->real_escape_string($_POST['username']);
    $pass = $conn->real_escape_string(md5($_POST['password']));
    $repeatPassword = $conn->real_escape_string(md5($_POST['repeatPassword']));

    $check_if_exists = "SELECT * FROM users WHERE email = '$email' OR username = '$username'";
    $resultRandom = $conn->query($check_if_exists);

    if (empty($email)) {
        echo "You must enter your email";
    } else if (empty($username)) {
        echo "You must enter your username";
    } else if (empty($pass)) {
        echo "You must enter your password";
    } else if (empty($repeatPassword)) {
        echo "You must re-enter your password";
    } else if ($resultRandom->num_rows != 0) {
        echo 'Username or email already exists';
    } else {
        if ($pass == $repeatPassword) {
            $repeatPassword = md5($repeatPassword);
            $sql = "INSERT INTO users (username, email, password)
        VALUES ( '$username', '$email', '$repeatPassword')";
            $result = $conn->query($sql);
            header('Location: login.php');
        } else if ($pass != $repeatPassword) {
            echo "Password and repeated password need to match!";
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

    <div class="register_section">
        <div class="container">
            <h1>Register</h1>
            <div id="register">
                <form action="register.php" method="post" id="signup-form">
                    <div class="form-group">
                        <div>
                            <div>
                                <label for="email">Email</label>
                                <input type="email" name="email" id="email" class="form-control" required autocomplete="off" />
                            </div>

                            <div>
                                <label for="name">Name</label>
                                <input type="text" name="username" id="name" class="form-control" required autocomplete="off" />
                            </div>

                        </div>
                        <div>
                            <label for="password">Password</label>
                            <input type="password" id="password" name="password" class="form-control" required autocomplete="off" />
                        </div>
                        <div>
                            <label for="repeatPassword">Repeat Password</label>
                            <input type="password" id="repeatPassword" name="repeatPassword" class="form-control" required autocomplete="off" />
                        </div>
                    </div>

                    <button class="btn btn-primary" type="submit">Submit</button>




                </form>
            </div>
        </div>
    </div>




    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>

</html>