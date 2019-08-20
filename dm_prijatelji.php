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

// Ako se zalje zahtev za pracenje korisnika
// if(isset($_GET['id'])) {...}
// if(!empty ($_GET['id'])) {...}
if(!empty($_GET['id'])) {
    $pid = $conn->real_escape_string($_GET['id']) ;
    // kad god se dohvata vrednost iz GET ili POST trebalo bi da se pozove real_escape_string 
    // $id-logovan korisnik (koji salje zahtev)
    // $pid - korisnik kojem se salje zahtev 

    // provera nema li vec prijateljstva 
    $sql = "
    SELECT * FROM prijatelji 
    WHERE korisnik_id = $id AND prijatelj_id = $pid
    
    ";
    $result = $conn->query($sql);
    if($result->num_rows == 0) {
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
    <title>Document</title>
</head>

<body>
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
                echo " ";
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

                if($jatebe + $timene > 1) {
                    echo " uzajamni prijatelji";
                }
                elseif($jatebe) {
                    echo " pratim korisnika ";
                }
                else if($timene) {
                    echo " korisnik mene prati";
                }



                echo "<a href='dm_prijatelji.php?id=$pid'>";
                echo " Prati korisnika";
                echo "</a>";
                echo "</li>";
            }



            echo "<ul>";
        }
    }


    ?>
</body>

</html>