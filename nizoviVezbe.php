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

    echo $brojac . "<br>";

    // 2) Odrediti indeks i vrednost prvog člana niza realnih brojeva koji je najbliži srednjoj vrednosti.

    $niz = [1, 2, 3, 4, 5, 6, 7, 8];

    $suma = 0;
    $index = 0;
    $najblizaVrednost = 0;

    for($i = 0; $i < count($niz); $i++) {
        $suma += $niz[$i];
        
    }
    $srednjaVrednost = $suma/count($niz);

    if(($srednjaVrednost + 1) - $srednjaVrednost <= 1) {
        $najblizaVrednost = $srednjaVrednost + 1;
    }
    else if(($srednjaVrednost ))
















    ?>
</body>

</html>