<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>zadatak 2 peti test</title>
    <style>
        img {
            width: 250px;
        }
    
    </style>
</head>
<body>
    
<?php 

    // Zadatak1 

    // Napisati funkciju prosecna kojoj se prosleđuje niz plata radnika, a ona vraća prosečnu platu radnika ove firme.

    

    function nizPlata($nizPlata) {
        $suma = 0;
        foreach($nizPlata as $plata) {
            $suma += $plata;
        }
        $prosecnaPlata = $suma / count($nizPlata);
        return $prosecnaPlata;

    }

    $plataRadnikaProsek = nizPlata([10000, 20000, 30000, 40000]);

    echo "Prosecna plata radnika je: " . $plataRadnikaProsek;


    // Zadatak2 

    /*
    Napisati funkciju ispisiNiz kojoj se prosleđuje niz plata radnika, 
    prethodno izračunata prosečna plata i nazivi dve boje na engleskom jeziku. 
    Ova funkcija na ekranu ispisuje sve plate radnika, 
    ali tako da prvom prosleđenom bojom budu obojene sve natprosečne plate radnika,
    a drugom prosleđenom bojom sve ostale plate.

    */

    $nizPlata[] = "";
    

    function ispisiNiz($nizPlata, $plataRadnikaProsek, $color1, $color2) {

        $plataRadnikaProsek = nizPlata($nizPlata);


        foreach($nizPlata as $plata) {
            if($plata > $plataRadnikaProsek) {
                echo "<p style='color: $color1;'>$plata</p>";
            }
            else {
                echo "<p style='color: $color2;'>$plata</p>";
            }
        }
        echo "Prosek plata je: " . $plataRadnikaProsek;
}


$zadatak2 = ispisiNiz([10000, 17800, 22599, 14600, 20000, 30000], nizPlata([10000, 17800, 22599, 14600, 20000, 30000]), "red", "blue");


echo "<br>";
echo $zadatak2;


// Zadatak 3

// Napisati funkciju indeksMinMax
//  kojoj se prosleđuje niz plata radnika i na ekranu ispisuje zbir indeksa minimalne i maksimalne plate


function indeksMinMax($nizPlata) {

    $maks = $nizPlata[0];
    $indeksMaksimalne = 0;

    for($i = 1; $i < count($nizPlata); $i++) {
        if($nizPlata[$i] > $maks) {
            $maks = $nizPlata[$i];
            $indeksMaksimalne = $i;
        }
    }

    echo "Index maksimalne plate je: " . $indeksMaksimalne . "<br>";

    $min = $nizPlata[0];
    $indeksMinimalne = 0;

    for($i = 1; $i < count($nizPlata); $i++) {
        if($nizPlata[$i] < $min) {
            $min = $nizPlata[$i];
            $indeksMinimalne = $i;
        }
    }

    $zbirIndexa = $indeksMaksimalne + $indeksMinimalne;

    echo "Index minimalne plate je: " . $indeksMinimalne . "<br>";

    echo "Zbir Indexa maksimalne i minimalne je: " . $indeksMaksimalne . "+" . $indeksMinimalne . "=" . $zbirIndexa;

}

$minMaks = indeksMinMax([10000,20000,30000,40000,50000]);

echo $minMaks;

echo "<br>";


// Zadatak 4

function slika($nizPlata, $slikaNasmejanog, $slikaTuznog) {

    $plataRadnikaProsek = nizPlata($nizPlata);
    $brojac= 0;
    foreach($nizPlata as $plata) {
        if($plata > $plataRadnikaProsek) {
            $brojac += 1;
        }

    }
    if ($brojac > (count($nizPlata)/2)) {

        echo "<img src='images/{$slikaNasmejanog}.png'>";
    }
    else {
        echo "<img src='images/{$slikaTuznog}.png'>";
    }

}

$slika = slika([10000,20000,30000,40000,50000,60000], "smiley", "sadsmiley");

echo $slika;

?>











</body>
</html>