
    <?php


    // 1)
    // Kreirati klasu Boja koja ima talasnu dužinu u nm, zasićenje i intenzitet.
    // Napraviti konstruktor kome se prosleđuju tri vrednosti koje treba postaviti.
    // Napraviti odgovarajuće getere i setere.
    // Napraviti funkciju ispitajSličnost koja za dve prosleđene boje vraća true ukoliko su te dve boje iste, 
    // u suprotnom vraća false.
    // Napraviti funkciju srednjaTalasnaDuzina koja za niz boja vraća vrednost srednje talasne dužine.

    class Boja
    {
        private $talasnaDuzina;
        private $zasicenje;
        private $intenzitet;

        public function __construct($talasnaDuzina, $zasicenje, $intenzitet)
        {
            $this->setTalasnaDuzina($talasnaDuzina);
            $this->setZasicenje($zasicenje);
            $this->setIntenzitet($intenzitet);
        }

        public function setTalasnaDuzina($talasnaDuzina)
        {
            $this->talasnaDuzina = $talasnaDuzina;
        }

        public function setZasicenje($zasicenje)
        {
            $this->zasicenje = $zasicenje;
        }

        public function setIntenzitet($intenzitet)
        {
            $this->intenzitet = $intenzitet;
        }

        public function getTalasnaDuzina()
        {
            return $this->talasnaDuzina;
        }
        public function getZasicenje()
        {
            return $this->zasicenje;
        }
        public function getIntenzitet()
        {
            return $this->intenzitet;
        }
    }

    $boja1 = new Boja(10, 40, 29);
    $boja2 = new Boja(11, 27, 27);
    $boja3 = new Boja(14, 32, 23);
    $boja4 = new Boja(10, 18, 24);


    $nizBoja = array($boja1, $boja2, $boja3, $boja4);

    function ispitajSlicnost($boja1, $boja2)
    {
        if ($boja1 == $boja2) {
            return true;
        } else {
            return false;
        }
    }

    if (ispitajSlicnost($boja1, $boja2)) {
        echo "Boje se poklapaju";
    } else {
        echo "Boje se ne poklapaju";
    }

    echo "<hr>";

    function srednjaTalasnaDuzina($nizBoja)
    {

        $suma = 0;
        $brojac = 0;
        foreach ($nizBoja as $boja) {
            $suma += $boja->getTalasnaDuzina();
            $brojac++;
        }
        return $suma / $brojac;
    }

    echo srednjaTalasnaDuzina($nizBoja);
    echo "<hr>";
    //    2)

    class Datum
    {
        private $dan;
        private $mesec;
        private $godina;

        public function __construct($dan, $mesec, $godina)
        {
            $this->setDan($dan);
            $this->setMesec($mesec);
            $this->setGodina($godina);
        }

        public function setDan($dan)
        {
            $this->dan = $dan;
        }

        public function setMesec($mesec)
        {
            $this->mesec = $mesec;
        }

        public function setGodina($godina)
        {
            $this->godina = $godina;
        }

        public function getDan()
        {
            return $this->dan;
        }
        public function getMesec()
        {
            return $this->mesec;
        }
        public function getGodina()
        {
            return $this->godina;
        }
    }

    $datum1 = new Datum(1, 3, 2017);
    $datum2 = new Datum(2, 3, 2017);



    // $nizDatuma = array($datum1, $datum2);

    function ranijiDatum($datum1, $datum2)
    {
        if ($datum1->getGodina() < $datum2->getGodina()) {
            echo "datum 1 raniji je od datuma 2";
        } else if ($datum1->getGodina() > $datum2->getGodina()) {
            echo "datum 2 je raniji od datuma 1";
        } else if ($datum1->getMesec() < $datum2->getMesec()) {
            echo "datum 1 je raniji od datuma 2 (godine se poklapaju ali je mesec prvog datuma raniji od meseca drugog datuma)";
        } else if ($datum1->getMesec() > $datum2->getMesec()) {
            echo "datum 2 je raniji od datuma 1 (godine se poklapaju ali je mesec drugog datuma raniji od meseca prvog datuma)";
        } else if (
            $datum1->getMesec() == $datum2->getMesec()
            && $datum1->getDan() < $datum2->getDan()
        ) {
            echo "datum 1 je raniji od datuma 2(poklapaju se meseci i godine ali je dan prvog datuma raniji od
            dana drugog datuma";
        } else if ($datum1->getDan() > $datum2->getDan()) {
            echo "datum 2 je raniji od datuma 1(poklapaju se meseci i godine ali je dan drugog datuma raniji od
            dana prvog datuma";
        } else {
            echo "datumi su jednaki";
        }
    }


    ranijiDatum($datum1, $datum2);


    echo "<br>";
    echo "<hr>";

    // 3)

    class Radnik
    {
        private $ime;
        private $plata;

        public function __construct($ime, $plata)
        {
            $this->setIme($ime);
            $this->setPlata($plata);
        }

        public function setIme($ime)
        {
            $this->ime = $ime;
        }
        public function setPlata($plata)
        {
            $this->plata = $plata;
        }

        public function getIme()
        {
            return $this->ime;
        }

        public function getPlata()
        {
            return $this->plata;
        }
        public function ispisi()
        {
            echo "Ime radnika je : " . $this->getIme() . "<br>";
            echo "Plata radnika je : " . $this->getPlata() . "<br>";
        }
    }

    $radnik1 = new Radnik("Dragan", 25530);
    $radnik2 = new Radnik("Milos", 39260);
    $radnik3 = new Radnik("Milan", 42464);

    $nizRadnika = array($radnik1, $radnik2, $radnik3);


    function maksPlata($nizRadnika)
    {
        $maks = $nizRadnika[0]->getPlata();
        for ($i = 1; $i < count($nizRadnika); $i++) {
            if ($nizRadnika[$i]->getPlata() > $maks) {
                $maks = $nizRadnika[$i]->getPlata();
            }
        }

        return $maks;
    }

    echo maksPlata($nizRadnika);

    echo "<hr>";

    function maksPlataOsoba($nizRadnika)
    {
        $maksOsoba = $nizRadnika[0];
        $maksPlata = $nizRadnika[0]->getPlata();

        foreach ($nizRadnika as $radnik) {
            if ($radnik->getPlata() > $maksPlata) {
                $maksPlata = $radnik->getPlata();
                $maksOsoba = $radnik;
            }
        }
        return $maksOsoba;
    }

    $maksPlataaRadnik = maksPlataOsoba($nizRadnika);
    $maksPlataaRadnik->ispisi();

    echo "<hr>";



    class Autobus
    {

        private $registarskiBrojAutobusa;
        private $brojSedista;

        public function __construct($registarskiBrojAutobusa, $brojSedista)
        {
            $this->setRegistarskiBroj($registarskiBrojAutobusa);
            $this->setBrojSedista($brojSedista);
        }

        public function setRegistarskiBroj($registarskiBrojAutobusa)
        {
            $this->registarskiBrojAutobusa = $registarskiBrojAutobusa;
        }

        public function setBrojSedista($brojSedista)
        {
            $this->brojSedista = $brojSedista;
        }

        public function getRegistarskiBroj()
        {
            return $this->registarskiBrojAutobusa;
        }
        public function getBrojSedista()
        {
            return $this->brojSedista;
        }

        public function ispisi()
        {
            echo "Autobus ima registarski broj: " . $this->getRegistarskiBroj() . "<br>";
            echo "Autobus ima: " . $this->getBrojSedista() . " sedista" . "<br>";
        }
    }


    $autobus1 = new Autobus(11345, 34);
    $autobus2 = new Autobus(33452, 62);
    $autobus3 = new Autobus(42331, 50);

    $nizAutobusa = array($autobus1, $autobus2, $autobus3);

    // funkcija koja vraca ukupan broj sedista u autobusu

    function ukupnoSedista($nizAutobusa)
    {
        $suma = 0;
        foreach ($nizAutobusa as $autobus) {
            $suma += $autobus->getBrojSedista();
        }
        return $suma;
    }

    echo "Ukupan broj sedista autobusa iz niza je: " . ukupnoSedista($nizAutobusa);
    echo "<hr>";

    function maksSedista($nizAutobusa)
    {
        $maksSedBus = $nizAutobusa[0];
        $maksSed = $nizAutobusa[0]->getBrojSedista();
        foreach ($nizAutobusa as $autobus) {
            if ($maksSed < $autobus->getBrojSedista()) {
                $maksSed = $autobus->getBrojSedista();
                $maksSedBus = $autobus;
            }
        }
        return $maksSedBus->ispisi();
    }

    echo "Podaci o vozilu sa maksimalnim brojem sedista iz niza: " . "<br>";
    maksSedista($nizAutobusa);

    echo "<hr>";

    function ljudi($brojLjudi, $nizAutobusa)
    {
        $us = ukupnoSedista($nizAutobusa);
        if ($brojLjudi <= $us) {
            return true;
        } else {
            return false;
        }
    }

    function Isprobaj($nizAutobusa)
    {
        if (ljudi(146, $nizAutobusa) == true) {
            echo "Ljudi se mogu smestiti u autobuse";
        } else {
            echo "Ljudi se ne mogu smestiti u autobuse";
        }
    }

    Isprobaj($nizAutobusa);

    echo "<hr>";

    // 5)

    class FMradio
    {
        private $stanica;
        private $frekvencija;
        private $jacinaTona;


        public function __construct($stanica, $frekvencija, $jacinaTona)
        {
            $this->setStanica($stanica);
            $this->setFrekvencija($frekvencija);
            $this->setJacinaTona($jacinaTona);
        }

        public function setStanica($stanica)
        {
            $this->stanica = $stanica;
        }

        public function setFrekvencija($frekvencija)
        {

            if ($frekvencija >= 87.5 && $frekvencija <= 108) {
                $this->frekvencija = $frekvencija;
            } else {
                echo "frekvencija van dozvoljenog opsega";
            }
        }

        public function setJacinaTona($jacinaTona)
        {
            if ($jacinaTona >= 0 && $jacinaTona <= 20) {
                $this->jacinaTona = $jacinaTona;
            } else {
                echo "Jacina tona van dozvoljenog opsega";
            }
        }


        public function getStanica()
        {
            return $this->stanica;
        }

        public function getFrekvencija()
        {
            return $this->frekvencija;
        }

        public function getJacinaTona()
        {
            return $this->jacinaTona;
        }

        public function promeniZvuk($znak)
        {
            if ($znak == "+") {
                setJacinaTona($this->jacinaTona + 1);
            } else {
                setJacinaTona($this->jacinaTona - 1);
            }
        }

        public function frekvencijaIskljuci()
        {
            $this->frekvencija = 87.5;
        }

        public function ispisiStanicu()
        {
            echo "stanica : " . $this->stanica . "<br>";
        }
    }

    $stanica1 = new FMradio("Radio S2", 88.3, 18);
    $stanica2 = new FMradio("Radio Play", 104.3, 12);
    $stanica3 = new FMradio("Radio In", 99.1, 16);

    $nizRadioStanica = array($stanica1, $stanica2, $stanica3);


    function srednjaFrekvencija($nizRadioStanica)
    {
        $suma = 0;
        $br = 0;
        foreach ($nizRadioStanica as $stanica) {
            $suma += $stanica->getFrekvencija();
            $br++;
        }
        return $suma / $br;
    }


    echo "prosecna vrednost niza frekvencija je : " . srednjaFrekvencija($nizRadioStanica) . "<br>";

    function najbliziMaks($nizRadioStanica)
    {
        $maksObj = $nizRadioStanica[0];
        $maks = $nizRadioStanica[0]->getFrekvencija();
        foreach ($nizRadioStanica as $stanica) {
            if ($stanica->getFrekvencija() > $maks) {
                $maks = $stanica->getFrekvencija();
                $maksObj = $stanica;
            }
        }

        return $maksObj;
    }



    $maksFrek = najbliziMaks($nizRadioStanica);

    echo "Najbliza stanica maks frekvenciji je ";
    $maksFrek->ispisiStanicu();
    echo "<hr>";


    // 6)

    class Krug
    {
        private $poluprecnikKruga;

        public function __construct($poluprecnikKruga)
        {
            $this->setPoluprecnik($poluprecnikKruga);
        }


        public function setPoluprecnik($poluprecnikKruga)
        {
            $this->poluprecnikKruga = $poluprecnikKruga;
        }

        public function getPoluprecnik()
        {
            return $this->poluprecnikKruga;
        }

        public function obimKruga()
        {
            return 2 * $this->poluprecnikKruga * 3.14;
        }

        public function povrsinaKruga()
        {
            return $this->poluprecnikKruga * $this->poluprecnikKruga * 3.14;
        }

        public function upisaniKrug()
        { }
    }

    $krug1 = new Krug(5);
    $krug2 = new Krug(10);
    $krug3 = new Krug(15);
    $krug4 = new Krug(20);

    $nizKrugova = array($krug1, $krug2, $krug3, $krug4);

    echo "Povrsina kruga je: " . "<br>";
    echo $krug1->povrsinaKruga();

    echo "<br>";

    function upisaniKrug($krug1, $krug2)
    {
        if ($krug1->getPoluprecnik() > $krug2->getPoluprecnik()) {
            return true;
        } else {
            return false;
        }
    }

    function rastuci($nizKrugova)
    {
        for ($i = 0; $i < count($nizKrugova) - 1; $i++) {
            if ($nizKrugova[$i]->getPoluprecnik() > $nizKrugova[$i + 1]->getPoluprecnik()) {
                return false;
            }
        }
        return true;
    }


    $r = rastuci($nizKrugova);
    if ($r) {
        echo "Svi krugovi mogu da se upisu u sledeci krug u nizu";
    } else {
        echo "bar jedan ne moze da se upise u sledeci krug u nizu";
    }

    echo "<hr>";

    //    7) 

    class Cipela
    {
        private $naziv;
        private $brojCipele;
        private $nizPrepravki = [];

        public function __construct($naziv, $brojCipele, $nizPrepravki)
        {
            $this->setNaziv($naziv);
            $this->setBrojCipele($brojCipele);
            $this->setNizPrepravki($nizPrepravki);
        }

        public function setNaziv($naziv)
        {
            $this->naziv = $naziv;
        }

        public function setBrojCipele($brojCipele)
        {
            $this->brojCipele = $brojCipele;
        }

        public function setNizPrepravki($nizPrepravki)
        {
            $this->nizPrepravki = $nizPrepravki;
        }

        public function getNaziv()
        {
            return $this->naziv;
        }

        public function getBrojCipele()
        {
            return $this->brojCipele;
        }

        public function getNizPrepravki()
        {
            return $this->nizPrepravki;
        }

        public function zalepi()
        {
            echo "Zalepljena cipela";
            echo "<br>";
        }

        public function prosiri()
        {
            echo "Prosirena cipela";
            echo "<br>";
        }

        public function usij()
        {
            echo "Usivena cipela";
            echo "<br>";
        }
    }


    $cipela1 = new Cipela("chanel", 37, ["Prosiri", "Usij", "Zalepi", "Odlepi"]);

    function radi($cipela1)
    {
        foreach ($cipela1->getNizPrepravki() as $prepravka) {
            if ($prepravka == "Zalepi") {
                $cipela1->zalepi();
            } else if ($prepravka == "Prosiri") {
                $cipela1->prosiri();
            } else if ($prepravka == "Usij") {
                $cipela1->usij();
            } else {
                echo "nepoznata prepravka";
            }
        }
    }

    radi($cipela1);

    echo "<hr>";

    // 8) studenti 

    class Student
    {
        private $jmbg;
        private $ime;
        private $prezime;
        private $nizOcena = [];
        private $prosecnaOcena;

        public function __construct($jmbg, $ime, $prezime, $nizOcena)
        {
            $this->setJmbg($jmbg);
            $this->setIme($ime);
            $this->setPrezime($prezime);
            $this->setNizOcena($nizOcena);
            $suma = 0;
            $br = 0;
            foreach ($nizOcena as $ocena) {
                // ako je ocena manja od 6 ili veca od 10 ocena koja se dodaje sumi je  6 ili vraca vrednost $ocena 
                $suma += $ocena < 6 || $ocena > 10 ? 6 : $ocena;
                $br++;
            }
            $this->prosecnaOcena = $suma / $br;
        }

        public function setJmbg($jmbg)
        {
            if (strlen($jmbg) == 13) {
                $this->jmbg = $jmbg;
            } else {
                echo "jmbg studenta mora sadrzati 13 karaktera";
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
            for ($i = 0; $i < count($nizOcena); $i++) {
                if (
                    $nizOcena[$i] != 6 and $nizOcena[$i] != 7
                    and $nizOcena[$i] != 8 and $nizOcena[$i] != 9 and $nizOcena[$i] != 10
                ) {
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

    

    $student1 = new Student("0706991730044", "Nikola", "Bogdanovic", [6, 8, 9, 9 , 4]);
    $student2 = new Student("0102992735055", "Tijana", "Zivkovic", [7, 9, 9, 10, 8]);
    $student3 = new Student("0706994730045", "Milan", "Bogdanovic", [7, 8, 9, 10, 5]);
    $student4 = new Student("0507997730048", "Stefan", "Stanimirovic", [6, 7, 9, 8, 7]);
    // $student1->ispis();
    $nizStudenata = array($student1, $student2, $student3, $student4);

    function imePrezime($ime, $prezime, $nizStudenata)
    {
        $brojac = 0;
        foreach ($nizStudenata as $student) {
            if ($student->getIme() == $ime && $student->getPrezime() == $prezime) {
                $brojac++;
            }
        }
        return $brojac;
    }

    

    echo " Broj studenata iz niza sa istim imenom i prezimenom: " . imePrezime("Nikola", "Bogdanovic", $nizStudenata);
    echo "<hr>";


    function srednjaOcena($nizStudenata) {
        $suma = 0;
        $br = 0;
        foreach($nizStudenata as $student) {
        $suma += $student->getProsecnaOcena();
        $br++;
        }
        echo $suma/$br;
    }

    echo "Srednja ocena svih ocena studenata je: "  . "<br>";
    srednjaOcena($nizStudenata);
    echo "<br>";
    echo "<hr>";

    // function osrednji($nizStudenata)
    // {
    //     $razlika = abs(srednjaOcena($nizStudenata) - $nizStudenata[0]->getProsecnaOcena());
    //     $osrednji = $nizStudenata[0];
    //     foreach ($nizStudenata as $student)
    //     {
    //         if(abs(srednjaOcena($nizStudenata) - $student->getProsecnaOcena()) < $razlika)
    //         {
    //             $razlika = abs(srednjaOcena($nizStudenata) - $student->getProsecnaOcena());
    //             $osrednji = $student;
    //         }
    //     }
    //     echo "Student čiji je prosek najbliži srednjoj oceni svih studenata:<br>";
    //     $osrednji->ispis();
    // }

    // osrednji($nizStudenata);

    function osrednji($nizStudenata) {
        $najbliziSrednjoj = $nizStudenata[0];

        for($i = 1; $i<count($nizStudenata); $i++) {
            if(abs(srednjaOcena($nizStudenata) - $nizStudenata[$i]->getProsecnaOcena()) >
             abs(srednjaOcena($nizStudenata) - $nizStudenata[0]->getProsecnaOcena())) {
                $najbliziSrednjoj = $nizStudenata[$i];
            }
        }
        return $najbliziSrednjoj;
    }

    $najblizi = osrednji($nizStudenata);
    $najblizi->ispis();
    echo "<hr>";

    function najmanjaOcenaNajboljeg($nizStudenata)
    {
        $najbolji = $nizStudenata[0];
        
        foreach($nizStudenata as $student) {
            if($najbolji->getProsecnaOcena() < $student->getProsecnaOcena()) {
                $najbolji = $student;
            }
        }
        
        $ocene = $najbolji->getNizOcena();
        sort($ocene);
        echo "Najmanja ocena najboljeg studenta je: ";
        echo $ocene[0];
        echo "<br><br>";
        
        // return $najbolji->ispis();

    }

    najmanjaOcenaNajboljeg($nizStudenata);


    echo "<hr>";

    // function najmanjaOcena($nizStudenata)
    // {
    //     $najmanjaOcena = $nizStudenata[0]->getNizOcena()[0];
    //     foreach($nizStudenata as $student)
    //     {
    //         foreach($student->getNizOcena() as $ocena)
    //         {
    //             if ($ocena < $najmanjaOcena)
    //             {
    //                 $najmanjaOcena = $ocena;
    //             }
    //         }
    //     }
    //     return $najmanjaOcena;
    // }

    // echo "Najmanja ocena koju su studenti dobijali je: ";
    // echo najmanjaOcena($nizStudenata);
    // echo "<br><br>";

    function najmanjaOcena($nizStudenata) {
        $najmOcena = $nizStudenata[0]->getNizOcena()[0];
        foreach($nizStudenata as $student) {
            foreach($student->getNizOcena() as $ocena) {
                if($ocena < $najmOcena) {
                    $najmOcena = $ocena;
                }
            }
        }
        return $najmOcena;


    }

echo "Najmanja ocena koju su studenti dobijali je " . najmanjaOcena($nizStudenata) . "<br>";

echo "<hr>";

function najcescaOcena($nizStudenata) {
    $br6 = 0;
    $br7 = 0;
    $br8 = 0;
    $br9 = 0;
    $br10 = 0;

    foreach($nizStudenata as $student) {
        foreach($student->getNizOcena() as $ocena) {
            switch($ocena) {
                case(6): 
                $br6++;
                break;
                case(7): 
                $br7++;
                break;
                case(8): 
                $br8++;
                break;
                case(9): 
                $br9++;
                break;
                case(10): 
                $br10++;
                break;
              
            }
        }
    }
    if ($br6>$br7 AND $br6>$br8 AND $br6>$br9 AND $br6>$br10)
    {
        return 6;
    }
    elseif ($br7>$br6 AND $br7>$br8 AND $br7>$br9 AND $br7>$br10)
    {
        return 7;
    }
    elseif ($br8>$br6 AND $br8>$br7 AND $br8>$br9 AND $br8>$br10)
    {
        return 8;
    }
    elseif ($br9>$br6 AND $br9>$br7 AND $br9>$br8 AND $br9>$br10)
    {
        return 9;
    }
    elseif ($br10>$br6 AND $br10>$br7 AND $br10>$br8 AND $br10>$br9)
    {
        return 10;
    }


}

echo "Najcesca ocena koju su studenti dobijali je: " . najcescaOcena($nizStudenata) . "<br>";  

echo "<hr>";


function rodjeniGodine($nizStudenata, $godina)
{
    foreach($nizStudenata as $student)
    {
        if(intval(substr($student->getJmbg(), 4, 3)) == ($godina % 1000))
        {
            $student->ispis();
        }
    }

}

rodjeniGodine($nizStudenata, 1991);











   
