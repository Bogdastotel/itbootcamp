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
echo "<br>";

class Brojevi {
    private $br1;
    private $br2;

    public function __construct($br1,$br2)
    {
        $this->br1 = $br1;
        $this->br2 = $br2;
    }

    public function setBr1($br1) {
        $this->br1 = $br1;
    }

    public function getBr1() {
        return $this->br1;
    }
    public function setBr2($br2) {
        $this->br2 = $br2;
    }

    public function getBr2() {
        return $this->br2;
    }

    public function Saberi($br1, $br2) {
        $rez = $br1 + $br2;
        return $rez;
    }
    public function Oduzmi($br1, $br2) {
        $rez = $br1 - $br2;
        return $rez;
    }
    public function Pomnozi($br1, $br2) {
        $rez = $br1 * $br2;
        return $rez;
    }
    public function Podeli($br1, $br2) {
        $rez = $br1 / $br2;
        return $rez;
    }
    


    // public function sabiranje($br1,$br2) {
    //     return $br1 + $br2;
    // }
    // public function oduzimanje($br1,$br2) {
    //     return $br1 - $br2;
    // }
    // public function mnozenje($br1,$br2) {
    //     return $br1 * $br2;
    // }
    // public function deljenje($br1,$br2) {
    //     return $br1 / $br2;
    // }

}

$broj1 = new Brojevi(2,3);

$a = $broj1->getBr1();
$b = $broj1->getBr2();
$r = $broj1->Saberi($a,$b);
echo "zbir je: " . $r . "<br>";
$r = $broj1->Oduzmi($a,$b);
echo "zbir je: " . $r . "<br>";
$r = $broj1->Pomnozi($a,$b);
echo "zbir je: " . $r . "<br>";
$r = $broj1->Podeli($a,$b);
echo "zbir je: " . $r . "<br>";
// echo $broj1->sabiranje(2,3) . "<br>";
// echo $broj1->oduzimanje(2,3) . "<br>";
// echo $broj1->mnozenje(2,3) . "<br>";
// echo $broj1->deljenje(3,3) . "<br>";

class Kolca {
    private $boja;
    private $tip;





    public function __construct($b,$t) {
        $this->boja= $b;
        $this->tip = $t;
       
    }
    // jedna metoda 
    public function setTip($t) {
         $this->tip = $t;
     }
    public function setBoja($b) {
       $this->boja = $b;
    }
  
   public function getTip() {
       return $this->tip;
   }
   public function getBoja() {
        return $this->boja;
}
}


$auto1 =new Kolca('Crvena', 'Kabriolet');
// $auto1->boja= 'crvena';

// $auto1->tip= 'kabriolet';

$auto2 = new Kolca('Plava', 'Karavan');

// $auto2->boja= 'plava';

// $auto2->tip= 'karavan';

$automobili = array($auto1, $auto2);

foreach ($automobili as $auto) {
    echo "Ovo je auto boje:  " . $auto->getBoja() . " " . " " . " , Tipa: " . $auto->getTip() . "<br>";
}


class Pacijentii {


    private $imee;
    private $visinaa;
    private $tezinaa;

    public function __construct($i,$v,$t) {
        $this->imee = $i;
        $this->visinaa = $v;
        $this->tezinaa = $t;
    }
   
    public function setImee($i) {
        $this->imee = $i;
    }
    public function setVisinaa($v) {
        $this->visinaa = $v;
    }
    public function setTezina($t) {
        $this->tezinaa = $t;
    }
    public function getImee() {
        return $this->imee;
    }
    public function getVisinaa() {
        return $this->visinaa;
    }
    public function getTezinaa() {
        return $this->tezinaa;
    }
    
    function bmii() {

        $bmi = ($this->tezinaa*10000)/($this->visinaa*$this->visinaa);
        return $bmi; 
    }

    



}


$pacc1 = new Pacijentii("Dusan", 182, 82);
$pacc2 = new Pacijentii("Milos", 159, 76);
$pacc3 = new Pacijentii("Marko", 172, 65);

$srednjaVisina = array($pacc1, $pacc2, $pacc3);
$br = 0;
$suma = 0;


foreach ($srednjaVisina as $pacijent) {
    $suma += $pacijent->getVisinaa();
    $br +=1;
}
$izrSrVis= $suma / $br;
echo $izrSrVis . "<br>";

$najmanjaTezina = array($pacc1, $pacc2, $pacc3);
$min = $najmanjaTezina[0]->getTezinaa();
foreach ($najmanjaTezina as $tezina) {
    if($min > $tezina->getTezinaa()) {
        $min  = $tezina->getTezinaa();
    }

}
echo $min;




?>