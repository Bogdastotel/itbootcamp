<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <style>
        table {
            width: 100%;
            margin: 0px;
        }
        th, td {
            border: 1px solid black;
        }
    
    
    
    
    
    </style>
</head>

<body>
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


// ako baza sadrzi latinicna srpska slova

mysqli_set_charset($conn, "utf8"); 

// kreiranje upita (query)
// Tabelarno prikazati sve informacije o svim filmovima iz tabele filmovi, abecedno po nazivu filma.

$sql = "SELECT * FROM filmovi ORDER BY naslov ASC;";


// stampanje tabele 


$result = mysqli_query($conn, $sql);

if(mysqli_num_rows($result) == 0)
{
    echo "<p>Ne postoje filmovi u bazi.</p>";
}

else {

echo "<table>";
echo "<tr>" . "<th>" . "Id" . "</th>" . "<th>" . "Naslov" . "</th>"
. "<th>" . "Reziser" . "</th>" . "<th>" . "God Izdavanja" . "</th>" . "<th>" . "Zanr" . "</th>". "<th>" . "Ocena" . "</th>" . "</tr>";

while($red = mysqli_fetch_assoc($result)) {

    echo "<tr>";
    echo "<td>" . $red['id'] . "</td>";
    echo "<td>" . $red['naslov'] . "</td>";
    echo "<td>" . $red['reziser'] . "</td>";
    echo "<td>" . $red['god_izdavanja'] . "</td>";
    echo "<td>" . $red['zanr'] . "</td>";
    echo "<td>" . $red['ocena'] . "</td>";
    echo "</tr>";
}
echo "</table>";
}

echo "<br>";


// Tabelarno prikazati sve informacije o najbolje rangiranim filovima, abecedno po nazivu filma.
$sql = "SELECT * FROM `filmovi` ORDER BY ocena DESC, naslov ASC";


// stampanje tabele 

$result = mysqli_query($conn, $sql);

if(mysqli_num_rows($result) == 0)
{
    echo "<p>Ne postoje filmovi u bazi.</p>";
}

else {

echo "<table>";
echo "<tr>" . "<th>" . "Id" . "</th>" . "<th>" . "Naslov" . "</th>"
. "<th>" . "Reziser" . "</th>" . "<th>" . "God Izdavanja" . "</th>" . "<th>" . "Zanr" . "</th>". "<th>" . "Ocena" . "</th>" . "</tr>";

while($red = mysqli_fetch_assoc($result)) {

    echo "<tr>";
    echo "<td>" . $red['id'] . "</td>";
    echo "<td>" . $red['naslov'] . "</td>";
    echo "<td>" . $red['reziser'] . "</td>";
    echo "<td>" . $red['god_izdavanja'] . "</td>";
    echo "<td>" . $red['zanr'] . "</td>";
    echo "<td>" . $red['ocena'] . "</td>";
    echo "</tr>";
}
echo "</table>";
}

echo "<br>";

// kreiranje upita (query)
// Tabelarno prikazati sve informacije o svim filmovima iz tabele filmovi, abecedno po nazivu filma.

$sql = "SELECT * FROM filmovi ORDER BY naslov ASC;";


// stampanje tabele 


$result = mysqli_query($conn, $sql);

if(mysqli_num_rows($result) == 0)
{
    echo "<p>Ne postoje filmovi u bazi.</p>";
}

else {

echo "<table>";
echo "<tr>" . "<th>" . "Id" . "</th>" . "<th>" . "Naslov" . "</th>"
. "<th>" . "Reziser" . "</th>" . "<th>" . "God Izdavanja" . "</th>" . "<th>" . "Zanr" . "</th>". "<th>" . "Ocena" . "</th>" . "</tr>";

while($red = mysqli_fetch_assoc($result)) {

    echo "<tr>";
    echo "<td>" . $red['id'] . "</td>";
    echo "<td>" . $red['naslov'] . "</td>";
    echo "<td>" . $red['reziser'] . "</td>";
    echo "<td>" . $red['god_izdavanja'] . "</td>";
    echo "<td>" . $red['zanr'] . "</td>";
    echo "<td>" . $red['ocena'] . "</td>";
    echo "</tr>";
}
echo "</table>";
}

echo "<br>";

// Za svaki žanr koji postoji u bazi prikazati po jednu tabelu, 
// a u svakoj tabeli informacije o filmovima koji pripadaju tom žanru, abecedno po nazivu filma.

$sql = "SELECT * FROM `filmovi` ORDER BY ocena DESC, naslov ASC";


// stampanje tabele 

$result = mysqli_query($conn, $sql);

if(mysqli_num_rows($result) == 0)
{
    echo "<p>Ne postoje filmovi u bazi.</p>";
}

else {

echo "<table>";
echo "<tr>" . "<th>" . "Id" . "</th>" . "<th>" . "Naslov" . "</th>"
. "<th>" . "Reziser" . "</th>" . "<th>" . "God Izdavanja" . "</th>" . "<th>" . "Zanr" . "</th>". "<th>" . "Ocena" . "</th>" . "</tr>";

while($red = mysqli_fetch_assoc($result)) {

    echo "<tr>";
    echo "<td>" . $red['id'] . "</td>";
    echo "<td>" . $red['naslov'] . "</td>";
    echo "<td>" . $red['reziser'] . "</td>";
    echo "<td>" . $red['god_izdavanja'] . "</td>";
    echo "<td>" . $red['zanr'] . "</td>";
    echo "<td>" . $red['ocena'] . "</td>";
    echo "</tr>";
}
echo "</table>";
}

echo "<br>";

    
    
    
    
    ?>
</body>
</html>