<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <style>
        img {
            width: 250px;
            height: auto;
        }
    </style>
</head>

<body>
    <?php

    // 1) Ispisati brojeve od 1 do 20


    for ($i = 1; $i <= 20; $i++) {
        echo "Na redu je broj: $i";
        echo "<br>";
    }

    echo "<br>";

    // 2)Ispisati brojeve od 20 do 1 

    for ($i = 20; $i >= 1; $i--) {
        echo "Na redu je broj: $i";
        echo "<br>";
    }

    echo "<br>";

    // 3) Ispisati parne brojeve od 1 do 20

    for ($i = 1; $i <= 20; $i++) {
        if ($i % 2 == 0) {
            echo $i;
            echo "<br>";
        }
    }
    echo "<br>";

    // ili 

    for ($i = 2; $i <= 20; $i += 2) {
        echo $i;
        echo "<br>";
    }
    echo "<br>";
    // 4) Ispisati dvostruku  vrednost brojeva od 5 do 15

    for ($i = 5; $i <= 15; $i++) {
        echo 2 * $i;
        echo "<br>";
    }

    echo "<br>";

    // 5) Odrediti sumu brojeva od 1 do 100;
    $zbir = 0;
    for ($i = 1; $i <= 100; $i++) {
        $zbir = $zbir + $i;
        echo "<br>";
        echo $zbir;
    }

    echo "<br>";


    // 6) Odrediti sumu brojeva od 1 do n;

    $suma = 0;
    $n = 5;
    for ($i = 1; $i <= $n; $i++) {
        $suma = $suma + $i;
    }
    echo $suma;
    echo "<br>";
    // 7) Odrediti sumu brojeva od n do m

    $suma = 0;
    $n = 5;
    $m = 7;

    for ($i = $n; $i <= $m; $i++) {
        $suma = $suma + $i;
    }
    echo $suma;

    echo "<br>";

    // 8) Odrediti proizvod brojeva od n do m

    $n = 1;
    $m = 5;
    $p = 1;

    for ($i = $n; $i <= $m; $i++) {
        // $p = $p  * $i;
        $p *= $i;
    }
    echo $p;

    echo "<br>";

    // 9) Odrediti sumu kvadrata brojeva od n do m

    $n = 2;
    $m = 5;
    $suma = 0;;

    for ($i = $n; $i <= $m; $i++) {
        $suma += $i * $i;
    }
    echo $suma;
    echo "<br>";


    // 10) Preuzeti sa interneta tri slike i imenovati ih 1, 2 i 3.
    // For petljom u HTML-u ispisati svaku od slicica uz pomoc brojaca(iteratora)

    $slika1 = "<img src='$i.jpg' >";
    $slika2 = "<img src='$i.jpg' >";
    $slika3 = "<img src='$i.jpg' >";

    for ($i = 1; $i <= 3; $i++) {
        echo "<img src='images/$i.jpg'>";
    }



    echo "<br>";
    // 11) Sabrati sve brojeve deljive sa 9 u intervalu od 1 do 30

    $n = 1;
    $m = 30;
    $suma = 0;

    for ($i = $n; $i < $m; $i++) {
        if ($i % 9 == 0) {
            $suma += $i;
            echo "<br>";
        }
    }
    echo $suma;
    echo "<br>";

    // 12) Odrediti proizvod svih brojeva deljivih sa 11 u intervalu od 20 do 100


    $p = 1;
    for ($i = 20; $i < 100; $i++) {
        if ($i % 11 == 0) {
            $p *= $i;
        }
    }
    echo $p;
    echo "<br>";

    //    13) prebrojati koliko ima brojeva deljivih sa 13 u intervalu od 5 do 150;


    $a = 5;
    $b = 150;
    $brojac = 0;

    for ($i = $a; $i <= $b; $i++) {
        if ($i % 13 == 0) {
            $brojac += 1;
        }
    }
    echo $brojac;
    echo "<br>";


    // 14) Ispisati aritmeticku sredinu brojeva od n do m;

    $n = 5;
    $m = 15;
    $suma = 0;
    $brojac = 0;

    for ($i = $n; $i <= $m; $i++) {
        $suma += $i;
        $brojac += 1;
    }

    echo $suma / $brojac;
    echo "<br>";

    //    15) Prebrojati koliko brojeva od n do m je pozitivno, a koliko njih je negativno;

    $n = -10;
    $m = 10;

    $brojacNegativnih = 0;
    $brojacPozitivnih = 0;

    for ($i = $n; $i <= $m; $i++) {
        if ($i < 0) {
            $brojacNegativnih += 1;
        } else {
            $brojacPozitivnih += 1;
        }
    }
    echo $brojacNegativnih;
    echo "<br>";
    echo $brojacPozitivnih;
    echo "<br>";

    //    16) Prebrojati koliko je brojeva od 5 do 50 koji su deljivi sa 3 ili sa 5;

    $n = 5;
    $m = 50;

    $brojacDeljivihSa3ili5 = 0;

    for($i = $n; $i <= $m; $i++) {
        if($i % 3 == 0 || $i % 5 == 0) {
            $brojacDeljivihSa3ili5 +=1;
        }
    }
    echo $brojacDeljivihSa3ili5;
    echo "<br>";

    // 17) Prebrojati i izračunati sumu brojeva od n do m kojima je poslednja cifra 4 i parni su.;

    $n = 10;
    $m = 30;

    $suma = 0;
    $brojac= 0;

    for($i = $n; $i <= $m; $i++) {
        $pos = $i % 10;
        if($pos == 4) {
            $suma += $i;
            $brojac ++;
        }
    }
    echo "Suma je: $suma, broj je $brojac";
    echo "<br>";

    // 18) Ispisati brojeve n do m, koji su deljivi sa a

    $n = 5;
    $m = 10;
    $a = 3;
    

    for($i = $n; $i <= $m; $i ++) {
        if ($i % $a == 0) {
            echo "<p> $i </p>";
        }

    }
    
    echo "<br>";

    // 19) Ispisati brojeve od n do m koji nisu deljivi sa a;

    $n = 5;
    $m = 20;
    $a = 2;
    $brojacDeljivih = 0;

    for($i = $n; $i <= $m; $i ++) {
        if ($i % $a != 0) {
            echo "<p> $i </p>";
        }

    }
    echo "<br>";

    // 20)Odrediti sumu brojeva od n do m koji nisu deljivi brojem a

    $n = 5;
    $m = 10;
    $a = 5;
    $suma = 0;

    for($i = $n; $i <= $m; $i++) {
       if($i % $a != 0) {
           $suma += $i;
       }
        
    }
    echo $suma;
    echo "<br>";

    // 21) Odrediti proizvod brojeva od n do m koji su deljivi brojem a

    $n = 5;
    $m = 10;
    $a = 5;
    $p = 1;

    for($i = $n; $i <= $m; $i++) {
        if($i % $a == 0) {
            $p *= $i;
        }
    }
    echo $p;






    ?>
</body>

</html>