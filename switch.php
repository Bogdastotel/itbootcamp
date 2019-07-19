<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>

<body>
    <?php

    $boja = "narandzasta";

    switch ($boja) {
        case "crvena":
            echo "odabrali ste crvenu boju!";
            break;
        case "plava":
            echo "odabrali ste plavu boju!";
            break;
        case "zelena":
            echo "odabrali ste zelenu boju!";
            break;
        default:
            echo "Niste odabrali crvenu, plavu i zelenu boju!";
    }

    echo "<br>";

    switch (date('D')) {
        case "Mon":
            echo "Ponedeljak!";
            break;
        case "Tue":
            echo "Utorak!";
            break;
        case "Wed":
            echo "Sreda!";
            break;
        case "Thu":
            echo "Cetvrtak!";
            break;
        case "Fri":
            echo "Petak!";
            break;
        default:
            echo "Vikend!";
    }

    echo "<br>";

    $prosecnaOcena = 2;

    switch ($prosecnaOcena) {
        case (5):
            echo "Odlican 5";
            break;
        case (4):
            echo "Vrlo dobar 5";
            break;
        case (3):
            echo "Dobar 3";
            break;
        case (2):
            echo "Dovoljan 2";
            break;
        default:
            echo "Nedovoljan 1";
            break;
    }

    echo "<br>";

    $paranBroj = 6;

    switch ($paranBroj) {
        case (0):
            echo "nula";
            break;
        case (2):
            echo "dva";
            break;
        case (4):
            echo "cetiri";
            break;
        case (6):
            echo "sest";
            break;
        case (8):
            echo "osam";
            break;
        default:
            echo "niste uneli paran broj";
            break;
    }

    echo "<br>";

    $broj1 = 2;
    $broj2 = 4;

    $slovo = "M";

    switch ($slovo) {
        case "m":
        case "M":
            echo $broj1 * $broj2;
            break;
        case "d":
        case "D":
            echo $broj1 / $broj2;
            break;
        case "s":
        case "S":
            echo $broj1 + $broj2;
            break;
        case "o":
        case "O":
            echo $broj1 - $broj2;
            break;
        default:
            echo "Uneti karakter ne odgovara osnovnim matematickim operacijama";
            break;
    }

    echo "<br>";

    $datum = date('N');

    switch ($datum) {
        case 1:
            echo "Do vikenda je preostalo 4 dana";
            break;
        case 2:
            echo "Do vikenda je preostalo 3 dana";
            break;
        case 3:
            echo "Do vikenda je preostalo 2 dana";
            break;
        case 4:
            echo "Do vikenda je preostao 1 dan";
            break;
        case 5:
            echo "vikend je sutra!";
            break;
        default:
            echo "vikend je!";
            break;
    }

    echo "<br>";
    
    $redniBrojMeseca = date('m');

    switch ($redniBrojMeseca) {
        case 1:
            echo "Januar";
            break;
        case 2:
            echo "Februar";
            break;
        case 3:
            echo "Mart";
            break;
        case 4:
            echo "April";
            break;
        case 5:
            echo "Maj!";
            break;
        case 6:
            echo "Jun!";
            break;
        case 7:
            echo "Jul!";
            break;
        case 8:
            echo "Avgust!";
            break;
        case 9:
            echo "Septembar!";
            break;
        case 10:
            echo "Oktobar!";
            break;
        case 11:
            echo "Novembar!";
            break;
        case 12:
            echo "Decembar!";
            break;
    }


    ?>
</body>

</html>