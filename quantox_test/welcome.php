<?php 

session_start();
require_once 'db.php';

$id = $_SESSION['id'];

$sql = "
     SELECT username FROM users
         WHERE id = $id";
 $result = $conn->query($sql);
 $row = $result->fetch_assoc();


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
        margin-top: 15px;
        margin-left: 10px; 
    
    }

    button {
        margin-top: 5px;
        margin-left: 15px;
    }

   

    </style>
</head>
<body>
<h1><?php echo "Welcome  ". $row['username']; ?></h1>
<a href="logout.php"><button class="btn btn-primary" type="submit">Logout</button></a>
</body>
</html>