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



    $cars = array("Volvo", "BMW", "Toyota");

    $len = count($cars);

    for ($i = 0; $i < $len; $i++) {
        echo $cars[$i];
        echo "<br>";
    }

    echo "<br>";
    echo "<br>";
    // 1) Ispisati elemente niza od 5 stringova

    $kola = array("Opel", "Nissan", "Toyota", "Audi", "Mercedes");



    for ($i = 0; $i < 5; $i++) {
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

    $niz2 = [2, 4, 6, 8, 10];
    $suma = 0;

    $brojElemenata = count($niz2);
    for ($i = 0; $i < $brojElemenata; $i++) {
        $suma += $niz2[$i];
    }

    echo "Srednja vrednost elemanata celobrojnog niza je: " . $suma / $brojElemenata;

    echo "<br>";


    // 4) Odrediti maksimalnu vrednost u celobrojnom nizu

    $niz3 = [2, 4, 2];

    $max = $niz3[0];

    $Elementi = count($niz3);
    for ($i = 1; $i < $Elementi; $i++) {
        if ($niz3[$i] > $max) { 
            $max = $niz3[$i];
        }
    }

    echo "Maksimalna vrednost celobrojnog niza je: " . $max;
    echo "<br>";

    // 5) Odrediti minimalnu vrednost u celobrojnom nizu

    $niz4 = [10, 9, 8];

    $min = $niz4[0];    

    $Elementi = count($niz4);
    for ($i = 1; $i < $Elementi; $i++) {
        if ($niz4[$i] < $min) {
            $min = $niz4[$i];
        }
    }

    echo "Minimalna vrednost celobrojnog niza je: " . $min;
    echo "<br>";

    //2) sa foreach

    $niz = array(5, -9, 0, 1, 3, 6);
    $suma = 0;
    foreach($niz as $elem) {
        $suma += $elem;
    }

    echo $suma;
    echo "<br>";

    // 6) Odrediti indeks najveceg elementa celobrojnog niza

    $niz = ["1", "2", "3"];
    $maks = $niz[0];
    $indeks = 0;

    for($i = 1; $i < count($niz); $i++) {
        if($niz[$i] > $maks) {
            $maks = $niz[$i];
            $indeks = $i;    
        }
    }
    echo "Indeks najveceg elementa niza je: " . $indeks;
    echo "<br>";

    // 7) Odrediti broj elemenata celobrojnog niza koji su veci od srednje vrednosti

    $niz = ["1", "2", "3", "4", "5", "6"];

    $suma = 0;
    $elementi = count($niz);
    $elementiVeciOdSrednje = 0;
    
    // for($i = 0; $i < $elementi; $i++) {
    //     $suma += $niz[$i];
    //     $srednjaVrednost = $suma / $elementi;
        
    // }

//  ili
    foreach($niz as $vrednost) {
            $suma += $vrednost;
    }

    foreach($niz as $vrednost) {
        if($vrednost > ($suma / $elementi)) {
            $elementiVeciOdSrednje++;
        }        
    }
    
    echo $elementiVeciOdSrednje;
    echo "<br>";


    // 8) Izracunati zbir pozitivnih elemenata celobrojnog niza

    $niz = ["-1", "-2", "-3", "4", "5", "6"];
    $sumaPozitivnih = 0;

   for($i = 0; $i < count($niz); $i++) {
       if($niz[$i] >= 0) {
           $sumaPozitivnih+= $niz[$i];
       }
   }
   echo $sumaPozitivnih;
   echo "<br>";

//    9)Odrediti broj parnih elemenata u celobrojnom nizu.
    
    $niz = ["-1", "2", "8", "5", "7", "6"];
    $brojParnih = 0;

    foreach($niz as $vrednost) {
        if($vrednost % 2 == 0) {
            $brojParnih ++;
        }
    }
    echo $brojParnih;
    echo "<br>";


    // 10) Izračunati sumu elemenata u nizu sa parnim indeksom.
    $niz = ["-1", "2", "8", "5", "7", "6"];
    $suma = 0;

    for($i = 0; $i < count($niz); $i++) 
    {
        if($i % 2 == 0)
        {
            $suma += $niz[$i];
        }
    }
    echo $suma;

    echo "<br>";

    // varijanta suma parnih elemenata u nizu;
    $sumaSaParnimIndeksom = 0;


    $niz = ["-1", "2", "8", "5", "7", "6"];

    foreach($niz as $vrednost) {
        if($vrednost % 2 == 0) {
            $sumaSaParnimIndeksom += $vrednost;
        }
    }
    echo $sumaSaParnimIndeksom;
    echo "<br>";
    

    // 11) Promeniti znak svakom elementu celobrojnog niza.

    $niz = [1, -2, 3, -4, 5, -6];

    for($i = 0; $i < count($niz); $i ++) {
    $niz[$i] = (-1)*$niz[$i];
    echo $niz[$i] . "<br>";
   }
    
    echo "<br>";

    // 12) Promeniti znak svakom neparnom elementu celobrojnog niza sa parnim indeksom.

    $niz = [1, 2, 3, 4, 5, 6];

    for($i = 0; $i < count($niz); $i++) {
        if($i % 2 == 0 && $niz[$i] % 2 != 0) {
            $niz[$i] = (-1)*$niz[$i];
        }
        echo $niz[$i] . "<br>";
    }

   
    echo "<br>";
    

    // 13) Odrediti broj parnih elemenata sa neparnim indeksom.

    $niz = ["1", "2", "3", "4", "5", "6"];
    $brojParnihSaNeparnimIndexom = 0;
    

   for($i = 0; $i < count($niz); $i++) {
    if($i % 2 != 0 && $niz[$i] % 2 == 0 )
    {
        $brojParnihSaNeparnimIndexom++; 
    }
    
   }
   echo $brojParnihSaNeparnimIndexom;
   echo "<br>";
   echo "<br>";


//    14) Ispisati dužinu svakog elementa u nizu stringova.


   $niz = ["Nikola", "Milan", "Ivan", "Ian"];

   foreach($niz as $value) {
       echo strlen($value) . "<br>";
   }

   echo "<br>";

//    15) Odrediti element u nizu stringova sa najvećom dužinom.

$niz = ["Nikola", "Milan", "Ivan", "Ian", "Radomir"];

$najvecaDuzinaStringa = strlen($niz[0]);
$index = 0;

for($i = 1; $i < count($niz); $i++) {
    if(strlen($niz[$i]) > $najvecaDuzinaStringa) {
        $najvecaDuzinaStringa = strlen($niz[$i]);
        $index = $i;
    }
}; 
echo "String sa najvecom duzinom: " . $niz[$index];
echo "<br>";


// 16) Odrediti broj elemenata u nizu stringova čija je dužina veća od prosečne dužine svih stringova u nizu.

$niz = ["Nikola", "Milan", "Ivan", "Ian", "Radomir"];

$zbir = 0;
$n = count($niz);
$brojac = 0;

foreach($niz as $ime) {
    $zbir += strlen($ime);
}
$srDuz = $zbir /$n;

foreach($niz as $ime) {
    if(strlen($ime) > $srDuz) {
        $brojac++;
    }
}
echo $brojac;
echo "<br>";


// 17)Odrediti broj elemenata u nizu stringova koji sadrže slovo 'a'.

$niz = ["Nikola", "Milan", "Ivan", "Ian", "Redomir"];
$broj = 0;

foreach($niz as $ime) {
    if(strpos($ime, "a") != false) {
        $broj++;
    }
}
echo $broj;
echo "<br>";








    









    













    ?>
</body>

</html>