<html>

<head>
    <style>
        img {
            width: 300px;
        }

        p {
            font-weight: bold;
            font-size: 20px;
        }
    </style>

</head>

<body>

    <form action="">
        <label for="pol">Pol:</label>
        <input type="radio" name="pol">Muski
        <input type="radio" name="pol">Zenski
    </form>


    <?php
    /*Data je slika sa svojom putanjom i imenom.  Prikazati datu sliku na veb stranici*/
    $putanja = "images/code.jpg";
    echo "<img src='$putanja'>";

    /*  
    Za radnika je poznato:
        -broj radnih sati u mesecu
        -cena rada po satu
        -procenat odbijanja na osnovu doprinosa

    Odrediti bruto i neto dohodak radnika.

        */
    $brojSati = 160;
    $cena = 5;
    $procenat = 65;

    $bruto = $brojSati * $cena;
    $neto = $bruto - $bruto * $procenat / 100;
    echo "<p>Bruto zarada: $bruto  &euro;,
        Neto zarada: $neto &euro;</p>";

    /* Broj minuta pretvoriti u sate i minute  */

    $brojMinuta = 63;
    $sati = (int) ($brojMinuta / 60);
    $minuti = $brojMinuta % 60;
    echo "<p>Broj sati: $sati, broj minuta: $minuti </p>";

    /* Ako je vrednost neke robe x dinara odrediti najmanju kolicinu novcanica
    od 500din, 100din,10din i 1din
    kojima se moze platiti data roba. */

    $x = 2399;
    $petsto = (int) ($x / 500);
    $x = $x % 500;
    $sto = (int) ($x / 100);
    $x = $x % 100;
    $deset = (int) ($x / 10);
    $dinar = $x % 10;

    echo "<p>Petsto: $petsto;
    Sto: $sto,
    Deset: $deset,
    Dinar: $dinar</p>";

    echo "<br>";


    $a = 5;
    $b = 6;
    if ($a == $b) {
        echo "a i b su jednaki";
    } else {
        echo "Nejednako";
    }
    echo "<br>";



    $a = 3;
    $b = 4;

    // 1)

    if ($a > $b) {
        echo "a je vece od b";
    } else {
        echo "a je manje od b";
    }

    // 2)  

    $temp = 20;

    if ($temp >= 0) {
        echo "temperatura je u plusu .";
    } else {
        echo "temperatura je u minusu";
    }

    echo "<br>";

    // 3) 
    $muski = "m";


    if ($muski == "z") {
        echo "<img src='images/male.png' >";
    } else {
        echo "<img src='images/female.png'>";
    }

    echo "<br>";

    // 4) 
    $date = date("A");

    if ($date == "PM") {
        echo "popodne je";
    } else {
        echo "jutro je";
    }

    echo "<br>";

    // 5) 

    $godinaRodjenja = 1994;
    $trenGodina = date('Y');



    echo $trenGodina;
    echo "<br>";

    if ($trenGodina - $godinaRodjenja < 18) {
        echo "lice je maloletno";
    } else {
        echo "lice je punoletno";
    }
    echo "<br>";

    // 6)
    $a = 5;
    $b = -3;
    $c = 12;


    $max = $a;
    if ($max < $b) {
        $max = $b;
    }

    if ($max < $c) {
        $max = $c;
    }

    echo $max;

    echo "<br>";


    // 7) 

    $poeni = 87;

    if ($poeni < 50) {
        echo "Student je pao ispit";
    } else if ($poeni >= 50 and $poeni < 60) {
        echo "ocena 6";
    } else if ($poeni >= 60  and $poeni < 70) {
        echo "ocena 7";
    } else if ($poeni >= 70  and $poeni < 80) {
        echo "ocena 8";
    } else if ($poeni >= 80  and $poeni < 90) {
        echo "ocena 9";
    } else {
        echo "ocena 10";
    }

    // 8) 

    $dan = date('N');

    if ($dan <= 5) {
        echo "<p>Radni dan</P>";
    } else {
        echo "<p>Vikend</p>";
    }

    //  9) dan ili je u pitanju v ikend.
    //      Za vreme preuzeto sa računara ispisati dobro jutro za vreme manje od 12 sati ujutru, 
    // dobar dan za vreme manje od 18 sati popodne i u ostal im  slučajevima is pisati dobro veče


        $vreme= date("G");

    if ($vreme < 12) {
        echo "dobro jutro";
    } else if ($vreme <18) {
        echo "dobar dan";
    } else {
        echo "dobro vece";
    }

    echo "<br>";

    // 10) Uporediti dva uneta datuma i ispisati koji od njih je raniji.

    $dan1 = 1;
    $mesec1 = 7;
    $god1= 2019;
    $dan2 = 1;
    $mesec2 = 7;
    $god2 = 2019;

    if ($god1 < $god2) {
        echo "prva godina je ranija";
    } else if ($god1 == $god2 and $mesec1 < $mesec2) {
        echo "godina je ista ali je mesec iz prvog primera raniji";
    } else if ($god1 == $god2 and $mesec1 == $mesec2 and $dan1 < $dan2) {
        echo "godine i meseci su isti ali je dan iz prvog primera raniji";
    }

    if ($god1 > $god2) {
        echo "druga godina je ranija";
    } else if ($god1 == $god2 and $mesec1 > $mesec2) {
        echo "godina je ista ali je mesec iz drugog primera raniji";
    } else if ($god1 == $god2 and $mesec1 == $mesec2 and $dan1 > $dan2) {
        echo "godine i meseci su isti ali je dan iz drugog primera raniji";
    } else {
        echo "nijedan datum nije raniji, poklapaju se u potpunosti";
    }

    echo "<br>";
    // 11)  Radno vreme jedne programerske firme je od 9h do 17h. Preuzeti vreme sa računara i ispitati da li u to vreme firma radi ili ne radi.

    $vreme = date('G');
    if($vreme < 9) {
        echo "firma ne radi";
    }
    else if ($vreme < 17) {
        echo "firma radi";
    }
    else {
        echo "firma ne radi";
    }

    echo "<br>";


    // 12)  Za unet početak i kraj radnog vremena dva lekara ispisati DA ukoliko se njihove smene preklapaju,
    //  u suprotnom ispisati NE.


    $pocetak1 = 7;
    $pocetak2 =7;
    $kraj1 = 17;
    $kraj2 = 17; 

   if ($pocetak1 < $pocetak2) {
       
   }

   echo "<br>";

    // 13) Za uneti broj ispitati da li je paran ili nije.

    $value = 9;
    if($value%2){
  echo 'vrednost je neparna';
    }else{
  echo 'vrednost je parna';
    }

    echo "<br>";
   
    // 14) za uneti broj ispisati da li je deljiv sa 3 ili ne.

    $broj = 6;

    if ($broj%3 != 0) {
        $broj += 3 -($broj %3);
    }

    echo "broj je deljiv sa 3";
    
    echo "<br>";

    // 15)Za dva uneta broja, od većeg učitanog broja oduzeti manji i rezultat ispisati na ekranu.

    $a = 7;
    $b = -5;

    if ($a > $b) {
        $rez = $a - $b;
    }
    else {
        $rez = $b - $a;
    }
    echo $rez;

    echo "<br>";

    // 16) Za uneti broj ispitati da li je on manji ili veći od nule. Ukoliko je manji ili jednak nuli ispisati njegov prethodnik, a ukoliko je veći od nule ispisati njegov sledbenik.

    $broj = 6;
    if ($broj <=0) {
        $broj = $broj -1;
    }
    else {
        $broj= $broj +1;
    }
    echo $broj;


    // 18) Za učitani broj ispitati da li je ceo.

    $broj = 7.2;

    if ((int)($broj)== $broj) {
        echo "ceo";
    }
    else {
        echo "decimalan";
    }
    echo "<br>";

    // 20)  Učitati dva cela broja i ispitati da li je veći od njih paran. 

    $broj1 = 7;
    $broj2 = 6;

    // 21)

    $a = 2;
    $b = 3;
    $c = 4;

    if ($a >$c and $a> $c) {
        echo "Maks je $a";
    }
    else if ($b>$a and $b>$c) {
        echo "Maks je $b";
    }
    else {
        echo "Maks je $c";
    }

    echo "<br>";

    // 22) 

    $temp = 22;

    if ($temp < -15 or $temp > 40) {
        echo "Exktremna";
    }
    else {
        echo "Nije ekstremna";
    }

    echo "<br>";
    // 12) Za unet početak i kraj radnog vremena dva lekara ispisati DA ukoliko se njihove smene preklapaju, u suprotnom ispisati NE.

    $pocetak1 = 12;
    $pocetak2 = 9;
    $kraj1 = 13;
    $kraj2 = 10;

    if ($pocetak1 >= $pocetak2 || $kraj1 >= $pocetak2 || $kraj2 <= $kraj1 ) {
        echo "DA";
    }
    else if ($pocetak1 > $pocetak2 && $kraj1 > $kraj2) {
        echo "NE";
    }
    else if ($pocetak1 < $pocetak2 && $kraj1 < $pocetak2 ) {
        echo "NE";
    }
    else if ($pocetak2 < $pocetak1 && $kraj2 <$pocetak1) {
        echo "NE";
    }


    else {
        echo "NE";
    }










    ?>
</body>

</html>