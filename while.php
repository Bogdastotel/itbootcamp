<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <style>
        .blue {
            color: blue;
        }

        .yellow {
            color: yellow;
        }

        .red {
            color: red;
        }
    </style>
</head>

<body>
    <?php

    // ispisati broj od 1-10

    $i = 1;

    while ($i <= 10) {
        echo $i;
        echo "<br>";
        $i++;
    }

    // ili

    $i = 0;
    while ($i < 10) {
        $i++;
        echo $i;
        echo "<br>";
    }

    echo "<br>";

    // 1) Ispisati brojeve od 1 do 20 

    $i = 1;

    while ($i <= 20) {
        echo $i;
        echo "<br>";
        $i++;
    }

    echo "<br>";

    // 2) Ispisati brojeve od 20 do 1

    $i = 20;

    while ($i >= 1) {
        echo $i;
        echo "<br>";
        $i--;
    }
    echo "<br>";

    // 3) Ispisati parne brojeve od 1 do 20
    $i = 1;
    while ($i <= 20) {
        if ($i % 2 == 0) {
            echo $i;
            echo "<br>";
        }
        $i++;
    }

    // 4) Odrediti kolicnik i ostatak pri deljenju brojeva a sa b bez koriscenja operacija / i %;

    $a = 82;
    $b = 8;

    $kol = 0;
    $ost = $a;
    while ($ost >= $b) {
        $ost = $ost - $b;
        $kol++;
    }
    echo "$a = $kol * $b + $ost";
    echo "<br>";



    // ili

    $a = 82;
    $b = 9;
    $zbir = 0;
    $ceoDeo = 0;
    while ($zbir + $b <= $a) {
        $zbir = $zbir + $b;
        $ceoDeo = $ceoDeo + 1;
    }
    $ost = $a - $zbir;
    echo $ost;

    echo "<br>";
    // 5) Sest paragrafa naizmenicno obojiti sa tri razlicite boje

    $paragraf = "lorem Ipsum";
    $paragrafBrojac = 1;

    while ($paragrafBrojac <= 6) {
        if ($paragrafBrojac == 1 || $paragrafBrojac == 4) {
            echo "<p style='color:red;'>$paragraf</p>";
            echo "<br>";
        } else if ($paragrafBrojac == 2 || $paragrafBrojac == 5) {
            echo "<p style='color:green;'>$paragraf</p>";
            echo "<br>";
        } else {
            echo "<p style='color:blue;'>$paragraf</p>";
            echo "<br>";
        }

        $paragrafBrojac++;
    }

    echo "<br>";

    // 2.nacin 

    $text = "Some text bla bla bla...";
    $i = 1;

    while ($i <= 6) {
        if ($i % 3 == 1) {
            echo "<p class='blue'>$text</p>";
        } elseif ($i % 3 == 2) {
            echo "<p class='yellow'>$text</p>";
        } else {
            echo "<p class='red'>$text</p>";
        }
        $i++;
    }


    // 6) Odrediti sumu brojeva od 1 do 100;

    $i = 1;
    $zbir = 0;
    

    while ($i <= 100) {
        $zbir = $zbir + $i;
        $i++;
    }
    echo $zbir;
    echo "<br>";

    // 7) Odrediti sumu brojeva od 1 do n

    $i = 1;
    $n = 1000;
    $zbir = 0;

    while ($i <= $n) {
        $zbir = $zbir + $i;
        $i++;
        
    }
    echo $zbir;
    echo "<br>";

    // 8) Odrediti sumu brojeva od n do m

    $n = 10;
    $m = 100;
    $zbir = 0;

    while ($n <= $m) {
        $zbir = $zbir + $n;
        $n++;

    }
    echo $zbir;
    echo "<br>";
    

    // 9) Odrediti proizvod brojeva od n do m

    $n = 1;
    $m = 10;
    $zbir = 1;

    while ($n <= $m) {
        $zbir = $zbir * $n;
        $n++;

    }
    echo $zbir;
    echo "<br>";


    // 10) Odrediti sumu kvadrata brojeva od n do m

    $n = 2;
    $m = 5;
    $suma = 0;
    $i = $n;

    while($i <= $m) {
        $suma += $i * $i;
        // $suma += pow($i, 2);
        // $suma += $i**2;
        $i++;
        
    }
    echo $suma;
    echo "<br>";

    

    ?>
</body>

</html>