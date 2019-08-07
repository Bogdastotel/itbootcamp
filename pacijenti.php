<html>
<head>
<link rel ="stylesheet" href="style.css">

<!-- <style>

table
{
    width: 100%;
    margin: 0px;
}

th, td {
border: 1px solid black;
}
</style> -->

</head>
<body>

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


// ako baza sadrzi latinicna srpska slova

mysqli_set_charset($conn, "utf8"); 

// kreiranje upita (query)

$sql = "SELECT ime, prezime, visina, tezina, god_rodjenja FROM pacijenti";


// stampanje tabele
$result = mysqli_query($conn, $sql);

if(mysqli_num_rows($result) == 0)
{
    echo "<p>Ne postoje pacijenti u bazi.</p>";
}
/*
else
{
    echo "<ul>";
    $red = mysqli_fetch_assoc($result);
    while($red != false)
    {
        // Red pisemo u listu
        echo "<li>";
        echo "Pacijent " . $red["ime"] . " " . $red["prezime"];
        echo " ima visinu: " . $red["visina"] . ", tezinu: " . $red["tezina"] . ", godina rodjenja: " . $red["godina_rodjenja"];
        echo "</li>";
        
        // Dohvatimo novi red
        $red = mysqli_fetch_assoc($result);
    }
    echo "</ul>";
} */

else
{
    echo "<table class='pac'>";
    
    echo "<tr>" . "<th>" . "Ime" . "</th>" . "<th>" . "Prezime" . "</th>"
     . "<th>" . "Visina" . "</th>" . "<th>" . "Visina" . "</th>" . "<th>" . "Godina rođenja" . "</th>". "</tr>";

    while($red = mysqli_fetch_assoc($result))
    {
        // Red pisemo u listu
        echo "<tr>";
        echo "<td>" . $red["ime"] . "</td>";
        echo "<td>" . $red["prezime"] . "</td>";
        echo "<td>" . $red["visina"] . "</td>";
        echo "<td>" . $red["tezina"] . "</td>";
        echo "<td>" . $red["god_rodjenja"] . "</td>";
        echo "</tr>";
        
        // Dohvatimo novi red
        // $red = mysqli_fetch_assoc($result);
    }
    echo "</table>";
}

// stampanje tabele po visini

$sql = "SELECT ime, prezime, visina, tezina, god_rodjenja FROM pacijenti ORDER BY visina DESC;";

$result = mysqli_query($conn, $sql);

if(mysqli_num_rows($result) == 0)
{
    echo "<p>Ne postoje pacijenti u bazi.</p>";
}
/*
else
{
    echo "<ul>";
    $red = mysqli_fetch_assoc($result);
    while($red != false)
    {
        // Red pisemo u listu
        echo "<li>";
        echo "Pacijent " . $red["ime"] . " " . $red["prezime"];
        echo " ima visinu: " . $red["visina"] . ", tezinu: " . $red["tezina"] . ", godina rodjenja: " . $red["godina_rodjenja"];
        echo "</li>";
        
        // Dohvatimo novi red
        $red = mysqli_fetch_assoc($result);
    }
    echo "</ul>";
} */

else
{
    echo "<table class='pac'>";
    
    echo "<tr>" . "<th>" . "Ime" . "</th>" . "<th>" . "Prezime" . "</th>"
     . "<th>" . "Visina" . "</th>" . "<th>" . "Visina" . "</th>" . "<th>" . "Godina rođenja" . "</th>". "</tr>";

    while($red = mysqli_fetch_assoc($result))
    {
        // Red pisemo u listu
        echo "<tr>";
        echo "<td>" . $red["ime"] . "</td>";
        echo "<td>" . $red["prezime"] . "</td>";
        echo "<td>" . $red["visina"] . "</td>";
        echo "<td>" . $red["tezina"] . "</td>";
        echo "<td>" . $red["god_rodjenja"] . "</td>";
        echo "</tr>";
        
        // Dohvatimo novi red
        // $red = mysqli_fetch_assoc($result);
    }
    echo "</table>";
}

echo "<br>";

// stampanje tabele po pocetnom slovu prezimena P

$sql = "SELECT ime, prezime, visina, tezina, god_rodjenja FROM pacijenti WHERE prezime LIKE 'P%' ORDER BY ime;";

$result = mysqli_query($conn, $sql);

if(mysqli_num_rows($result) == 0)
{
    echo "<p>Ne postoje pacijenti u bazi.</p>";
}
/*
else
{
    echo "<ul>";
    $red = mysqli_fetch_assoc($result);
    while($red != false)
    {
        // Red pisemo u listu
        echo "<li>";
        echo "Pacijent " . $red["ime"] . " " . $red["prezime"];
        echo " ima visinu: " . $red["visina"] . ", tezinu: " . $red["tezina"] . ", godina rodjenja: " . $red["godina_rodjenja"];
        echo "</li>";
        
        // Dohvatimo novi red
        $red = mysqli_fetch_assoc($result);
    }
    echo "</ul>";
} */

