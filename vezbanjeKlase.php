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


// 1)
// Kreirati klasu Boja koja ima talasnu dužinu u nm, zasićenje i intenzitet.
// Napraviti konstruktor kome se prosleđuju tri vrednosti koje treba postaviti.
// Napraviti odgovarajuće getere i setere.
// Napraviti funkciju ispitajSličnost koja za dve prosleđene boje vraća true ukoliko su te dve boje iste, 
// u suprotnom vraća false.
// Napraviti funkciju srednjaTalasnaDuzina koja za niz boja vraća vrednost srednje talasne dužine.

        class Boja {
            private $talasnaDuzina;
            private $zasicenje;
            private $intenzitet;

            public function __construct($talasnaDuzina, $zasicenje, $intenzitet)
            {
               $this->setTalasnaDuzina($talasnaDuzina);
               $this->setZasicenje($zasicenje);
               $this->setIntenzitet($intenzitet);
            }

            public function setTalasnaDuzina($talasnaDuzina) {
                $this->talasnaDuzina = $talasnaDuzina;
            }

            public function setZasicenje($zasicenje) {
                $this->zasicenje = $zasicenje;
            }

            public function setIntenzitet($intenzitet) {
                $this->intenzitet = $intenzitet;
            }

            public function getTalasnaDuzina() {
                return $this->talasnaDuzina;
            }
            public function getZasicenje() {
                return $this->zasicenje;
            }
            public function getIntenzitet() {
                return $this->intenzitet;
            }

         

        }
        
        $boja1 = new Boja(10, 40, 29);
        $boja2 = new Boja(11, 27, 27);
        $boja3 = new Boja(14, 32, 23);
        $boja4 = new Boja(10, 18, 24);


        $nizBoja = array($boja1,$boja2,$boja3, $boja4);
    
        function ispitajSlicnost($boja1, $boja2) {
            if($boja1 == $boja2) {
                return true;
            }
            else {
                return false;
            }
        }

       if (ispitajSlicnost($boja1, $boja2)) {
           echo "Boje se poklapaju";
       }
       else {
           echo "Boje se ne poklapaju";
       }

       echo "<hr>";

       function srednjaTalasnaDuzina($nizBoja) {
    
        $suma = 0;
        $brojac = 0;
        foreach($nizBoja as $boja) {
            $suma += $boja->getTalasnaDuzina();
            $brojac++;
        }
        return $suma/$brojac;
       }

    echo srednjaTalasnaDuzina($nizBoja);
    echo "<hr>";
    //    2)
    
    class Datum {
        private $dan;
        private $mesec;
        private $godina;

        public function __construct($dan, $mesec, $godina)
            {
               $this->setDan($dan);
               $this->setMesec($mesec);
               $this->setGodina($godina);
            }

            public function setDan($dan) {
                $this->dan = $dan;
            }

            public function setMesec($mesec) {
                $this->mesec = $mesec;
            }

            public function setGodina($godina) {
                $this->godina = $godina;
            }

            public function getDan() {
                return $this->dan;
            }
            public function getMesec() {
                return $this->mesec;
            }
            public function getGodina() {
                return $this->godina;
            }


    }
    
    $datum1 = new Datum(1,3,2017);
    $datum2 = new Datum(2,3,2017);
    


    // $nizDatuma = array($datum1, $datum2);

    function ranijiDatum($datum1, $datum2) {
        if ($datum1->getGodina() < $datum2->getGodina()) {
            echo "datum 1 raniji je od datuma 2";
        }
        else if ($datum1->getGodina() > $datum2->getGodina() ) {
            echo "datum 2 je raniji od datuma 1";
        }
        else if ( $datum1->getMesec() < $datum2->getMesec() ) {
            echo "datum 1 je raniji od datuma 2 (godine se poklapaju ali je mesec prvog datuma raniji od meseca drugog datuma)";
        }
        else if ( $datum1->getMesec() > $datum2->getMesec() ) {
            echo "datum 2 je raniji od datuma 1 (godine se poklapaju ali je mesec drugog datuma raniji od meseca prvog datuma)";
        }
        else if ( $datum1->getMesec() == $datum2->getMesec()
        && $datum1->getDan() < $datum2->getDan()) {
            echo "datum 1 je raniji od datuma 2(poklapaju se meseci i godine ali je dan prvog datuma raniji od
            dana drugog datuma";
        }
        else if ($datum1->getDan() > $datum2->getDan()) {
            echo "datum 2 je raniji od datuma 1(poklapaju se meseci i godine ali je dan drugog datuma raniji od
            dana prvog datuma";
        }
        else {
            echo "datumi su jednaki";
        }

    }


    ranijiDatum($datum1, $datum2);


    echo "<br>";

    // 3)

        class Radnik {
            private $ime;
            private $plata;

            public function __construct($ime, $plata)
            {
                $this->setIme($ime);
                $this->setPlata($plata);
            }

            public function setIme($ime) {
                $this->ime = $ime;
            }
            public function setPlata($plata) {
                $this->plata = $plata;
            }

            public function getIme() {
                return $this->ime;
            }

            public function getPlata() {
                return $this->plata;
            }


        }

        $radnik1 = new Radnik("Dragan", 25530);
        $radnik2 = new Radnik("Milos", 39260);
        $radnik3 = new Radnik("Milan", 32464);

        $nizRadnika = array($radnik1, $radnik2, $radnik3);


        function maksPlata($nizRadnika) {
            $maks = $nizRadnika[0]->getPlata();
            for($i = 1; $i < count($nizRadnika); $i++) {
                if($nizRadnika[$i]->getPlata() > $maks) {
                    $maks = $nizRadnika[$i]->getPlata();
                }
            }

            return $maks;
        }

       echo maksPlata($nizRadnika);

       echo "<hr>";

       function maksPlataOsoba($nizRadnika) {
            
       }

        // 5)








    ?>
</body>

</html>