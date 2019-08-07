<?php

$servername = "localhost";
$username = "admin";
$password = "admin123";
$database = "videoteka";

$conn = mysqli_connect($servername, $username, $password, $database);

if(!$conn)
{
    die("Neuspela konekcija. Razlog: " . mysqli_connect_error());
}

    echo "Uspesna konekcija <br>";

mysqli_set_charset($conn, "utf8");

$dodavanjeFilmovi = "INSERT INTO filmovi (id, naslov, reziser, god_izdavanja, zanr, ocena)
                             VALUES (12, 'Film 1', 'Mina Minić',  2001, 'Drama', 7.4);";
$dodavanjeFilmovi .= "INSERT INTO filmovi (id, naslov, reziser, god_izdavanja, zanr, ocena)
                            VALUES (13, 'Film 2', 'Marko Marković', 2004, 'Comedy', 5.2);";

if(mysqli_multi_query($conn, $dodavanjeFilmovi))
{
    echo "New record created successfully";
}
else {
    echo "Error:" . $dodavanjeFilmovi . "<br>" . mysqli_error($conn);
}
?>