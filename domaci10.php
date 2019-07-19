<?php
        /*1. Zadatak
        Odrediti proizvod brojeva od 1 do 20, a potom od njega oduzeti zbir brojeva od 1 do 30.
        a)Koristeći while petlju
        b)Koristeći for petlju */
        

        // a)

        $a= 1;
        $b= 20;

        $p = 1;
        $i = $a;
        while($i < $b) {
            $p = $p * $i;
            $i++;

        }
        echo $p;
        echo "<br>";


        $i= 1;
        $suma = 0;

        while($i <= 30) {
            $suma= $suma + $i;
            $i++;
        } 
        echo $suma;
        echo "<br>";

        echo $p -$suma;
        echo "<br>";
        echo "<br>";

        // b)

        $a = 1;
        $p1 = 1;

        for ($i = $a; $i < 20 ; $i++ ) {
            $p1 *= $i;
        }
        echo $p1;
        echo "<br>";

        $i = 1;
        $zbir = 0;

        for ($i=1; $i <= 30; $i++) {
            $zbir += $i;
        }
        echo $zbir;
        echo "<br>";


        echo $p - $zbir;
        echo "<br>";


        /*)2. Zadatak
         Odrediti sumu kubova brojeva od n do m.
         Koristeći while petlju
         Koristeći for petlju */

        

        //  a)

        $n = 2;
        $m = 5;

        
