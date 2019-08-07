<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Asocijativni nizovi-Domaci</title>
</head>

<body>
    <?php

    /* Dat je niz elemenata u obliku NazivPredmeta/Ocena koju student ima.
    Ispisati sve predmete i ocene studenta.
    Odrediti najveću ocenu studenta koju ima, i ispisati predmete na kojima je dobio najveću ocenu.
    Odrediti prosečnu ocenu studenta i ispisati predmete na kojima je dobio ocenu veću od prosečne.

     */

    $niz = ["Istorija" => 5, "Geografija" => 5, "Fizika" => 1, "Matematika" => 2];

    // Ispisati sve predmete i ocene studenta.

    foreach ($niz as $predmeti => $predmeti_value) {
        echo "Predmet: " . $predmeti . " -- Ocena: " . $predmeti_value . "<br>";
    }

    echo "<br>";

    // Odrediti najveću ocenu studenta koju ima, i ispisati predmete na kojima je dobio najveću ocenu.

    $predmeti = array_keys($niz);
    $najvecaOcena = $niz[$predmeti[0]];
    for ($i = 0; $i < count($niz); $i++) {
        if ($niz[$predmeti[$i]] > $najvecaOcena) {
            $najvecaOcena = $niz[$predmeti[$i]];
        }
    }

    echo "Najveca ocena je: " . $najvecaOcena . "<br>";

    foreach ($niz as $predmeti => $predmeti_value) {
        if ($predmeti_value == $najvecaOcena) {
            echo "Predmeti sa najvecom ocenom: " . $predmeti . "<br>";
        }
    }
    echo "<br>";
    // Odrediti prosečnu ocenu studenta i ispisati predmete na kojima je dobio ocenu veću od prosečne.

    $sumaOcena = 0;
    
    foreach($niz as $predmeti=>$predmeti_value) {
        $sumaOcena += $predmeti_value;
        $prosecnaOcena = $sumaOcena/count($niz);
    }
    echo "Prosecna ocena studenta je: " . $prosecnaOcena . "<br>";
    foreach($niz as $predmeti=> $predmeti_value) {
        if($predmeti_value > $prosecnaOcena) {
            echo "Predmeti na kojima je student dobio ocenu vecu od prosecne su: " . $predmeti . "<br>";
        }
    }

    
    


    ?>
</body>

</html>