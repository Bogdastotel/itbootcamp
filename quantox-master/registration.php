<?php
    
    require_once 'connection.php';
  
        $newPass= "";
        $newPass2= "";
        $newName="";
        $newUsername="";
        $newEmail="";
        

    if(!empty($_POST)){
        $newEmail = $conn->real_escape_string($_POST['newEmail']);
        $newUsername = $conn->real_escape_string($_POST['newUsername']);
        $newName = $conn->real_escape_string($_POST['newName']);
        $newPass = $conn->real_escape_string($_POST['newPass']);
        $newPass2 = $conn->real_escape_string($_POST['newPass2']);

        if(empty($newUsername)){
            echo "You must enter your username";
        }
        else {
            $sql= "SELECT username 
            FROM network
            WHERE username = '$newUsername'";
            $result = $conn->query($sql);
            

                // var_dump($result->num_rows);
                if($result->num_rows == 0){
                    if(empty($newPass2)){
                        echo "Pasword cannot be empty";
                    }
                    elseif($newPass == $newPass2){
                        $newPass2 = md5($newPass2);
                        $sql= "INSERT INTO `network`
                        (`username`, `pass`, `name`, `email`)
                        VALUES ('$newUsername', '$newPass2', '$newName', '$newEmail')";

                        $result = $conn->query($sql);

                        header('Location:login.php');
                        }
                    else
                    {
                        echo "Your password and confirmation password do not match";
                    }
                    }    
                else {
                        echo "Username must be unique";
                    }     
                }


    }
       
    
?>

<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Registration form</title>
        <link href="https://fonts.googleapis.com/css?family=Croissant+One" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Raleway:400,500,600,700,800,900" rel="stylesheet">
        <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
        <link rel="stylesheet" href="css/bootstrap.css">
        <link rel="stylesheet" href="css/font-awesome.min.css">
        <link rel="stylesheet" href="css/owl.carousel.min.css">
        <link rel="stylesheet" href="css/owl.theme.default.min.css">
        <link rel="stylesheet" href="style.css">
        <link rel="stylesheet" href="responsive.css">
            <style>
                table {
                width:100%;
                margin: 0;
                }
                img{
                            width: 450px;
                        }
                tr {
                background-color:#ffffff;
                }
                tr:hover {
                background-color:  #ececff;
                cursor: pointer;
                }
                th {
                color: #ffffff;
                background-color: #6c7ae0;
                font-family: Poppins-Regular;
                font-size: 18px;
                padding-top: 19px;
                padding-bottom: 19px;
                padding-left: 10px;
                }
                td {
                font-family: Poppins-Regular;
                font-size: 15px;
                color:  #666666;
                padding-top: 20px;
                padding-bottom: 20px;
                padding-left: 15px;
                border-bottom: 1px solid #f2f2f2;
                }
                td:nth-child(even) {
                background-color: lightblue;
                }
                td:nth-child(odd) {
                background-color: #d8d8ef;
                }
                a {
                    background: #4CAF50;
                    border-right: 1px solid rgba(0, 0, 0, .3);
                    color: #fff;
                    padding: 12px 20px;
                    text-decoration: none;
                    text-align:center;
                }
                a:hover {
                    background: #4CAF50;
                    box-shadow: inset 0 0 10px 1px rgba(0, 0, 0, .3);
                }
                
                ul.topnav {
                    list-style-type: none;
                    margin: 0;
                    padding: 0;
                    overflow: hidden;
                    background-color: lightblue;
                }

                ul.topnav li {float: left;}

                ul.topnav li a {
                    display: block;
                    color: white;
                    text-align: center;
                    padding: 14px 16px;
                    text-decoration: none;
                }

                ul.topnav li a:hover:not(.active) {background-color: #111;}

                ul.topnav li a.active {background-color: #4CAF50;}
                
                ul.topnav li.right {float: right;}

                @media screen and (max-width: 600px) {
                ul.topnav li.right, 
                ul.topnav li {float: none;}
                }

                h1{
                    color:#6c7ae0;
                    text-align:center;
                }
        </style>
    </head>

    <body>
    <div class="wrapper">
        <header class="header">
            <div class="blue">
                <img src="img/header-shepe-blue.png" alt="">
            </div>
            <div class="white">
                <img src="img/header-shepe-white.png" alt="">
            </div>

            <form action="registration.php" method = "POST">
            <label for="email">E-mail:</label>
            <input type="email" name="newEmail" value=""><br>
            <br>
            <br>            
            <label for="name">Name:</label>
            <input type="text" name="newName" value=""><br>
            <br>
            <br>
            <label for="username">Username:</label>
            <input type="text" name="newUsername" value=""><br>
            <br>
            <br>
            <label for="newPass">Password:</label>
            <input type="password" name="newPass" value="">
            <br>
            <br>

            <label for="newPass2">Repeat password:</label>
            <input type="password" name="newPass2" value="">
            <br>
            <br>    
            <input type="submit" value="Submit">

        </form>

            <div class="row">
                    <div class="col-md-3 col-sm-3 col-xs-12">

                    </div>
                    <div class="col-md-9 col-sm-9 col-xs-12">
                        <div class="menu">
                            <ul class="nav navbar-nav">
                                
                            </ul>
                       
                        </div>
                    </div>
                </div>
        
                <footer class="footer">
            <div class="container">
                <div class="row">
                    <div class="col-md-4 col-sm-12">
                        <div class="footer-icon">
                        </div>
                    </div>
        </footer>
    </div>
    <script src="js/jquery-3.1.1.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/owl.carousel.min.js"></script>
    <script src="js/active.js"></script>




        
        
</body>

</html>