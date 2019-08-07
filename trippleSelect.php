<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <style>
        table
{
    width: 100%;
    margin: 0px;
}

th, td {
border: 1px solid black;
}

.pac tr:hover {
    background-color: #ececff;
    cursor: pointer;
}

.pac tr:first-child {
    color: #ffffff;
    background-color: #6c7ae0;
}

.pac tr:last-child {
    background-color: #6c7ae0;
}

.pac td {
    font-family: Poppins-Regular;
    font-size: 15px;
    color: #666666;
    padding-top: 20px;
    padding-bottom: 20px;
    border-bottom: 1px solid #f2f2f2;
}

.pac th {
    font-family: Poppins-Regular;
    font-size: 18px;
    color: black;
    padding: 19px 0 19px 10px;
}

.pac td:nth-child(1), .pac td:nth-child(2) {
    width: 220px;
}

.pac td:nth-child(3), .pac td:nth-child(4) {
    width: 80px;
}
/* za svaki parni red  */
/* .pac tr:nth-child(even) {
    background-color: #abcdab;
} */

/* ili */

.pac tr:nth-child(2n) {
    background-color: #abcdab;
}

/* za svaki neparni red */
/* .pac tr:nth-child(odd) {
    background-color: palevioletred;
} */
/* ili */
.pac tr:nth-child(2n+1) {
    background-color: lightgreen;
}

.pac td:nth-child(3)::after {
    content: " (cm) ";
}

.pac td:nth-child(4)::after {
    content: " (kg) ";
}
    </style>
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

mysqli_set_charset($conn, "utf8");

$sortiranjePacijenataPoVisini = "SELECT ime, prezime, tezina, visina, god_rodjenja FROM pacijenti ORDER BY visina DESC;";

$result = mysqli_query($conn, $sortiranjePacijenataPoVisini);

if(mysqli_num_rows($result) == 0)
{
    echo "<p>Ne postoje pacijenti u bazi.</p>";
}

else {
    echo "<table class='.pac'>";
    
    echo "<tr>" . "<th>" . "Ime" . "</th>" . "<th>" . "Prezime" . "</th>"
     . "<th>" . "Visina" . "</th>" . "<th>" . "Visina" . "</th>" . "<th>" . "Godina rođenja" . "</th>". "</tr>";

    while($red = mysqli_fetch_assoc($result)){

        echo "<tr>";
        echo "<td>" . $red["ime"] . "</td>";
        echo "<td>" . $red["prezime"] . "</td>";
        echo "<td>" . $red["visina"] . "</td>";
        echo "<td>" . $red["tezina"] . "</td>";
        echo "<td>" . $red["god_rodjenja"] . "</td>";
        echo "</tr>";

    }

    echo "</table>";




}



?>
</body>
</html>