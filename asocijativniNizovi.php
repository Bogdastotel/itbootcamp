<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Asocijativni nizovi</title>
</head>

<body>
    <?php

    // Asocijativni nizovi

    /**1) Dat je niz elemenata u obliku MarkaAuto/ Godiste, 
     * ispisati sve automobile, kao i njihova godista,
     * ispisati automobile koji su stariji od 10 godina
     * ispisati autobmobile cije marka sadrzi string "Opel" a proizvedena su posle 2000. godine */

    $markaAutomobila = ["Audi" => "2012", "Opel" => "2007", "BMW" => "2000", "Merzedes" => "2015"];

    foreach ($markaAutomobila as $x => $x_value) {
        echo "Auto:  $x  - godiste =  $x_value  " . "";
    }
    echo "<br>";

    foreach ($markaAutomobila as $x => $x_value) {
        if ($x_value < date('Y') - 10) {
            echo "Auto:  $x  ->godiste =  $x_value  " . "";
            echo "<br>";
        }
    }

    foreach ($markaAutomobila as $x => $x_value) {
        if (substr($x, 0, 4) === "Opel" && $x_value > "2000") {
            echo "Auto:  $x  ->godiste =  $x_value  " . "";
            echo "<br>";
        }
    }
    echo "<br>";
    /*
    Dat je niz elemenata u obliku ImeOsobe/Visina.
    Ispisati sve osobe sa njihovim visinama.
    Ispisati sve natprosečno visoke osobe.
    Ispisati sve osobe koje imaju maksimalnu visinu.
    Ispisati sve osobe sa visinom ispod proseka, a čije ime počinje na slovo 'V'.
     */

     $niz = 
     [
        "Vladana" => "173",
        "Milan" => "180",
        "Dragan" => "192",
        "Vladimir" => "175",
     ];

    //  Ispisati sve osobe sa njihovim visinama.

    foreach($niz as $x =>$x_value) {
        echo "Osoba: $x visoka $x_value";
        echo "<br>";
    }

    // Ispisati sve natprosečno visoke osobe.

    $suma = 0;

    foreach($niz as $x => $x_value) {
        $suma += $x_value;
    }
    $prosek = $suma / count($niz);

    echo "prosek: " . $prosek;
    echo "<br>";

    foreach($niz as $x => $x_value) {
        if($x_value > $prosek) {
            echo "Osoba koja je visa od proseka: " . $x;
            echo "<br>";
        }
    }

    // Ispisati sve osobe koje imaju maksimalnu visinu.
    $max = -10;
    foreach($niz as $x => $x_value) {
        if($max < $x_value) {
            $max = $x_value;
        }
    }
    echo "Najvisa visina $max";
    echo "<br>";

    foreach($niz as $x => $x_value) {
        if($max == $x_value) {
            echo "Osoba: $x visoka: $x_value";
            break;
        }
    }

    echo "<br>";

    // Ispisati sve osobe sa visinom ispod proseka, a čije ime počinje na slovo 'V'.

    foreach($niz as $x => $x_value) {
        if($x_value < $prosek && substr($x, 0, 1) === "V" ){
            echo "Osobe sa visinom ispod proseka a koje pocinju na slovo V su: " . $x . "<br>";
        }
    }

    echo "<br>";

    /**Dat je niz elemenata u obliku NazivPredmeta/Ocena koju student ima.
    Ispisati sve predmete i ocene studenta.
    Odrediti najveću ocenu studenta koju ima, i ispisati predmete na kojima je dobio najveću ocenu.
    Odrediti prosečnu ocenu studenta i ispisati predmete na kojima je dobio ocenu veću od prosečne. 
     */
    $niz = ["Istorija" => 2, "Geografija"=> 3, "Biologija"=> 4, "Hemija"=> 3, "Fizika"=> 2 ];

    // Ispisati sve predmete i ocene studenta.

    foreach($niz as $predmeti => $predmeti_value) {
        echo "Predmet: " . $predmeti . " => " . " Ocena: " . $predmeti_value . "<br>";
    }

    // Odrediti najveću ocenu studenta koju ima, i ispisati predmete na kojima je dobio najveću ocenu.
    $predmeti = array_keys($niz);
    $najvecaOcena = $niz[$predmeti[0]];
    for($i = 0; $i < count($niz); $i++) {
        if($niz[$predmeti[$i]] > $najvecaOcena) {
            $najvecaOcena = $niz[$predmeti[$i]];
            return $najvecaOcena;
        }
    }
    echo "Najveca ocena: " . $najvecaOcena . "<br>";
    $brojPredmetaSaNajvecomOcenom = 0;

    foreach($niz as $predmeti=>$predmeti_value) {
        if($predmeti_value == $najvecaOcena) {
            $brojPredmetaSaNajvecomOcenom++;
            echo "Predmeti sa najvecom ocenom su: " . $predmeti . "<br>";
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
            echo "Predmedi na kojima je student dobio ocenu vecu od prosecne su: " . $predmeti . "<br>";
        }
    }


   














    ?>
</body>

</html>