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
    


    $cars=array("Volvo", "BMW", "Toyota");

    $len = count($cars);

    for($i=0 ; $i < $len; $i++)
    {
        echo $cars[$i];
        echo "<br>";

    }

    echo "<br>";
    echo "<br>";
    // 1) Ispisati elemente niza od 5 stringova

    $kola=array("Opel", "Nissan", "Toyota", "Audi", "Mercedes");

    

    for($i=0 ; $i < 5; $i++)
    {
        echo $kola[$i];
        echo "<br>";

    }

    // 2)Odrediti zbir elemenata celobrojnog niza

    $niz1 = ["1", "2", "3"];

    $suma = 0;

    for ($i = 0; $i < 4; $i++) {
        $suma += $i;
    }

    echo $suma;
    echo "<br>";

    // 3) Odrediti srednju vrednost elemenata celobrojnog niza 

    $niz2 = ["1", "2", "3","4","5","6"];
    $suma = 0;
    $len = count($niz2);

    for ($i = 0; $i <= $len; $i++) 
    {
        $suma += $i;
        
    }
    echo $suma/$len;
    echo "<br>";

    // 4) Odrediti maksimalnu vrednost u celobrojnom nizu

    $niz3 = ["1", "5", "3"];

    if($niz3[0]>$niz3[1] && $niz3[0] > $niz3[2]) {
        echo $niz3[0];
    }
    elseif($niz3[1]>$niz3[0] && $niz3[1] > $niz3[2]) {
        echo $niz3[1];
    }
    elseif($niz3[2]>$niz3[0] && $niz3[2] > $niz3[1]) {
        echo $niz3[2];
    }

    echo "<br>";

    // 5) Odrediti minimalnu vrednost u celobrojnom nizu

    $niz4 = ["1", "5", "3"];

    if($niz4[0]<$niz3[1] && $niz3[0] < $niz3[2]) {
        echo $niz3[0];
    }
    elseif($niz4[1]<$niz3[0] && $niz3[1] < $niz3[2]) {
        echo $niz3[1];
    }
    elseif($niz4[2]<$niz3[0] && $niz3[2] < $niz3[1]) {
        echo $niz3[2];
    }


    




    
    
    
    ?>
</body>
</html>