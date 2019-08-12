<?php 

class Auto {
    // tri polja 
    var $marka;
    var $boja = 'white';
    var $imaKrov = true;

    // jedna metoda 
    function sviraj() {
        echo "Beep! Beep! <br>";
    }
}
// $i = array (1,3,6)
$auto1 = new Auto;
$auto2 = new Auto;
// kreiranje (instanciranje) objekta

$auto1->marka = "BMW";
$auto1->boja = "blue";
$auto1->imaKrov = false;


$auto2->marka = "Audi";
$auto2->imaKrov = true;

echo "Karakteristike prvog vozila: ";
echo $auto1->marka . ", " . $auto1->boja . ", " . $auto1->imaKrov . "<br>";

if($auto1->imaKrov === false) {
    echo "Prvi auto nema krov" . "<br>";
}
$auto1->sviraj();

echo "Karakteristike drugog vozila: ";
echo $auto2->marka . ", " . $auto2->boja . ", " . $auto2->imaKrov . "<br>";

$auto2->sviraj();

class Film {
    var $naslov;
    var $reziser;
    var $godIzdavanja;
    function stampaj() 
    {
        echo "Film sa naslovom: " . $this->naslov . "<br>";
        echo "Reziser: " . $this->reziser . "<br>";
        echo "Godina izdavanja: " . $this->godIzdavanja . "<br>";
    }

}

echo "<hr>";

$film1 = new Film;
$film1->naslov = "Titanic";
$film1->reziser = "James Cameron";
$film1->godIzdavanja= "1997";
$film1->stampaj();

echo "<hr>";

$film2 = new Film;
$film2->naslov = "Maratonci trce pocasni krug";
$film2->reziser = "Slobodan Sijan";
$film2->godIzdavanja= "1982";
$film2->stampaj();

echo "<hr>";

class Pacijent {
    var $ime;
    var $visina;
    var $tezina;
    function Stampaj() {
        echo "Ime pacijenta: " . $this->ime . "<br>";
        echo "visina pacijenta: " . $this->visina . "<br>";
        echo "tezina pacijenta: " . $this->tezina . "<br>";
    }
    function BMI() {

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
    
    

}

$pacijent1 = new Pacijent;
$pacijent1->ime = "Dusan Velev";
$pacijent1->visina = "182";
$pacijent1->tezina = "82";
$pacijent1->Stampaj();
echo "BMI pacijenta 1 je :  " . $pacijent1->BMI() . "<br>";
if($pacijent1->Kritican()) {
    echo "pacijenta 1 je kritican";
}
else {
    echo "pacijent je normalan";
}








?>