
<?php 
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
    header('Location: vezbaUpitPrijateljiOOP.php');
}//end- if spoljasnji


