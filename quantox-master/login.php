<?php

    session_start();
    require_once 'connection.php';


    if($_SERVER["REQUEST_METHOD"] == "POST"){
        $user = $conn->real_escape_string($_POST['user']);
        $pass = $conn->real_escape_string($_POST['pass']);
        $sql=" SELECT * FROM network
            WHERE username = '$user'";
        $result= $conn->query($sql);
        if(!$result){
            echo "Error in sql command";
        }
        else {
            if($result->num_rows == 0){
                echo "Username or password doesn't exist";
            }
            else{
                $row = $result->fetch_assoc();
                if(md5($pass) != $row['pass']){
                    echo "Passwords doesn't match ";
                }
                else{
                    $_SESSION['id'] = $row['id'];
                    header('Location: welcome.php');
                }
            }
        }
    }
?>
<head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Login</title>
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

            <div class="row">
                    <div class="col-md-3 col-sm-3 col-xs-12">

                    </div>
                    <div class="col-md-9 col-sm-9 col-xs-12">
                        <div class="menu">
                            <ul class="nav navbar-nav">
                                <li class="active"><a href="registration.php">Registration</a></li>
                                <li class="active"><a href="home.php">Home</a></li>

                            </ul>
                        </div>
                    </div>
                </div>
        

        <form method="POST" action="login.php">
            <label for="user">Username:</label>
            <input type="text" name="user" value="">
            <br>
            <br>
            <br>
            <label for="pass">Password:</label>
            <input type="password" name="pass" value="">
            <br>
            <br>    
            <input type="submit" value="Login">

        </form>
        
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
