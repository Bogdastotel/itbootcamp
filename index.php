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
    /**1) Zadatak
     * 
    Napisati funkciju suma koja određuje sumu onih brojeva koji su deljivi
    sa 3 i nisu deljivi sa 7, u intervalu od n do m. Sumu vratiti pomoću
    return naredbe i tek onda je ispisati na ekranu. */

    function suma($n, $m)
    {

        $suma = 0;
        for ($i = $n; $i <= $m; $i++) {
            if ($i % 3 == 0 && $i % 7 != 0) {
                $suma += $i;
            }
            
        }
        return $suma;
    }


    $odredjivanjeSume = suma(1, 10);
    echo $odredjivanjeSume;

    /**2) Zadatak
        Napraviti funkciju ispis kojoj se prosleđuju tri parametra – boja na
        engleskom jeziku $color , numerička vrednost za veličinu fonta $font i
        numeričku vrednosti za broj iteracija $n . U funkciji iteriranje vršiti $n
        puta pomoću while petlje i u okviru HTML paragrafa ispisivati redni
        broj iteracije, paragraf obojiti prosleđenom bojom i podesiti mu
        prosleđenu veličinu za veličinu fonta. */




    function ispis($color, $font, $n)
    {
        $i = 1;
        while ($i <= $n) {
            echo "<p style='color: $color; font-size: ${font}px';>Broj iteracije $i</p>";
            echo "<br>";
            $i++;
        }
    }

    ispis("red", 20, 5);



    /**3) Zadatak
        Napraviti funkciju krvnaGrupa koja na osnovu prosleđenog tipa krvne
        grupe A+, 0+, B+ ili AB+ u switch naredbi ispisuje krv koje krvne
        grupe osoba može da primi, a kojim krvnim grupama krv može da da,
        na osnovu sledeće tabele. */

    function krvnaGrupa($unos)
    {

        switch ($unos) {
            case "A+":
                echo "Moze dati krv: A+, AB+ <br>";
                echo "Moze primiti krv: A+, 0+";
                break;
            case "0+":
                echo "Moze dati krv: 0+, A+, B+, AB+ <br>";
                echo "Moze primiti krv: 0+";
                break;
            case "B+":
                echo "Moze dati krv: B+, AB+ <br>";
                echo "Moze primiti krv: B+, 0+";
                break;
            case "AB+":
                echo "Moze dati krv: AB+ <br>";
                echo "Moze primiti krv: Sve krvne grupe";
                break;
            default:
                echo "Niste uneli odgovarajucu krvnu grupu";
                break;
        }
    }



    krvnaGrupa("A+");


    ?>
</body>

</html>