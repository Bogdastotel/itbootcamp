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

// 3) Odrediti srednju vrednost elemenata celobrojnog niza 

    $niz2 = [2, 4, 6, 8, 10];
    $suma = 0;
    
    $brojElemenata = count($niz2);
    for($i = 0; $i < $brojElemenata; $i++) {
        $suma += $niz2[$i];
    }

    echo "Srednja vrednost elemanata celobrojnog niza je: " . $suma/$brojElemenata;
    
    echo "<br>";


    // 4) Odrediti maksimalnu vrednost u celobrojnom nizu

    $niz3 = [2, 2, 2];

    $max = $niz3[0];

    $Elementi = count($niz3);
    for($i = 0; $i < $Elementi; $i++) {
        if ($niz3[$i] > $max) {
            $max = $niz3[$i];
        }
        
    }

    echo "Maksimalna vrednost celobrojnog niza je: " . $max;
    echo "<br>";

    // 5) Odrediti minimalnu vrednost u celobrojnom nizu

    $niz4 = [10, 9, 8];

    $min = $niz4[0];

    $Elementi = count($niz4);
    for($i = 0; $i < $Elementi; $i++) {
        if ($niz4[$i] < $min) {
            $min = $niz4[$i];
        }
    }

    echo "Minimalna vrednost celobrojnog niza je: " . $min;
    echo "<br>";
    ?>

</body>
</html>