<?php

class Pacijenti
{
    private $ime;
    private $prezime;
    private $visina;
    private $tezina;

    public function __construct($ime, $prezime, $visina, $tezina)
    {
        $this->setIme($ime);
        $this->setPrezime($prezime);
        $this->setVisina($visina);
        $this->setTezina($tezina);
    }


    public function setIme($ime)
    {
        $this->ime = $ime;
    }
    public function setPrezime($prezime)
    {
        $this->prezime = $prezime;
    }
    public function setVisina($visina)
    {
        $this->visina = $visina;
    }
    public function setTezina($tezina)
    {
        $this->tezina = $tezina;
    }

    public function getIme()
    {
        return $this->ime;
    }

    public function getPrezime()
    {
        return $this->prezime;
    }

    public function getVisina()
    {
        return $this->visina;
    }

    public function getTezina()
    {
        return $this->tezina;
    }
    public function bmi()
    {
        $bmi = ($this->getTezina() * 10000) / pow($this->getVisina(), 2);
        return $bmi;
    }
    public function ispis()
    {
        echo "ime pacijenta je: " . $this->getIme() . "<br>";
        echo "prezime pacijenta je: " . $this->getPrezime() . "<br>";
        echo "visina pacijenta je: " . $this->getVisina() . "<br>";
        echo "tezina pacijenta je: " . $this->getTezina() . "<br>";
        echo "BMI pacijenta je: " .  $this->bmi() . "<br>";
    }
}


$pacijent1 = new Pacijenti("Nikola", "Bogdanovic", 180, 80);
$pacijent2 = new Pacijenti("Petar", "Petrovic", 190, 92);
$pacijent3 = new Pacijenti("Ivko", "Ognjenovic", 165, 52);

$nizObjekata = array($pacijent1, $pacijent2, $pacijent3);

function ispisElemenata($nizObjekata)
{

    foreach ($nizObjekata as $elementi) {
        echo $elementi->ispis();
    }
}

ispisElemenata($nizObjekata);

echo "<hr>";
// $pacijent1->ispis();
// Funkcija koja ispisuje podatke o pacijentu sa najmanjom težinom.

function PacijentSaNajmanjomTezinom($nizObjekata)
{

    $min = $nizObjekata[0]->getTezina();
    foreach ($nizObjekata as $pacijenti) {
        if ($min > $pacijenti->getTezina()) {
            $min = $pacijenti->getTezina();
        }
    }
    echo "Minimalna tezina niza pacijenata je: " . $min . "<br>";
    
}





PacijentSaNajmanjomTezinom($nizObjekata);

echo "<br>";



// Funkciju koja ispisuje podatke o pacijentu koji ima najveći BMI.


function PacijentSaNajvecimBMI($nizObjekata)
{
    $pacijentBMI = $nizObjekata[0];
    $bmiNajveci = $nizObjekata[0]->bmi();
    foreach ($nizObjekata as $bmii) {
        if ($bmiNajveci < $bmii->bmi()) {
            $bmiNajveci = $bmii->bmi();
            $pacijentBMI = $bmii;
        }
    }
    return $pacijentBMI;
}

$najveciBMIII = PacijentSaNajvecimBMI($nizObjekata);
echo "Pacijent sa najvecim BMI je: " . "<br>";
$najveciBMIII->ispis();

echo "<hr>";
// Funkciju koja ispisuje sve pacijente čije ime sadrži slovo A.

function SviPacijentiKojiSadrzeSlovoA($nizObjekata)
{

    foreach ($nizObjekata as $pacijent) {

        if (stripos($pacijent->getIme(), 'a') !== false) {
            $pacijent->ispis();
        }   
    }
}


SviPacijentiKojiSadrzeSlovoA($nizObjekata);
