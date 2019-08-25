<?php
/*    
(Malo teži od ostalih zadataka)
Kreirati klasu Student koja ima atribute: jmbg, ime, prezime, nizOcena i presecna ocena.
Prilikom kreiranja konstruktora, prosledjuje se jmbg, ime, prezime i nizOcena, 
a automatski se izračuna prosečna ocena ovog studenta. 
Takođe, voditi računa o tome da svaka od unetih ocena može biti isključivo ceo broj i to 6, 7, 8, 9 ili 10.
JMBG studenta mora biti string koji sadrži 13 karaktera.
Izračunata prosečna ocena se dodeli atributu prosecna ocena.
Napraviti i odgovarajuće getere i setere.
Napraviti metodu ispis koja ispisuje sve podatke o jednom studentu.
Napraviti niz studenata i koristiti ga u predstojećim funkcijama.
Napraviti funkciju imePrezime kojoj se prosleđuje ime i prezime, a funkcija vraća broj studenata sa tim imenom i prezimenom.
Napraviti funkciju srednjaOcena koja ispisuje koja je preosečna ocena svih ocena studenata.
Napraviti funkciju osrednji koja ispisuje studenta koji ima prosek najbliži srednjoj oceni svih studenata.
Napraviti ocenu najmanjaOcenaNajboljeg koja određuje najboljeg studenta i na ekranu ispisuje njegovu najslabiju ocenu.
Napisati funkciju najmanjaOcena koja vraća koja je najmanja ocena, uzimajući u obzir ocene svih ocena koje su studenti dobijali.
Napisati funkciju najcescaOcena koja vraća ocenu koju su studenti najčešće dobijali. 
Napisati funiciju rodjeniGodine kojoj se prosleđuje godina, a funkcija na ekranu ispisuje sve studente koji su rodjeni te godine. 
Godinu rođenja preuzeti (odrediti) iz JMBG-a studenta.
*/

    class Student
    {
        private $jmbg;
        private $ime;
        private $prezime;
        private $nizOcena;
        private $prosecnaOcena;

        public function __construct($jmbg, $ime, $prezime, $nizOcena)
        {
            $this->setJmbg($jmbg);
            $this->setIme($ime);
            $this->setPrezime($prezime);
            $this->setNizOcena($nizOcena);
            $suma = 0;
            $brojac = 0;
            foreach($this->nizOcena as $ocena)
            {
                $suma += $ocena;
                $brojac++;
            }
            $this->prosecnaOcena = $suma / $brojac;
        }

        public function setJmbg($jmbg)
        {
            if(strlen($jmbg) == 13)
            {
                $this->jmbg = $jmbg;
            }
            else
            {
                echo "Loše unet JMBG";
            }
        }
        public function setIme($ime)
        {
            $this->ime = $ime;
        }
        public function setPrezime($prezime)
        {
            $this->prezime = $prezime;
        }
        public function setNizOcena($nizOcena)
        {
            for($i=0; $i<count($nizOcena); $i++)
            {
                if($nizOcena[$i] != 6 AND $nizOcena[$i] != 7 AND $nizOcena[$i] != 8 
                    AND $nizOcena[$i] != 9 AND $nizOcena[$i] != 10)
                {
                    $nizOcena[$i] = 6;
                }
            }
            $this->nizOcena = $nizOcena;
        }

        public function getJmbg()
        {
            return $this->jmbg;
        }
        public function getIme()
        {
            return $this->ime;
        }
        public function getPrezime()
        {
            return $this->prezime;
        }
        public function getNizOcena()
        {
            return $this->nizOcena;
        }
        public function getProsecnaOcena()
        {
            return $this->prosecnaOcena;
        }

        public function ispis()
        {
            echo "Student: " . $this->getIme() . " " . $this->getPrezime() . 
                "<br>JMBG: " . $this->getJmbg() . "<br>Niz ocena: ";
            foreach ($this->nizOcena as $ocena)
            {
                echo $ocena . " ";
            }
            echo "<br>Prosečna ocena: " . $this->prosecnaOcena . "<br><br>";
        }
    }

    $s1 = new Student ("0901995735013", "Nikola", "Bogdanovic", array(6,7,8,5,10,7,12));
    $s2 = new Student ("2605994654516", "Petar", "Jovanovic", array(6,10,6,5,8,7,9));
    $s3 = new Student ("0806996212165", "Ana", "Ilic", array(6,7,8,9,6,8,7));
    $s4 = new Student ("2506999654315", "Stefan", "Antic", array(10,8,6,8,7,4,8));
    $s5 = new Student ("1811997543135", "Jana", "Simic", array(9,8,10,7,6,8,6));
    $s6 = new Student ("0901995735013", "Milica", "Milivojevic", array(6,7,8,5,10,7,12));  

    $studenti = array($s1, $s2, $s3, $s4, $s5);
    $s1->ispis();

    function imePrezime($ime, $prezime, $nizStudenata)
    {
        $brojac=0;
        foreach($nizStudenata as $student)
        {
            if($student->getIme()==$ime && $student->getPrezime()==$prezime)
            {
                $brojac++;
            }
        }
        return $brojac;
    }

    //echo imePrezime("Milica", "Milivojevic", $studenti);

    function srednjaOcena($nizStudenata)
    {
        $suma = 0;
        $brojac = 0;
        foreach($nizStudenata as $student)
        {
            $suma += $student->getProsecnaOcena();
            $brojac++;
        }
        echo "Prosecna ocena svih ocena studenata: " . $suma/$brojac . "<br><br>";
    }

    srednjaOcena($studenti);

    function osrednji($studenti)
    {
        
    }
?>