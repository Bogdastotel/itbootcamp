<?php

class Vozilo
{
	//Atributi u roditeljskoj klasi vozilo
	private $boja;
	private $tip;
	
	public function __construct($boja, $tip)
	{
		$this->setBoja($boja);
		$this->setTip($tip);
	}
	
	public function getBoja()
	{
		return $this->boja;
	}
	
	public function getTip()
	{
		return $this->tip;
	}
	
	public function setBoja($boja)
	{
		$this->boja = $boja;
	}
	
	public function setTip($tip)
	{
		$this->tip = $tip;
	}
	
	public function ispisVozila()
	{
		echo "Tip: " . $this->getTip() . 
		" Boja: " . $this->getBoja() . "<br>";
	}
}

class Automobil extends Vozilo
{
  
	private $regBr;
	
	public function __construct($boja, $regBr)
	{
		$this->setBoja($boja);
		$this->setTip("automobil");
		$this->setRegBr($regBr);
	}
	
	public function setRegBr($regBr)
	{
		$this->regBr = $regBr;
	}
	
	public function getRegBr()
	{
		return $this->regBr;
	}
	
	public function ispisiAuto()
	{
		echo "Tip: " . $this->getTip() .
		" Boja: " . $this->getBoja() .
		" Registarski broj: " . $this->getRegBr();
	
		//echo $this->ispisVozila() . 
		// " Registarski broj: " . $this->getRegBr();
	}
}

$obj = new Vozilo("crvena", "Bicikla");
$obj->ispisVozila();

$obj1 = new Automobil("plava", "123-456");
$obj1->ispisiAuto();

class Kamion extends Vozilo {

    private $brojOsovina;

    public function __construct($tip, $boja, $brojOsovina)
    {
        $this->setTip($tip);
        $this->setBoja($boja);
        $this->setBrojOsovina($brojOsovina);
    }

    public function setBrojOsovina($brojOsovina) {
        $this->brojOsovina = $brojOsovina;
    }

    public function getBrojOsovina() {
        return $this->brojOsovina;
    }
 
    public function ispisiKamion() {
        echo "Kamion je tipa: " . $this->getTip() . ";" . " Kamion je boje: " . $this->getBoja() . ";" . " Broj osovina kamiona: " . $this->getBrojOsovina() . "<br>";
    }


}

class Motocikl extends Vozilo {

    private $kubikaza;

    public function __construct($tip, $boja, $kubikaza)
    {   
        $this->setTip($tip);
        $this->setBoja($boja);
        $this->setKubikaza($kubikaza);
    }

    public function setKubikaza($kubikaza) {
        $this->kubikaza = $kubikaza;
    }

    public function getKubikaza() {
        return $this->kubikaza;
    }
 
    public function ispisiMotocikl() {
        echo "Motocikl je tipa: " . $this->getTip() . ";" . " Motocikl je boje: " . $this->getBoja() . ";" . " Kubikaza motora je: " . $this->getKubikaza() . "<br>";
    }


}

echo "<hr>";

$kamion1 = new Kamion("kamion", "narandzasta", 4);
$kamion2 = new Kamion("kamion","zelena", 6);

$kamion1->ispisiKamion();


$nizKamiona = array($kamion1, $kamion2);

$motocikl1 = new Motocikl("motocikl", "plava", 1000);
$motocikl2 = new Motocikl("motocikl","zelena", 600);

$motocikl1->ispisiMotocikl();

echo "<hr>";






?>