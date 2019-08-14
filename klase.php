<?php 

class Auto {
    // tri polja 
    private $marka;
    private $boja = 'white';
    private $imaKrov = true;

    public function __construct($m,$b,$k) {
        $this->marka = $m;
        $this->boja = $b;
        $this->imaKrov = $k;

    }
    // jedna metoda 
    public function setMarka($m) {
         $this->marka = $m;
     }
    public function setBoja($b) {
       $this->boja = $b;
    }
    public function setImaKrov($k) {
        $this->imaKrov = $k;
   }
   public function getMarka() {
       return $this->marka;
   }
   public function getBoja() {
        return $this->boja;
}
    public function getImaKrov() {
        return $this->imaKrov;
}

}
// $i = array (1,3,6)
$auto1 = new Auto("BMW", "yellow", false);
$auto2 = new Auto("Audi", "white", true);
// kreiranje (instanciranje) objekta

// $auto1->setMarka("BMW");
// $auto1->setBoja("blue") ;
// $auto1->setImaKrov(true);


// $auto2->setMarka("Audi");
// $auto2->setBoja("red") ;
// $auto2->setImaKrov(true);

echo "Karakteristike prvog vozila: ";
echo $auto1->getMarka() . ", " . $auto1->getBoja() . ", " . $auto1->getImaKrov() . "<br>";

if($auto1->getImaKrov() === false) {
    echo "Prvi auto nema krov" . "<br>";
}

echo "Karakteristike drugog vozila: ";
echo $auto2->getMarka() . ", " . $auto2->getBoja() . ", " . $auto2->getImaKrov() . "<br>";


class Film {
    private $naslov;
    private $reziser;
    private $godIzdavanja;

    public function __construct($n, $r, $g)
    {
      $this->naslov = $n;
      $this->reziser = $r;
      $this->godIzdavanja = $g;

    }
    public function stampaj() 
    {
        echo "Film sa naslovom: " . $this->naslov . "<br>";
        echo "Reziser: " . $this->reziser . "<br>";
        echo "Godina izdavanja: " . $this->godIzdavanja . "<br>";
    }
    public function GodinaIzdavanja($g) {
       
        if ( $g > 1800) {
            $this->godIzdavanja = $g;
        }
        else {
            $this->godIzdavanja = 1800;
        }
    }
    public function Naslov($n) {
        $this->naslov = $n;
    }
    public function Reziser($r) {
        $this->reziser = $r;
    }
    public function getNaslov() {
        return $this->naslov;
    }
    public function getReziser() {
        return $this->reziser;
    }
    public function getGodIzdavanja() {
        return $this->godIzdavanja;
    }
}

echo "<hr>";

$film1 = new Film("Titanic", "Cameron", 1998);
// $film1->naslov = "Titanic";
// $film1->Naslov("Dule legenda");
$film1->getNaslov();
// $film1->reziser = "James Cameron";
// $film1->Reziser("Nikola Bogdanovic");
$film1->getReziser();
// $film1->godIzdavanja= "1997";
// $film1->GodinaIzdavanja(1700);
$film1->getGodIzdavanja();
$film1->stampaj();

echo "<hr>";

$film2 = new Film("Dule fudbaler", "Ronaldinjo", 2019);
// $film2->Naslov("Dule pro");
$film2->getNaslov();
// $film2->Reziser("Nikola Ilic");
$film2->getReziser();
// $film2->GodinaIzdavanja(1920);
$film2->getGodIzdavanja();
$film2->stampaj();

echo "<hr>";

class Pacijent {
    var $ime;
    var $visina;
    var $tezina;

    // public function __construct($i, $v, $t)
    // {
        
    // }
    function Stampaj() {
        echo "Ime pacijenta: " . $this->ime . "<br>";
        echo "visina pacijenta: " . $this->visina . "<br>";
        echo "tezina pacijenta: " . $this->tezina . "<br>";
    }
    function bmi() {

        $bmi = ($this->tezina*10000)/($this->visina*$this->visina);
        return $bmi; 
    }
    function Kritican() {
        if($this->bmi() < 15 OR $this->bmi() > 40) {
            return true;
        }
        else {
            return false;
        }
    }
    function setVisina($v) {
        if($v < 0) {
            $this->visina = 0;
        }
        else if($v <=250) {
            $this->visina = $v;
        }
        else {
            $this->visina = 250;
        }
    }
    
    function setTezina($t) {
        if($t < 0) {
            $this->tezina = 0;
        }
        else if($t <=550) {
            $this->tezina = $t;
        }
        else {
            $this->tezina = 550;
        }
    }

}

$pacijent1 = new Pacijent;
$pacijent1->ime = "Dusan Velev";
// $pacijent1->visina = "182";
$pacijent1->setVisina(182);
// $pacijent1->tezina = "82";
$pacijent1->setTezina(22);
$pacijent1->Stampaj();

echo "BMI pacijenta 1 je :  " . $pacijent1->BMI() . "<br>";
if($pacijent1->Kritican()) {
    echo "pacijenta 1 je kritican";
}
else {
    echo "pacijent je normalan";
}









?>