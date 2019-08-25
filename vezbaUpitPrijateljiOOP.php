<?php

// konekcija na bazi 
$servername = "localhost";
$username = "admin";
$password = "admin123";
$database = "mreza";

// objekat konekcije

$conn = new mysqli($servername, $username, $password, $database);

if ($conn->connect_error) {
    die("Neuspela konekcija! Razlog: " . $conn->connect_error);
}

$conn->set_charset("utf8");

// Podesavanje id logovanog korisnika 

$id = 1;

// kad god se dohvata vrednost iz GET ili POST trebalo bi da se pozove real_escape_string 
// $id-logovan korisnik (koji salje zahtev)
// $pid - korisnik kojem se salje zahtev 

if (!empty($_GET['id'])) {
    $pid = $conn->real_escape_string($_GET['id']);

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

?>

<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="mrezaStyle.css">
    <title>Document</title>
    <style>
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
    </style>
</head>

<body>

    <header>
    <ul>
        <li class='navi'><a href="indexx.php" target="_blank">HOME</a></li>
        <li class='navi'><a href="prijateljiTabela.php" target="_blank">PRIJATELJI</a></li>
        <li class='navi'><a href="formaZaEditovanjeProfila.php" target="_blank">EDIT</a></li>
    
    </ul>    
    <header>
    <hr>
    
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

    // if (!$result) {
    //     echo "<p>Greska! Razlog: ";
    //     echo $conn->error;
    //     echo "</p>";
    // } else {
    //     if ($result->num_rows == 0) {
    //         echo "<p> Nemate nijednog korisnika u mrezi :( </p>";
    //     } else {
    //         echo "<p> Korisnici: </p>";
    //         echo "<ul>";

    //         while ($red = $result->fetch_assoc()) {
    //             echo "<li>";

    //             echo $red["ime"];
    //             echo " ";
    //             echo $red["prezime"];
    //             if ($red["pol"] == "Z") {
    //                 echo "<span style='color:red'>";
    //                 echo " (";
    //                 echo $red["username"];
    //                 echo " )";
    //                 echo "</span>";
    //             } else if ($red["pol"] == "M") {
    //                 echo "<span style='color:blue'>";
    //                 echo " (";
    //                 echo $red["username"];
    //                 echo " )";
    //                 echo "</span>";
    //             }
    //             $pid = $red['id'];

    //             $sql1 = "
    //             SELECT * FROM prijatelji WHERE korisnik_id = $id 
    //             AND prijatelj_id = $pid
    //             ";
    //             $result1 = $conn->query($sql1);
    //             $jatebe = $result1->num_rows;  // 0 ili 1

    //             $sql2 = "
    //              SELECT * FROM prijatelji WHERE korisnik_id = $pid
    //              AND prijatelj_id = $id
    //              ";

    //             $result2 = $conn->query($sql2);

    //             $timene = $result2->num_rows; // 0 ili 1

    //             if ($jatebe + $timene > 1) {
    //                 echo " uzajamni prijatelji";
    //                 echo "<a href='dm_brisi.php?brisi=$pid'> ";
    //                 echo " Brisi pracenje";
    //                 echo "</a>";
    //             } elseif ($jatebe) {
    //                 echo " pratim korisnika ";
    //                 echo "<a href='dm_brisi.php?brisi=$pid'> ";
    //                 echo " Brisi pracenje";
    //                 echo "</a>";
    //             } else if ($timene) {
    //                 echo " korisnik mene prati";
    //                 echo "<a href='dm_dodaj.php?dodaj=$pid'>";
    //                 echo " Prati korisnika";
    //                 echo "</a>";
    //             } else {
    //                 echo "nikakva veza";
    //                 echo "<a href='dm_dodaj.php?dodaj=$pid'>";
    //                 echo " Prati korisnika";
    //                 echo "</a>";
    //             }

    //             echo "</li>";
    //         }
    //         echo "<ul>";
    //     }
    // }

    // echo "<br>";
    echo "<hr>"; 


    $result = mysqli_query($conn, $sql);
    if ($result != false) {
        $red = mysqli_fetch_assoc($result);
        echo "<table>";
        echo "<tr>";
        echo "<th>Ime</th>";
        echo "<th>Prezime</th>";
        echo "<th>Pol</th>";
        echo "<th>Korisnicko ime</th>";
        echo "<th>Svojstva</th>";
        echo "<th>Akcija</th>";
        echo "</tr>";

        while ($red = mysqli_fetch_assoc($result)) {
            echo "<tr>";
            echo "<td>" . $red["ime"] . "</td>";
            echo "<td>" . $red["prezime"] . "</td>";
            echo "<td>" . $red["pol"] . "</td>";
            echo "<td>" . $red["username"] . "</td>";

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
            echo "<td>";
            if ($jatebe + $timene > 1) {
                echo " uzajamni prijatelji";
                echo "<td>";
                echo "<a href='dm_brisi.php?brisi=$pid'> ";
                echo " Brisi pracenje";
                echo "</a>";
                echo "</td>";
            } elseif ($jatebe) {
                echo " pratim korisnika ";
                echo "<td>";
                echo "<a href='dm_brisi.php?brisi=$pid'> ";
                echo " Brisi pracenje";
                echo "</a>";
                echo "</td>";
            } else if ($timene) {
                echo " korisnik mene prati";
                echo "<td>";
                echo "<a href='dm_dodaj.php?dodaj=$pid'>";
                echo " Prati korisnika";
                echo "</a>";
                echo "</td>";
            } else {
                echo "nikakva veza";
                echo "<td>";
                echo "<a href='dm_dodaj.php?dodaj=$pid'>";
                echo " Prati korisnika";
                echo "</a>";
                echo "</td>";
            }

            echo "</tr>";
        }
        echo "</table>";
    }


    ?>


    

</body>