else
{
    echo "<table class='pac'>";
    
    echo "<tr>" . "<th>" . "Ime" . "</th>" . "<th>" . "Prezime" . "</th>"
     . "<th>" . "Visina" . "</th>" . "<th>" . "Visina" . "</th>" . "<th>" . "Godina rođenja" . "</th>". "</tr>";

    while($red = mysqli_fetch_assoc($result))
    {
        // Red pisemo u listu
        echo "<tr>";
        echo "<td>" . $red["ime"] . "</td>";
        echo "<td>" . $red["prezime"] . "</td>";
        echo "<td>" . $red["visina"] . "</td>";
        echo "<td>" . $red["tezina"] . "</td>";
        echo "<td>" . $red["god_rodjenja"] . "</td>";
        echo "</tr>";
        
        // Dohvatimo novi red
        // $red = mysqli_fetch_assoc($result);
    }
    echo "</table>";
}

echo "<br>";


// stampanje tabele po pocetnom slovu prezimena M

$sql = "SELECT ime, prezime, visina, tezina, god_rodjenja FROM pacijenti WHERE prezime LIKE 'M%' ORDER BY ime;";

$result = mysqli_query($conn, $sql);

if(mysqli_num_rows($result) == 0)
{
    echo "<p>Ne postoje pacijenti u bazi.</p>";
}


else
{
    echo "<table class='pac'>";
    
    echo "<tr>" . "<th>" . "Ime" . "</th>" . "<th>" . "Prezime" . "</th>"
     . "<th>" . "Visina" . "</th>" . "<th>" . "Visina" . "</th>" . "<th>" . "Godina rođenja" . "</th>". "</tr>";

    while($red = mysqli_fetch_assoc($result))
    {
        // Red pisemo u listu
        echo "<tr>";
        echo "<td>" . $red["ime"] . "</td>";
        echo "<td>" . $red["prezime"] . "</td>";
        echo "<td>" . $red["visina"] . "</td>";
        echo "<td>" . $red["tezina"] . "</td>";
        echo "<td>" . $red["god_rodjenja"] . "</td>";
        echo "</tr>";
        
        // Dohvatimo novi red
        // $red = mysqli_fetch_assoc($result);
    }
    echo "</table>";
}

echo "<br>";

// stampanje tabele po pocetnom slovu prezimena A

$sql = "SELECT ime, prezime, visina, tezina, god_rodjenja FROM pacijenti WHERE prezime LIKE 'A%' ORDER BY ime;";

$result = mysqli_query($conn, $sql);

if(mysqli_num_rows($result) == 0)
{
    echo "<p>Ne postoje pacijenti u bazi.</p>";
}

else
{
    echo "<table class='pac'>";
    
    echo "<tr>" . "<th>" . "Ime" . "</th>" . "<th>" . "Prezime" . "</th>"
     . "<th>" . "Visina" . "</th>" . "<th>" . "Visina" . "</th>" . "<th>" . "Godina rođenja" . "</th>". "</tr>";

    while($red = mysqli_fetch_assoc($result))
    {
        // Red pisemo u listu
        echo "<tr>";
        echo "<td>" . $red["ime"] . "</td>";
        echo "<td>" . $red["prezime"] . "</td>";
        echo "<td>" . $red["visina"] . "</td>";
        echo "<td>" . $red["tezina"] . "</td>";
        echo "<td>" . $red["god_rodjenja"] . "</td>";
        echo "</tr>";
        
        // Dohvatimo novi red
        // $red = mysqli_fetch_assoc($result);
    }
    echo "</table>";
}

// Odredi sva razlicita prezimena pacijenata u bazi i ispisati pacijente sa datim prezimenom

$sql = "SELECT DISTINCT prezime FROM pacijenti ORDER BY prezime;";

$result = mysqli_query($conn, $sql);

while($red = mysqli_fetch_assoc($result)) {
    $prezime = $red["prezime"];
    echo "<p> Pacijenti cije je prezime: $prezime</p>";
    $sql1 = "SELECT * FROM pacijenti WHERE prezime = '$prezime' ORDER BY ime";
$result1 = mysqli_query($conn, $sql1);

echo "<table class='pac'>";
    
echo "<tr>" . "<th>" . "Ime" . "</th>" . "<th>" . "Prezime" . "</th>"
 . "<th>" . "Visina" . "</th>" . "<th>" . "Visina" . "</th>" . "<th>" . "Godina rođenja" . "</th>". "</tr>";

while($red = mysqli_fetch_assoc($result1))
{
    // Red pisemo u listu
    echo "<tr>";
    echo "<td>" . $red["ime"] . "</td>";
    echo "<td>" . $red["prezime"] . "</td>";
    echo "<td>" . $red["visina"] . "</td>";
    echo "<td>" . $red["tezina"] . "</td>";
    echo "<td>" . $red["god_rodjenja"] . "</td>";
    echo "</tr>";
    
    // Dohvatimo novi red
    // $red = mysqli_fetch_assoc($result);
}
echo "</table>";
}


?>

</body>

</html>