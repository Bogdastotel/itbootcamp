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

    // 7)Napraviti funkciju kojoj se prosleđuje ceo broj a ona ispisuje tekst koji ima prosleđenu veličinu fonta.


    function velicinaFonta($fontSize)

    {
        echo "<p style='font-size: $fontSize" . "px;'>Lorem ipsum dolor sit amet</p>";
    }


    velicinaFonta(20);
    echo "<br>";

    // 8)Napraviti funkciju koja pet puta ispisuje istu rečenicu, a veličina fonta rečenice treba da bude jednaka vrednosti iteratora. 

    function funkcijaRandom($fontVelicina)
    {
        for ($i = 1; $i <= 5; $i++) {
            echo "<p style='font-size: ${fontVelicina}px;'>Lorem ipsum dolor sit amet</p>";
        }
    }

    // ili 'font-size: $fontVelicina"."px;'
    funkcijaRandom(40);
    echo "<br>";

    /*9)Napisati program koji sadrži funkciju sedmiDan koja za uneti broj n ispisuje n-ti dan u nedjelji 
    (npr. za 1 se ispisuje „Ponedjeljak“, za 7 ispisuje “Nedelja”, a za 8 opet “Ponedeljak”).
    Pitanje: Kako bismo realizovali ovaj zadatak da se tražio n-ti mesec u godini?*/


    function sedmiDan($unos)
    {
        switch ($unos) {
            case ($unos > 30):
                echo "Novi mesec";
                break;
            case ($unos % 7 == 1):

                echo "Ponedeljak";
                break;
            case ($unos % 7 == 2):

                echo "Utorak";
                break;
            case ($unos % 7 == 3):

                echo "Sreda";
                break;
            case ($unos % 7 == 4):

                echo "Cetvrtak";
                break;
            case ($unos % 7 == 5):

                echo "Petak";
                break;
            case ($unos % 7 == 6):

                echo "Subota";
                break;
            case ($unos % 7 == 0):

                echo "Nedelja";
                break;
        }
    }

    sedmiDan(4);
    echo "<br>";


    function mesec_u_godini($mesec)
    {
        switch ($mesec) {
            case ($mesec % 12 == 1):
                echo "Januar";
                break;
            case ($mesec % 12 == 2):
                echo "Februar";
                break;
            case ($mesec % 12 == 3):
                echo "Mart";
                break;
            case ($mesec % 12 == 4):
                echo "April";
                break;
            case ($mesec % 12 == 5):
                echo "Maj";
                break;
            case ($mesec % 12 == 6):
                echo "Jun";
                break;
            case ($mesec % 12 == 7):
                echo "Jul";
                break;
            case ($mesec % 12 == 8):
                echo "Avgust";
                break;
            case ($mesec % 12 == 9):
                echo "Septembar";
                break;
            case ($mesec % 12 == 10):
                echo "Oktobar";
                break;
            case ($mesec % 12 == 11):
                echo "Novembar";
                break;
            case ($mesec % 12 == 0):
                echo "Decembar";
                break;
        }
    }

    mesec_u_godini(24);
    echo "<br>";

    /* 10) Napraviti funkciju deljivSaTri koja se koristi u ispisivanju brojeva koji su deljivi sa tri u intervalu od n do m.
    Prebrojati koliko ima ovakvih brojeva od n do m.
    */

    function deljivSaTri($interval1, $interval2)
    {
        $brojac = 0;
        for ($i = $interval1; $i <= $interval2; $i++) {
            if ($i % 3 == 0) {
                echo "$i <br>";
                
                $brojac++;
                
            }
        }
        echo $brojac;

    }

    deljivSaTri(1, 10);
    echo "<br>";
    echo "<br>";

    /*Napisati funkciju koja ispisuje brojeve u intervalu od n do m koji su deljivi sa tačno dva od brojeva 2, 3, 5 i 7.*/

    $n = 5;
    $m = 15;

    for($i = $n; $i <= $m; $i++) {
        $br = 0;
        if($i % 2 == 0) {
            $br++;
        }
        if($i % 3 == 0) {
            $br++;
        }
        if($i % 5 == 0) {
            $br++;
        }
        if($i % 7 == 0) {
            $br++;
        }
        if($br == 2) {
            echo $i;
            echo "<br>";
        }
        
    }
    echo "<br>";

    function DeljivDvaOdCetiri($n, $m) {
        $deljivi = 0;
        for($i = $n; $i <= $m; $i++) {
            if (($i % 2 == 0 && $i % 3 == 0) || ($i % 2 == 0 && $i % 5 == 0) || ($i % 2 == 0 && $i % 7 == 0)) {
                echo "$i <br>";
                $deljivi+= 1;
            }
            else if (($i % 3 == 0 && $i % 5 == 0) || ($i % 3 == 0 && $i % 7 == 0) || ($i % 3 == 0 && $i % 2 == 0)) {
                echo "$i <br>";
                $deljivi+= 1;
            }
            else if (($i % 5 == 0 && $i % 7 == 0) || ($i % 5 == 0 && $i % 3 == 0) || ($i % 5 == 0 && $i % 2 == 0)) {
                echo "$i <br>";
                $deljivi+= 1;
            }
            else if (($i % 7 == 0 && $i % 2 == 0) || ($i % 7 == 0 && $i % 3 == 0) || ($i % 7 == 0 && $i % 5 == 0)) {
                echo "$i <br>";
                $deljivi+= 1;
            }

            

        }
        echo "<br>";
        echo "broj deljivih: $deljivi";
        

    }
    DeljivDvaOdCetiri(5,15);

    ?>
</body>

</html>