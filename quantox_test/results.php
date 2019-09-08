<?php

session_start();
require_once 'db.php';
$result = [];

if(!empty($_SESSION['id'])) {
    $search = $_POST['search-param'];
    $sql = "SELECT * FROM users WHERE email LIKE '$search' OR username LIKE '$search'  ";
    $result = $conn->query($sql);
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
    <?php 
        if($result){
            while ($row = $result->fetch_assoc()) {
                echo $row['username'] . " - ";
                echo $row['email'] . "<br>";
    
            }
         } else {
        ?>  
     <div class="login_section">
        <div class="container">
        <p style="color: red; font-size:20px;"> No users were found in the database that matches your search criteria. </p>
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
                    <button type="submit" class="login_btn">
                        Login
                    </button>
                </form>
            </div>
        </div>
    </div>
    <?php }?>
        
</body>

</html>