<?php
    require_once 'connection.php';
    session_start();

    if($_SERVER["REQUEST_METHOD"] == "POST"){
        $search = $conn->real_escape_string($_POST['search']);
    }   
    


?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Welcome page</title>
    <link href="https://fonts.googleapis.com/css?family=Croissant+One" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Raleway:400,500,600,700,800,900" rel="stylesheet">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/font-awesome.min.css">
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/owl.theme.default.min.css">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="responsive.css">
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
            <div class="container">
                <img class="shepe1" src="img/shepe1.png" alt="">
                <img class="shepe2" src="img/shepe2.png" alt="">
                <img class="shepe3" src="img/shepe2.png" alt="">
                <img class="shepe4" src="img/shepe2.png" alt="">
                <img class="shepe5" src="img/shepe1.png" alt="">
                <img class="shepe6" src="img/shepe2.png" alt="">
                <div class="row">
                    <div class="col-md-3 col-sm-3 col-xs-12">

                    </div>
                    <div class="col-md-9 col-sm-9 col-xs-12">
                        <div class="menu">
                            <ul class="nav navbar-nav">
                                <li class="active"><a href="search.php">Search again</a></li>
                                <li class="active"><a href="logout.php">Logout</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <div class="header-text">
                            <h1>
                            <?php 
                            
                            $sql="SELECT * FROM network
                            where username like '%$search%'";
                            $result = $conn->query($sql);
                            if($result->num_rows == 0){
                                echo "<p> No users with this username</p>";
                            }
                            else{
                                echo "Your search result with input username:";
                                echo "<br>";
                                while($row = $result->fetch_assoc()){  
                                    echo "<p>"."Name:   ".$row['username']."</p>";                      
                                    echo "<p>"."Username is:  ".$row['name']."</p>";
                                    echo "<p>"."Email is:  ".$row['email']."</p>";

                                }
                            }

                            ?>
                            </h1>
                            <p></p>
                            <button><a href="logout.php">Logout</a></button>
                            <button><a href="search.php">Search again</a></button>


                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <div class="another-text">
                            <p></p>
                        </div>
                    </div>
                </div>
            </div>
        </header>
        <section class="development">
            <div class="blue">
                <img src="img/development-shepe-blue.png" alt="">
            </div>
            <div class="white">
                <img src="img/development-shepe-white.png" alt="">
            </div>
            
        </section>
        
        <footer class="footer">
            <div class="container">
                <div class="row">
                    <div class="col-md-4 col-sm-12">
                 
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