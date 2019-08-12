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
$username = "root";
$password = "";
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
$sql = "SELECT * FROM `filmovi` WHERE ocena = (SELECT MAX(ocena) from `filmovi`) ORDER BY naslov ASC";


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

$sql = "SELECT DISTINCT zanr FROM `filmovi` ORDER BY zanr";


// stampanje tabele 

$result = mysqli_query($conn, $sql);
while($red = mysqli_fetch_assoc($result)) {
    $zanr = $red["zanr"];
     
    echo "<p> Filmovi koji imaju zanr: $zanr</p>";
    $sql1 = "SELECT * FROM `filmovi` WHERE zanr = '$zanr' ORDER BY naslov;";
    $result1 = mysqli_query($conn, $sql1);
echo "<table class='pac'>";
    
echo "<tr>" . "<th>" . "id" . "</th>" . "<th>" . "naslov" . "</th>"
 . "<th>" . "reziser" . "</th>" . "<th>" . "god_izdavanja" . "</th>" . "<th>" . "zanr" . "</th>".  "<th>" . "ocena" . "</th>" ."</tr>"; 
while($red1 = mysqli_fetch_assoc($result1))
{
    // Red pisemo u listu
    echo "<tr>";
    echo "<td>" . $red1["id"] . "</td>";
    echo "<td>" . $red1["naslov"] . "</td>";
    echo "<td>" . $red1["reziser"] . "</td>";
    echo "<td>" . $red1["god_izdavanja"] . "</td>";
    echo "<td>" . $red1["zanr"] . "</td>";
    echo "<td>" . $red1["ocena"] . "</td>";
    echo "</tr>";
    

}
echo "</table>";
}



echo "<br>";

    
    
    
    
    ?>
</body>
</html>