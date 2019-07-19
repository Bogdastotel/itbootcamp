<!DOCTYPE html>


<head>

    <title>funkcije</title>
</head>

<body>


    <?php

    function mojaFunkcija($broj1, $broj2)
    {
        echo $broj1 + $broj2;
    }
    mojaFunkcija(2, 3);

    echo "<br>";

    function name($ime)
    {

        echo "korisnik: $ime";
    }
    function lastName($prezime)
    {
        echo "korisnik : $prezime";
    }



    function it($i)
    {
        echo "Broj $i";
    }
    echo "<br>";



    for ($i = 1; $i <= 5; $i++) {
        name("Nikola");
        echo "<br>";
    }
    for ($i = 1; $i <= 10; $i++) {
        lastName("Bogdanovic");
        echo "<br>";
    }


    function zbir($a, $b)
    {
        $rez = $a + $b;
        return $rez;
    }

    $rezultat = zbir(5, 17);

    echo $rezultat;
    echo "<br>";

    $rezultat = zbir(zbir(2, 3), zbir(3, 4));
    echo $rezultat;
    echo "<br>";


    // Zadaci za  vezbu 

    // 1) Napisati funkciju pozdrav kojoj se prosleđuje ime i prezime, a funkcija ispisuje pozdrav.
    //  Na primer za uneto ime Jelena i prezime Matejić, funkcija ispisuje Zdravo Jelena Matejić.

    function pozdrav($ime, $prezime)
    {
        echo "Zdravo: $ime $prezime";
    }

    pozdrav("Nikola", "Bogdanovic");
    echo "<br>";

    // 2) Napisati funkciju zbir koja računa zbir dva realna broja.
    // Šta bi trebalo izmeniti da bi se dobila razlika, proizvod ili količnik dva broja.

    function zbir1($broj1, $broj2)
    {
        echo $broj1 + $broj2;
    }
    zbir1(2, 3);
    echo "<br>";

    // 3) Napisati funkciju neparan koja za uneti ceo broj n vraća tačno ukoliko je neparan ili netačno ukoliko nije neparan.

    $broj = 2;
    function neparan($broj)
    {
        if ($broj % 2 == 1) {
            echo "Neparan: tacno";
        } else {
            echo "Neparan: netacno";
        }
    }

    neparan(2);
    echo "<br>";
    // 4) Napisati funkciju maks2 koja vraća veći od dva prosleđena realna broja.
    //  Zatim napisati funkciju maks4 koja vraća najveći od četiri prosleđena realna broja. 

    function maks2($a, $b)
    {
        if ($a > $b) {
            echo $a;
        } elseif ($b > $a) {
            echo $b;
        } else {
            echo "brojevi su jednaki";
        }
    }

    maks2(4, 2);
    echo "<br>";

    // function maks4($a, $b, $c, $d)
    // {
    //     if ($a > $b && $a > $c && $a > $d) {
    //         echo "a je najvece i iznosi: $a";
    //     } else if ($b > $a && $b > $c && $b > $d) {
    //         echo "b je najvece i iznosi: $b";
    //     } else if ($c > $a && $c > $b && $c > $d) {
    //         echo "c je najvece i iznosi: $c";
    //     } else if ($d > $a && $d > $b && $d > $c) {
    //         echo "d je najvece i iznosi: $d";
    //     } else {
    //         echo "brojevi su jednaki";
    //     }
    // }

    // maks4(1, 2, 3, 4);
    // echo "<br>";

    // ili

    function maksCetiri($a, $b, $c, $d) {
        $maks1 = maks2($a, $b);
        $maksDva = maks2($c, $d);
        $maks = maks2($maks1, $maksDva);
        return $maks;
    }
   

    maksCetiri(1,-3,-5,7);
    
    echo "<br>";    

    // 5) Napraviti funkciju koja prikazuje sliku za prosledjenu adresu slike.

    function slika($adresaSlike)
    {
        if ($adresaSlike == "<img src='images/1.jpg'>") {
            echo "<img src='images/1.jpg'>";
        } else if ($adresaSlike == "<img src='images/2.jpg'>") {
            echo "<img src='images/2.jpg'>";
        } else if ($adresaSlike == "<img src='images/3.jpg'>") {
            echo "<img src='images/3.jpg'>";
        } else {
            echo "You did not enter the picture address";
        }
    }

    slika("<img src='images/3.jpg'>");
    echo "<br>";



    // 6)Napraviti funkciju koja za unetu boju na engleskom jeziku boji tekst paragrafa u tu boju.

function boja($color) {
    switch ($color) {
        case "Red":
        case "red":
        echo "<p style='color: red;'>Lorem Ipsum</p>";
        break;
        case "Blue":
        case "blue":
        echo "<p style='color: blue;'>Lorem Ipsum</p>";
        break;
        case "Green":
        case "green":
        echo "<p style='color: green;'>Lorem Ipsum</p>";
        break;
        default:
        echo "You need to choose between red, blue and green color";
        break;
    }
}

boja("Blue");
echo "<br>";

// ili

function color($boja) {
    echo "<p style='color: $boja';>Bogdanovic</p>";
}

color("orange");
echo "<br>";

// 7) Napraviti funkciju kojoj se prosleđuje ceo broj a ona ispisuje tekst koji ima prosleđenu veličinu fonta.










    ?>

</body>

</html>