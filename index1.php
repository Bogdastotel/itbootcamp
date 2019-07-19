
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<?php 
//   $cenaProizvoda = 20;
//   $kupac = 30;
//   $kusur= $kupac - $cenaProizvoda;


//  echo "$kusur";

/* 1. Za unetu cenu robe i kolicinu novca koju je kupac dao, ispitati koliki kusur treba kasirka da vrati kupcu*/

/* 2. Konverzija valute (din=>eur)
    Kurs: 1e: 117.81 */

    // $dinari = 20000;
    // $euri = $dinari/ 117.81;

    // echo "$euri";

    // Konverzija iz eur u dol ako je poznata dinarska protivrednost, 1e = 117.81 , 1$ = 104.86;

    $euri = 250;
    $dinari = $euri * 117.81;
    $dolari = $dinari /104.86;

    echo $euri . " eura = " . $dolari . " dolara.";
    echo "<br>";


    $faren = 86;
    $cels = ($faren - 32) * 5/9 . "C";

    echo $faren. " Faren " ." =" .$cels;
    echo "<br>";

    //za preuzeto vreme u satima i minutima izracunati koliko je minuta proslo od ponoci;

   $sati = 13;
   $minuta = 49;
   $ukupnoMinuta = $sati * 60 + $minuta;
 
    echo "od ponoci je proslo ". $ukupnoMinuta . " minuta.";
    echo "<br>";
 
    /*Druga varijanta: trenutno vreme;
     date(format) - vraca trenutni datum i vreme u ODREDJENOM FORMATU
     format = "G" - 24h- vreme (0 - 23);
     format = "g" - 12h- vreme (0 - 11);
     format = "H" - 24h- vreme (00 - 23);
     format = "h" - 24h- vreme (00 - 11);
     format = "i"; - (00 - 59);
     
     */


    $sati = date("H");
    $minuti = date("i");
    $ukupnoMinuta = $sati * 60 + $minuti;
    echo "$ukupnoMinuta";
    echo "<br>";

    $sati = $sati + $minuti;
    $minuti = $sati - $minuti;
    $sati = $sati - $minuti;




?>
</body>
</html>