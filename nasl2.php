<?php
class Osoba
{
    private $ime;
    private $prezime;
    private $godRodj;

    public function __construct($ime, $prezime, $godRodj)
    {
        $this->setIme($ime);
        $this->setPrezime($prezime);
        $this->setGodRodj($godRodj);
    }

    public function setIme($ime)
    {
        $this->ime = $ime;
    }

    public function setPrezime($prezime)
    {
        $this->prezime = $prezime;
    }

    public function setGodRodj($godRodj)
    {
        $this->godRodj = $godRodj;
    }

    public function getIme()
    {
        return $this->ime;
    }

    public function getPrezime()
    {
        return $this->prezime;
    }

    public function getGodRodj()
    {
        return $this->godRodj;
    }

    public function ispisiOsobu()
    {
        echo "Ime: " . $this->getIme() . " ; " . " Prezime: " . $this->getPrezime() . " ; " .  " God rodjenja: " . $this->getGodRodj();
    }
}




class Zaposleni extends Osoba
{

    private $plata;
    private $pozicija;

    public function __construct($ime, $prezime, $godRodj, $plata, $pozicija)
    {
        // $this->setIme($ime);
        // $this->setPrezime($prezime);
        // $this->setGodRodj($godRodj);
        parent::__construct($ime, $prezime, $godRodj);
        $this->setPlata($plata);
        $this->setPozicija($pozicija);
    }

    public function setPlata($plata)
    {
        $this->plata = $plata;
    }
    public function setPozicija($pozicija)
    {
        $this->pozicija = $pozicija;
    }

    public function getPlata()
    {
        return $this->plata;
    }

    public function getPozicija()
    {
        return $this->pozicija;
    }

    public function ispisiZaposlenog()
    {
        echo "Radnik: " . $this->getIme() .  " " . $this->getPrezime() . " " . $this->getGodRodj() . " " . "<br>"
            . $this->getPozicija() . " " . $this->getPlata();
    }
}

$osoba1 = new Osoba("Ana", "Brnabic", 1975);
$osoba1->ispisiOsobu();

echo "<hr>";

$r1 = new Zaposleni("Dusan", "Velev", 1990, 225000, "CEO");
$r1->ispisiZaposlenog();
$r2 = new Zaposleni("Mika", "Mikic", 1978, 60000, "saradnik");
$r3 = new Zaposleni("Petar", "Mitrovic", 1991, 50000, "saradnik");

echo "<hr>";

$radnici = array($r1, $r2, $r3);

function prosecnaPlata($radnici)
{
    $suma = 0;
    $br = 0;
    foreach ($radnici as $r) {
        $suma += $r->getPlata();
        $br++;
    }
    $prosek = $suma / $br;
    return $prosek;
}

echo "Prosecna plata: " . prosecnaPlata($radnici);
echo "<hr>";

function natprosecna($radnici, $radnik)
{
    $prosek = prosecnaPlata($radnici);
    if ($prosek < $radnik->getPlata()) {
        return true;
    } else {
        return false;
    }
}


if (natprosecna($radnici, $r2) == true) {
    echo "Natprosecna plata";
} else {
    echo "Plata ispod proseka";
}

echo "<hr>";

class Kosarkas extends Osoba
{

    private $gradRodjenja;
    private $visina;
    private $tezina;
    private $brojNaDresu;
    private $ukupanBrojOdigranihUtakmica;
    private $pozicija;
    private $reprezentacija;
    private $brojPoena;

    public function __construct(
        $ime,
        $prezime,
        $godRodj,
        $gradRodjenja,
        $visina,
        $tezina,
        $brojNaDresu,
        $ukupanBrojOdigranihUtakmica,
        $pozicija,
        $reprezentacija,
        $brojPoena
    ) { 
        parent::__construct($ime, $prezime, $godRodj);
        $this->setGradRodjenja($gradRodjenja);
        $this->setVisina($visina);
        $this->setTezina($tezina);
        $this->setBrojNaDresu($brojNaDresu);
        $this->setUkupanBrojOdigranihUtakmica($ukupanBrojOdigranihUtakmica);
        $this->setPozicija($pozicija);
        $this-> setReprezentacija($reprezentacija);
        $this->setBrojPoena($brojPoena);

    }

    public function setGradRodjenja($gradRodjenja)
    {
        $this->gradRodjenja = $gradRodjenja;
    }

    public function setVisina($visina)
    {
        $this->visina = $visina;
    }
    public function setTezina($tezina)
    {
        $this->tezina = $tezina;
    }
    public function setBrojNaDresu($brojNaDresu)
    {
        $this->brojNaDresu = $brojNaDresu;
    }
    public function setUkupanBrojOdigranihUtakmica($ukupanBrojOdigranihUtakmica)
    {
        $this->ukupanBrojOdigranihUtakmica = $ukupanBrojOdigranihUtakmica;
    }
    public function setPozicija($pozicija)
    {
        $this->pozicija = $pozicija;
    }
    public function setReprezentacija($reprezentacija)
    {
        $this->reprezentacija = $reprezentacija;
    }
    public function setBrojPoena($brojPoena) {
        $this->brojPoena = $brojPoena;
    }

    public function getGradRodjenja() {
        return  $this->gradRodjenja;
    }
    public function getVisina() {
        return  $this->visina;
    }
    public function getTezina() {
        return  $this->tezina;
    }
    public function getBrojNaDres() {
        return  $this->brojNaDresu;
    }
    public function getUkupanBrojOdigranihUtakmica() {
        return  $this->ukupanBrojOdigranihUtakmica;
    }
    public function getPozicija() {
        return  $this->pozicija;
    }
    public function getReprezentacija() {
        return  $this->reprezentacija;
    }
    public function getBrojPoena() {
        return $this->brojPoena;
    }


}

$igrac1 = new Kosarkas("Dusan", "Velev", 1990, "Nis", 182, 82, 18, 104, 1, "Srbija", 2500);
$igrac2 = new Kosarkas("Stefan", "Stanimirovic", 1989, "Nis", 213, 122, 22, 154, 5, "Srbija", 1687);

$nizIgraca = array($igrac1, $igrac2);

function prosecanBrojPoenaPoUtakmici($igrac1) {
    $brojPoUtakmici = $igrac1->getBrojPoena() / $igrac1->getUkupanBrojOdigranihUtakmica();
    return $brojPoUtakmici;  
}

echo prosecanBrojPoenaPoUtakmici($igrac1);

echo "<hr>";

function teskiCentar($igrac) 
{
    if($igrac->getPozicija() == 5 && $igrac->getVisina() >= 210 && $igrac->getTezina() >= 110 ) {
        echo "Teski centar";
    }
}

teskiCentar($igrac2);
echo "<hr>";

