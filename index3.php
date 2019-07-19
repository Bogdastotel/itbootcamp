<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Domaci 9</title>
</head>

<body>
    <?php

    /*1) Za tri uneta broja ispisati koji od njih je najveći, koji od njih je srednji, a koji od njih je najmanji */


    $a = 1382;
    $b = 100000;
    $c = 10107;

    if ($a > $b && $a > $c) {
        echo "a je najveci od navedena tri boja";
    } else if ($b > $a && $b > $c) {
        echo "b je najveci od navedena tri boja";
    } else {
        echo "c je najveci od navedena tri boja";
    }

    echo "<br>";

    if ($a > $b && $a < $c) {
        echo "a je srednji po velicini od navedena tri boja";
    } else if ($b > $a && $b < $c || $b < $a && $b > $c) {
        echo "b je srednji po velicini od navedena tri boja";
    } else {
        echo "c je srednji po velicini od navedena tri boja";
    }

    echo "<br>";

    if ($a < $b && $a < $c) {
        echo "a je najmanji po velicini od navedena tri boja";
    } else if ($b < $a && $b < $c) {
        echo "b je najmanji po velicini od navedena tri boja";
    } else {
        echo "c je najmanji po velicini od navedena tri boja";
    }

    echo "<br>";
    echo "<br>";

    // 2) Učitati dva cela broja i ispitati da li je veći od njih paran.

    $a = 6.32;
    $b = 5.18;

    $celobrojnoA = (int) $a;
    $celobrojnoB = (int) $b;


    if ($celobrojnoA > $celobrojnoB && $celobrojnoA % 2 == 0) {
        echo "a je vece od b i paran je";
    } else {
        echo "b je vece od a i neparan je";
    }

    echo "<br>";
    echo "<br>";

    /*3) Jedan butik ima radno vreme od 9h do 20h radnim danima, a vikendom od 10h
    do 18h. Preuzeti dan i vreme sa računara i ispitati da li je butik trenutno
    otvoren.*/

    $workingDaysWorkingTimeBeginning = 9;
    $workingDaysWorkingTimeEnding = 20;
    $weekendDaysWorkingTimeBeginning = 10;
    $weekendDaysWorkingTimeEnding = 18;

    $currentDate = date('w');
    $currentTime = date('G');



    if (($currentTime < $workingDaysWorkingTimeBeginning || $currentTime > $workingDaysWorkingTimeEnding) && ($currentDate == 1 || $currentDate == 2 || $currentDate == 3 || $currentDate == 4 || $currentDate == 5)) {
        echo "Butik je zatvoren u ovo vreme radnim danima";
    } else if (($currentTime < $weekendDaysWorkingTimeBeginning || $currentTime > $weekendDaysWorkingTimeEnding) && ($currentDate == 0 || $currentDate == 6)) {
        echo "Butik je zatvoren u ovo vreme vikend danima";
    } else {
        echo "Butik je otvoren";
    }

    /* Na osnovu unete boje na engleskom jeziku obojiti tekst paragrafa u crveno, zeleno ili plavo. Ukoliko nije uneta
        ni jedna od ove tri boje, tekst paragrafa obojiti u žuto. */

        $color = "orange";

        switch ($color) {
            case "red":
            echo "<p style='color:red;'>Lorem  Ipsum</p>";
            break;
            case "green":
            echo "<p style='color:green;'>Lorem  Ipsum</p>";
            break;
            case "blue":
            echo "<p style='color:blue;'>Lorem  Ipsum</p>";
            break;
            default: 
            echo "<p style='color:yellow;'>Lorem  Ipsum</p>";
            break;
        }





    ?>
</body>

</html>