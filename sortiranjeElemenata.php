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
    
    $brojevi = [15, -5, 10]; 

    asort($brojevi);
    foreach($brojevi as $s) {
        echo $s . "<br>";
    }
   
    echo "<br>";

   
    
    $brojevi = [1, 2, 3]; 
    rsort($brojevi);
    foreach($brojevi as $s) {
        echo $s . "<br>";
    }
    
    
    echo "<br>";
    
    $brojevi = ["Milos" => 1, "Dragan" => 5,"Vasilije" => 10]; 
    asort($brojevi);
    foreach($brojevi as $s) {
        echo $s . "<br>";
    }
    
    echo "<br>";

    $brojevi = ["Milos" => 4, "Dragan" => 5,"Vasilije" => 12]; 
    ksort($brojevi);
    foreach($brojevi as $s) {
        echo $s . "<br>";
    }
    
    echo "<br>";
    
    $brojevi = ["Milos" => 4, "Dragan" => 5,"Vasilije" => 12]; 
    arsort($brojevi);
    foreach($brojevi as $s) {
        echo $s . "<br>";
    }

    echo "<br>";
    
    $brojevi = ["Milos" => 4, "Dragan" => 5,"Vasilije" => 12]; 
    krsort($brojevi);
    foreach($brojevi as $s) {
        echo $s . "<br>";
    }
    echo "<br>";
    /*
    Napraviti asocijativni niz boja gde ce kljuc biti heksadecimalna vrednost boje, a vrednost odgovarajuci naziv boje.
    Na primer za crvenu boju kljuc ce biti #FF0000 a vrednost ce biti red. 
    Ovako zadat niz sortirati: 
    -rastuce u odnosu na hexadecimalni kod
    -opadajuce u odnosu na hexdec kod
    -rastuce u odnosu na naziv
    -opadajuce u odnosu na naziv
    */


    $niz = ["red" => "FF0000", "green" => "00FF00", "blue" => "0000FF"];

    asort($niz);

    foreach($niz as $boja => $boja_value) {
        echo $boja_value . "<br>";
    }

    echo "<br>";
    
    $niz = ["red" => "FF0000", "green" => "00FF00", "blue" => "0000FF"];
    rsort($niz);
    foreach($niz as $boja => $boja_value) {
        echo $boja_value . "<br>";
    }
    echo "<br>";

    $niz = ["red" => "FF0000", "green" => "00FF00", "blue" => "0000FF"];
    ksort($niz);
    foreach($niz as $boja => $boja_value) {
        echo $boja_value . "<br>";
    }
    echo "<br>";

    $niz = ["red" => "FF0000", "green" => "00FF00", "blue" => "0000FF"];
    krsort($niz);
    foreach($niz as $boja => $boja_value) {
        echo $boja_value . "<br>";
    }
    echo "<br>";



    



    
    
    
    
    ?>
</body>
</html>