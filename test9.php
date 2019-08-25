<?php
    class Racunar {
        private $sifra;
        private $boja;

        public function __construct($sifra, $boja)
        {
            $this->setSifra($sifra);
            $this->setBoja($boja);
        }

        public function setSifra($sifra) {
            if(strlen($sifra) == 4) {
                $this->sifra = $sifra;
            }
            else {
                $this->sifra = "aaaa";
            }
        }
        public function setBoja($boja) {
            
            if($boja == "siva" OR $boja == "crna" OR $boja == "bela") {
                $this->boja = $boja;
            }
            else {
                $this->boja = "bela";
            }
        }

        public function getSifra() {
            return $this->sifra;
        }

        public function getBoja() {
            return $this->boja;
        }

        public function ispisiRacunar() {
            echo "Sifra racunara je: " . $this->getSifra() . "<br>";
            echo "Boja racunara je: " . $this->getBoja() . "<br>";
        }


    }


    class Laptop extends Racunar {
        private $masa;

        public function __construct($sifra, $boja, $masa)
        {
            parent::__construct($sifra, $boja);
            $this->setMasa($masa);
        }
        public function setMasa($masa) {
            if($masa < 100) {
                $this->masa = 100;
            }
            else {
                $this->masa = $masa;
            }
        }

        public function getMasa() {
            return $this->masa;
        }
        public function ispisiLapTop() {
            echo "Sifra laptopa je: " . $this->getSifra() . "<br>";
            echo "Boja laptopa je: " . $this->getBoja() . "<br>";
            echo "Masa Laptopa je je: " . $this->getMasa() . "<br>";
        }


    }

        $laptop1 = new Laptop(1223, "crna", 98);
        $laptop2 = new Laptop(12235, "zelena", 124);
        $laptop3 = new Laptop(1223, "crna", 146);

        $nizLaptopova = array($laptop1, $laptop2, $laptop3);

        $laptop1->ispisiLapTop();
        echo "<br>";
        $laptop2->ispisiLapTop();
        echo "<br>";
        $laptop3->ispisiLapTop();
        echo "<hr>";

        function prosekTezina($nizLaptopova) {
            $suma = 0;
            $br = 0;
            foreach($nizLaptopova as $laptop) {
                $suma += $laptop->getMasa();
                $br++;
            }
            return $suma/$br;
        }

        echo "Prosek tezina laptopova je: " . "<br>";
        echo prosekTezina($nizLaptopova);
        
        echo "<hr>";


        function natprosecnaTezina($nizLaptopova) {
            $prosek = prosekTezina($nizLaptopova);
            foreach($nizLaptopova as $laptop) {
                if($laptop->getMasa() > $prosek) {
                    $laptop->ispisiLapTop();
                }
            }
        }

        echo "Laptop(ovi) sa natprosecnom tezinom : " . "<br>";
        echo natprosecnaTezina($nizLaptopova);
        echo "<hr>";
        
        function najcescaBoja($nizLaptopova) {
            $boja1Brojac = 0;
            $boja2Brojac = 0;
            $boja3Brojac = 0;

            foreach($nizLaptopova as $laptop) {
                if($laptop->getBoja() == "crna") {
                    $boja1Brojac ++;
                }
                else if($laptop->getBoja() == "siva") {
                    $boja2Brojac ++;
                }
                else if($laptop->getBoja() == "bela") {
                    $boja3Brojac ++;
                }
            }

            if($boja1Brojac >= $boja2Brojac && $boja1Brojac >= $boja3Brojac) {
                echo "Najcesca boja lap topova iz niza je crna";
            }
            else if ($boja2Brojac >= $boja1Brojac && $boja2Brojac >= $boja3Brojac) {
                echo "Najcesca boja lap topova iz niza je siva";
            }
            else if ($boja3Brojac >= $boja1Brojac && $boja3Brojac >= $boja2Brojac) {
                echo "Najcesca boja lap topova iz niza je bela";
            }
        

        }

         najcescaBoja($nizLaptopova);







?>