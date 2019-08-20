<?php 

    class Knjiga {
        private $naslov;
        private $autor;
        private $godIzdanja;
        private $brojStrana;
        private $cena = 2500;

        public function __construct($n, $a, $g, $b, $c)
        {
            $this->setNaslov($n);
            $this->setAutor($a);
            $this->setGodIzdanja($g);
            $this->setBrojStrana($b);
            $this->setCena($c);
        }

        public function setNaslov($n) {
            $this->naslov = $n;
        }
        public function setAutor($a) {
            $this->autor = $a;
        }
        public function setGodIzdanja($g) {
            $this->godIzdanja = $g;
        }
        public function setBrojStrana($b) {
            $this->brojStrana = $b;
        }
        public function setCena($c) {
            $this->cena = $c;
        }
        
        public function getNaslov($n) {
            return $this->naslov;
        }
        public function getAutor($a) {
            return $this->autor;
        }
        public function getGodIzdanja($g) {
            return $this->godIzdanja;
        }
        public function getBrojStrana($b) {
            return $this->brojStrana;
        }
        public function getCena($c) {
            return $this->cena;
        }

        public function KnjigaDebela() {
            if ($this->brojStrana > 600) {
                return true;
            }
            else {
                return false;
            }
        }
        public function KnjigaSkupa() {
            if ($this->cena > 8000) {
                return true;
            }
            else {
                return false;
            }
        
        }
        public function imeAutoraDugacko() {
            if (strlen($this->autor) > 18) {
                return true;
            }
            else {
                return false;
            }
        }
        public function Stampaj() {
            echo "Ime knjige: " . $this->naslov . "<br>";
            echo "Ime Autora: " . $this->autor . "<br>";
            echo "God izdanja: " . $this->godIzdanja . "<br>";
            echo "Broj stranica: " . $this->brojStrana . "<br>";
            echo "Cena knjige: " . $this->cena . "<br>";
        }

    }

       

    $objekat1 = new Knjiga("Hari Poter", "Jaaaaaaaaaaaaaaaaaaaa", 1996, 923, 12000);
    $objekat1->Stampaj();
    if($objekat1->KnjigaDebela()) {
        echo "Knjiga je debela" . "<br>";
    }
    if($objekat1->KnjigaSkupa()) {
        echo "Knjiga je skupa" . "<br>";
    }

    if($objekat1->imeAutoraDugacko()) {
        echo "Ime autora je dugacko";
    }

    echo "<hr>";

    $objekat2 = new Knjiga("Orlovi rano lete", "Stefa Stanimirovic", 2019, 523, 6000);
    $objekat2->Stampaj();
    if($objekat2->KnjigaDebela()) {
        echo "Knjiga je debela" . "<br>";
    }
    if($objekat2->KnjigaSkupa()) {
        echo "Knjiga je skupa" . "<br>";
    }

    if($objekat2->imeAutoraDugacko()) {
        echo "Ime autora je dugacko";
    }

    echo "<hr>";

    $objekat3 = new Knjiga("Laravel", "Jelena Matejic", 2018, 130, 11623);
    $objekat3->Stampaj();
    if($objekat3->KnjigaDebela()) {
        echo "Knjiga je debela" . "<br>";
    }
    if($objekat3->KnjigaSkupa()) {
        echo "Knjiga je skupa" . "<br>";
    }

    if($objekat3->imeAutoraDugacko()) {
        echo "Ime autora je dugacko";
    }

    echo "<hr>";










?>