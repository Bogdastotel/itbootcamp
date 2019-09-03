<?php 




class ZooZivotinja {
    private $ime;
    private $tezina;
    private $brGodina;

    public function __construct($ime, $tezina, $brGodina)
    {
        $this->setIme($ime);
        $this->setTezina($tezina);
        $this->setBrGodina($brGodina);
    }

    public function setIme($ime) {
        $this->ime = $ime;
    }
    public function setTezina($tezina) {
        if($tezina < 0) {
            $this->tezina = 0;
        }
        else {
            $this->tezina = $tezina;
        }
    }
    public function setBrGodina($brGodina) {
        if($brGodina < 0) {
            $this->brGodina = 0;
        }
        else {
            $this->brGodina = $brGodina;
        }
    }

    public function getIme() {
        return $this->ime;
    }

    public function getTezina() {
        return $this->tezina;
    }
    public function getBrGodina() {
        return $this->brGodina;
    }

    public function ispisiZivotinju() {
        echo "Zivotinja sa imenom: " . $this->getIme() . "<br>";
        echo "Tezina: " . $this->getTezina() . "<br>";
        echo "Broj godina: " . $this->getBrGodina() . "<br>";
    }

}

class Sisar extends ZooZivotinja {
    private $pol;
    private $visina;

    public function __construct($ime, $tezina, $brGodina, $pol, $visina)
    {
        parent::__construct($ime, $tezina, $brGodina);  
        $this->setPol($pol);
        $this->setVisina($visina);
    }
    

    public function setPol($pol) {
        if($pol == "M") {
            $this->pol = $pol;
        }
        else if($pol == "Z") {
            $this->pol = $pol;
        }
        else {
            $this->pol = "Z";
        }
    }

    public function setVisina($visina) {
        if($visina < 0) {
            $this->visina = 0;
        }
        else {
            $this->visina = $visina;
        }
    }

    public function getPol() {
        return $this->pol;
    }

    public function getVisina() {
        return $this->visina;
    }

    public function kalorijskePotrebe() {
        $kalorijskePotrebeMuzjaka = 0;
        $kalorijskePotrebeZenke = 0;
        if($this->getPol() == "M") {
           return $kalorijskePotrebeMuzjaka = 13.397 * $this->getTezina() + 4.799 * $this->getVisina() - 5.677 * $this->getBrGodina() + 88.362;
        }
        else {
           return $kalorijskePotrebeZenke = 9.247 * $this->getTezina() + 3.098 * $this->getVisina() - 4.330 * $this->getBrGodina() + 447.593;
        }
        
        
    }   

    public function ispisiSisara() {
        echo "Zivotinja sa imenom: " . $this->getIme() . "<br>";
        echo "Tezina: " . $this->getTezina() . "<br>";
        echo "Broj godina: " . $this->getBrGodina() . "<br>";
        echo "Pol: " . $this->getPol() . "<br>";
        echo "Visina: " . $this->getVisina() . "<br>";
        
    }

}

$zivotinja1 = new Sisar("Tigar", 160, 6, "M", 122);
$zivotinja2 = new Sisar("Tigar", 123, 7, "Z", 76);
$zivotinja3 = new Sisar("Delfin", 243, 10, "O", 165);

$nizZivotinja = array($zivotinja1, $zivotinja2, $zivotinja3);

echo $zivotinja1->ispisiSisara();
echo "<br>";
echo $zivotinja2->ispisiSisara();
echo "<br>";
echo $zivotinja3->ispisiSisara();
echo "<br>";

echo "<hr>";

echo "Kalorijske potrebe zivotinje: " . $zivotinja1->kalorijskePotrebe();

echo "<hr>";

echo "Kalorijske potrebe zivotinje: " . $zivotinja2->kalorijskePotrebe();

echo "<hr>";
echo "Kalorijske potrebe zivotinje: " . $zivotinja3->kalorijskePotrebe();

echo "<hr>";
// function zenkeNiza($nizZivotinja) {
//     foreach ($nizZivotinja as $zivotinja) {
//         if($zivotinja->getPol() == "Z" ) {
//             $zivotinja->ispisiSisara();
//         }
//     }
// }

// zenkeNiza($nizZivotinja);

// echo "<hr>";

function zenkeTigar($nizZivotinja) {

    foreach ($nizZivotinja as $zivotinja) {

        if($zivotinja->getPol() == "Z" && stripos($zivotinja->getIme(), "Tigar") !== false ) {
            $zivotinja->ispisiSisara();
        }
    }
        
}

echo "Zenke tigrovi: " . "<br>";
zenkeTigar($nizZivotinja);

echo "<hr>";

 
function dnevniUnosKalorija($nizZivotinja, $unosKalorija) {
    
    

    foreach($nizZivotinja as $zivotinja) {
        if($zivotinja->kalorijskePotrebe() > $unosKalorija) {
            return true;
        }

    }
    return false;
     
}



echo dnevniUnosKalorija($nizZivotinja, 1943);




?>