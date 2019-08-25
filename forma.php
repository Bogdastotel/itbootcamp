
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

if(!empty($_POST)) {
    $id = 8;
    $ime = $conn->real_escape_string($_POST['ime']);
    $prezime = $conn->real_escape_string($_POST['prezime']);
    $pol = $conn->real_escape_string($_POST['pol']);
    if($ime == "" || empty($ime)) {
        echo "Morate uneti ime";
    }
    else if ($prezime == "" || empty($prezime)) {
        echo "Morate uneti prezime";
    }

    else {  echo "Zdravo " . $ime . " " . $prezime . " " . $pol;}
    

   

    $sql = "INSERT INTO profili (korisnik_id, ime, prezime, pol)
     VALUES ($id, '$ime', '$prezime', '$pol' )";

     $conn->query($sql);
}





?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>

<body>
    <form action="forma.php" method="POST">
        Ime:
        <input type="text" name="ime"><br><br>
        Prezime:
        <input type="text" name="prezime"><br>
        Pol:<br>
        Zenski <input type="radio" name="pol" value="Z"><br>
        Muski <input type="radio" name="pol" value="M"><br>
        Ostalo <input type="radio" name="pol" value="O" checked><br><br>
        <input type="submit" value="Potvrdi">
    </form>



   
</body>

</html>