<?php

$servername = "localhost";
$username = "admin";
$password = "admin123";
$database = "ambulanta";

$conn = mysqli_connect($servername, $username, $password, $database);

if(!$conn)
{
    die("Neuspela konekcija. Razlog: " . mysqli_connect_error());
}

    echo "Uspesna konekcija <br>";

mysqli_set_charset($conn, "utf8");

$dodavanje = "INSERT INTO pacijenti (id, ime, prezime, visina, tezina, godina_rodjenja)
                             VALUES (10, 'Miloš', 'Milošević',  182, 82, 1990)";

if(mysqli_query($conn, $dodavanje))
{
    echo "New record created successfully";
}
else {
    echo "Error:" . $dodavanje . "<br>" . mysqli_error($conn);
}
?>