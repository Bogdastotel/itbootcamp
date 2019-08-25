<?php 


class Osoba {
    private $ime;
    private $prezime;
    private $god_rodjenja;

    public function __construct($ime,$prezime,$god_rodjenja)
    {
        $this->setIme($ime);
        $this->setPrezime($prezime);
        $this->setGodRodj($god_rodjenja);
    }

    public function setIme($ime) {
        $this->ime = $ime;
    }

    public function setPrezime($prezime) {
        $this->prezime = $prezime;
    }

    public function setGodRodj($god_rodjenja) {
        $this->god_rodjenja = $god_rodjenja;
    }

    public function getIme() {
        return $this->ime;
    }

    public function getPrezime() {
        return $this->prezime;
    }

    public function getGodRodj() {
        return $this->god_rodjenja;
    }

    public function ispisiOsobu() {
        echo "Ime osobe je: " . $this->getIme() . "<br>";
        echo "Prezime osobe je: " . $this->getPrezime() . "<br>";
        echo "Godina rodjenja osobe je: " . $this->getGodRodj() . "<br>";
    }


}

class Zaposleni extends Osoba {
        private $plata;
        private $zaposleni;

        public function __construct($ime, $prezime, $god_rodjenja, $plata, $zaposleni)
        {
            parent::__construct($ime, $prezime, $god_rodjenja);
            $this->setPlata($plata);
            $this->setZaposleni($zaposleni);

        }

        public function setPlata($plata) {
            $this->plata = $plata;
        }

        public function setZaposleni($zaposleni) {
            $this->zaposleni = $zaposleni;
        }

        public function getPlata() {
            return $this->plata;
        }

        public function getZaposleni() {
            return $this->zaposleni;
        }


        public function ispisi() {
            echo "Ime zaposlenog je: " . $this->getIme() . "<br>";
            echo "Prezime zaposlenog je: " . $this->getPrezime() . "<br>";
            echo "Godina rodjenja zaposlenog je: " . $this->getGodRodj() . "<br>";
            echo "Plata zaposlenog je: " . $this->getPlata() . "<br>";
            echo "Zaposleni radi kao: " . $this->getZaposleni() . "<br>";
        }

}


$zaposleni1 = new Zaposleni("Petar", "Petrovic", 1992, 25000, "Ekonomista");
$zaposleni2 = new Zaposleni("Milos", "Mitrovic", 1989, 35200, "Inzenjer");
$zaposleni3 = new Zaposleni("Mitar", "Golubovic", 1993, 45220, "Ekonomista");


$nizZaposlenih = array($zaposleni1, $zaposleni2, $zaposleni3);

 function ekonomSektor($nizZaposlenih) {     
     foreach($nizZaposlenih as $radnik) {
         if($radnik->getZaposleni() == "Ekonomista") {
           echo "zaposlen u ekonomskom sektoru" . "<br>";
           $radnik->ispisi();
         }
        
     }
     
}


ekonomSektor($nizZaposlenih);








?>