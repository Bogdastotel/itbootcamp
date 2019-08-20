<?php 

    class Kompozicija {
        var $nazivKompozicije;
        var $imeKompozitora;
        var $godinaIzlaska;

        function Stampaj() {
            echo "Naziv kompozicije: " . $this->nazivKompozicije . "<br>";

            echo "Ime kompozitora: " . $this->imeKompozitora . "<br>";
            
            echo "Godina Izlaska: " . $this->godinaIzlaska . "<br>";
            
        }

        function Barokna() {
            if ($this->godinaIzlaska > 1600 AND $this->godinaIzlaska < 1750) {
                return true;
            }
            else {
                return false;
            }
        }

       function Betoven() {
            if (strpos($this->imeKompozitora, 'Betoven') !== false){
                return true;
            }
            else {
                return false;
            }
        }
      
        

    }


    $kompozicija1 = new Kompozicija;
    $kompozicija1->nazivKompozicije = "Moonlight sonata";
    $kompozicija1->imeKompozitora = "Ludvig van Betoven";
    $kompozicija1->godinaIzlaska = 1596;
    $kompozicija1->Stampaj();
    if ($kompozicija1->Barokna()) {
        echo "Kompozicija je barokna" . "<br>";
    }
    else {
        echo "Kompozicija nije barokna" . "<br>";
    }
    if ($kompozicija1->Betoven()) {
        echo "Ime autora sadrzi Betoven" . "<br>";
    }
    else {
        echo "Ime autora  ne sadrzi Betoven" . "<br>";
    }

    echo "<hr>";

    $kompozicija2 = new Kompozicija;
    $kompozicija2->nazivKompozicije = "Labudovo jezero";
    $kompozicija2->imeKompozitora = "Peter Ilic Tschaikowsky";
    $kompozicija2->godinaIzlaska = 1704;
    $kompozicija2->Stampaj();
    if ($kompozicija2->Barokna()) {
        echo "Kompozicija je barokna" . "<br>";
    }
    else {
        echo "Kompozicija nije barokna" . "<br>";
    }
    if ($kompozicija2->Betoven()) {
        echo "Ime autora  sadrzi Betoven" . "<br>";
    }
    else {
        echo "Ime autora  ne sadrzi Betoven" . "<br>";
    }

    echo "<hr>";

    $kompozicija3 = new Kompozicija;
    $kompozicija3->nazivKompozicije = "In the hall of the mointain king";
    $kompozicija3->imeKompozitora = "Grieg";
    $kompozicija3->godinaIzlaska = 1806;
    $kompozicija3->Stampaj();
    if ($kompozicija3->Barokna()) {
        echo "Kompozicija je barokna" . "<br>";
    }
    else {
        echo "Kompozicija nije barokna" . "<br>";
    }
    if ($kompozicija3->Betoven()) {
        echo "Ime autora  sadrzi Betoven" . "<br>";
    }
    else {
        echo "Ime autora  ne sadrzi Betoven" . "<br>";
    }










?>