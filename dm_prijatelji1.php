<?php
// session_start();
// require_once 'dm_konekcija.php';
require_once 'dm_header.php';

// include-ukljucuje fajl (nastavlja ako fajl ne postoji)
// require-ukljucuje fajl (prekida ako fajl ne postoji)
// include_once- II + ako je vec ukljucen, ne ukljucuje ga
// require_once- II + ako je vec ukljucen

// konekcija na bazi 
// $servername = "localhost";
// $username = "admin";
// $password = "admin123";
// $database = "mreza";

// // objekat konekcije

// $conn = new mysqli($servername, $username, $password, $database);

// if ($conn->connect_error) {
//     die("Neuspela konekcija! Razlog: " . $conn->connect_error);
// }

// $conn->set_charset("utf8");

// Podesavanje id logovanog korisnika 
if(!isset($_SESSION['id'])) 
{
    header('Location: dm_login.php');
}
$id = $_SESSION['id'];

// kad god se dohvata vrednost iz GET ili POST trebalo bi da se pozove real_escape_string 
// $id-logovan korisnik (koji salje zahtev)
// $pid - korisnik kojem se salje zahtev 

if (!empty($_GET['dodaj'])) {
    $pid = $conn->real_escape_string($_GET['dodaj']);

    $sql = "
    SELECT * FROM prijatelji 
    WHERE korisnik_id = $id AND prijatelj_id = $pid
     
    ";
    $result = $conn->query($sql);
    if ($result->num_rows == 0) {
        $sql1 = "
        INSERT INTO prijatelji (korisnik_id, prijatelj_id) 
        VALUE ($id, $pid)
        ";
        $conn->query($sql1);
    }
}

if(!empty($_GET['brisi'])) {
    $pid = $conn->real_escape_string($_GET['brisi']);

    $sql = "
    SELECT * FROM prijatelji 
    WHERE korisnik_id = $id
    AND prijatelj_id = $pid
    
    ";
    $result = $conn->query($sql);
    if($result->num_rows > 0) {
        $sql1 = "
        DELETE FROM prijatelji 
        WHERE korisnik_id = $id
        AND prijatelj_id = $pid
        ";
        $result = $conn->query($sql1);
    } //end- if unutrasnji
    // header('Location: dm_prijatelji1.php');
    // header('Location: vezbaUpitPrijateljiOOP.php');
}//end- if spoljasnji


?>

<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="mrezaStyle.css">
    <title>Document</title>
    <!-- <style>
          
        	header li.navi {
                display: inline-block;
                margin-top: 20px;
				margin-left: 20px;
				list-style-type: none;
            }	
            .navi a {
                text-decoration: none;
                color: white;
            }
            .navi a:hover {
                color:lightskyblue;
            }
            a {
                color:darkmagenta;
            }
            li, p {
                color:white;
            }
            p {
                margin-left: 200px;
                margin-top: 50px;
            }
    </style> -->
</head>

<!-- body i header su ukljuceni u dm_header.php  -->

<!-- <body>

    <header>
    <ul>
        <li class='navi'><a href="indexx.php" target="_blank">HOME</a></li>
        <li class='navi'><a href="vezbaUpitPrijateljiOOP.php" target="_blank">PRIJATELJI</a></li>
        <li class='navi'><a href="formaZaEditovanjeProfila.php" target="_blank">EDIT</a></li>
        <li class='navi'><a href="dm_logout.php" target="_blank">LOGOUT</a></li>

    
    </ul>    
    <header>
    <hr> -->
    
    <?php
    // prikazi sve korisnike koji nisu ja

    $sql = "
    SELECT k.id AS id, k.username AS username, p.ime AS ime, p.prezime AS prezime, p.pol AS pol FROM korisnici AS k 
    INNER JOIN profili AS p 
    ON k.id = p.korisnik_id
    WHERE k.id != $id
    ORDER BY p.ime, p.prezime
    ";

    $result = $conn->query($sql);

    if (!$result) {
        echo "<p>Greska! Razlog: ";
        echo $conn->error;
        echo "</p>";
    } else {
        if ($result->num_rows == 0) {
            echo "<p> Nemate nijednog korisnika u mrezi :( </p>";
        } else {
            echo "<p> Korisnici: </p>";
            echo "<ul>";

            while ($red = $result->fetch_assoc()) {
                echo "<li>";
                echo $red["ime"];
                echo $red["prezime"];
                if ($red["pol"] == "Z") {
                    echo "<span style='color:red'>";
                    echo " (";
                    echo $red["username"];
                    echo " )";
                    echo "</span>";
                } else if ($red["pol"] == "M") {
                    echo "<span style='color:blue'>";
                    echo " (";
                    echo $red["username"];
                    echo " )";
                    echo "</span>";
                }
                $pid = $red['id'];

                $sql1 = "
                SELECT * FROM prijatelji WHERE korisnik_id = $id 
                AND prijatelj_id = $pid
                ";
                $result1 = $conn->query($sql1);
                $jatebe = $result1->num_rows;  // 0 ili 1

                $sql2 = "
                 SELECT * FROM prijatelji WHERE korisnik_id = $pid
                 AND prijatelj_id = $id
                 ";

                $result2 = $conn->query($sql2);

                $timene = $result2->num_rows; // 0 ili 1

                if ($jatebe + $timene > 1) {
                    echo " uzajamni prijatelji";
                    echo "<a href='dm_prijatelji1.php?brisi=$pid'> ";
                    echo " Brisi pracenje";
                    echo "</a>";
                } elseif ($jatebe) {
                    echo " pratim korisnika ";
                    echo "<a href='dm_prijatelji1.php?brisi=$pid'> ";
                    echo " Brisi pracenje";
                    echo "</a>";
                } else if ($timene) {
                    echo " korisnik mene prati";
                    echo "<a href='dm_prijatelji1.php?dodaj=$pid'>";
                    echo " Prati korisnika";
                    echo "</a>";
                } else {
                    echo "nikakva veza";
                    echo "<a href='dm_prijatelji1.php?dodaj=$pid'>";
                    echo " Prati korisnika";
                    echo "</a>";
                }

                echo "</li>";
            }
            echo "<ul>";
        }
    }

    echo "<br>";
    echo "<hr>";

    ?>

    </body>
