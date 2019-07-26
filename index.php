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


    // 1) Odrediti koliko elemenata u nizu celih brojeva ima maksimalnu vrednost.

    $niz = [1, 2, 3, 4, 5, 7, 8];
    $maksimalnaVrednost = $niz[0];
    $brojac = 0;


    for ($i = 1; $i < count($niz); $i++) {
        if ($niz[$i] > $maksimalnaVrednost) {
            $maksimalnaVrednost = $niz[$i];
        }
    }
    foreach ($niz as $vrednost) {
        if ($vrednost == $maksimalnaVrednost) {
            $brojac++;
        }
    }

    echo "Elementi u nizu koji imaju maksimalnu vrednost: " . $brojac . "<br>";

    // 2) Odrediti indeks i vrednost prvog člana niza realnih brojeva koji je najbliži srednjoj vrednosti.

    $niz = [-1,2,4,7,-5,9];

    $suma = 0;
    $index = 0;
    $najblizaVrednost = $niz[0];
    
    for($i = 0; $i < count($niz); $i++) {
        $suma += $niz[$i];   
    }
    $srednjaVrednost = $suma/count($niz);

    echo "Srednja vrednost je: " . $srednjaVrednost;
    echo "<br>";
    for($i = 1; $i < count($niz); $i++) {
        if((abs($niz[$i] - $srednjaVrednost) < abs($najblizaVrednost - $srednjaVrednost)) ) {
            $najblizaVrednost = $niz[$i];
            $index = $i;
        }
    }
    
    echo "Index najblize vrednosti srednjoj vrednosti je: " . $index;
    echo "<br>";
    echo "Najbliza vrednost je: " . $najblizaVrednost;
    echo "<br>";

    function stampajNiz($niz)
    {
        foreach ($niz as $elem) {
            echo $elem . " ";
        }
        echo "<br>";
    }

    //19.

    $a = array(1,-1, 2, -2, 3, -3);
    $b = array();
    foreach($a as $elem) {
        if($elem > 0) {
            $b[] = $elem;
        }
    }

    stampajNiz($b);
    echo "<br>";

    // 21.

    $a = array(5, 8, 9, -2);
    $b = array(7, 0, 1, 2);
    $c = array();

    for ($i = 0; $i < count($a); $i++) {
        $c[$i] = $a[$i] * $b[$i];
    }

    stampajNiz($c);
    echo "<br>";













    ?>
</body>

</html>