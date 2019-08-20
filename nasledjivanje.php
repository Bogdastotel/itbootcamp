<?php

class Vozilo
{

    public $boja;
    public $tip;

    public function __construct($boja,$tip) 
    {
        $this->boja = $boja;
        $this->tip = $tip;
    }

    public function ispisVozila()
    {
        echo "<p>" .  "Tip vozila: " . $this->getTip() .  "</p>" . "<br>";
        echo "<p>" .  "Boja vozila: " . $this->getBoja()() .  "</p>" . "<br>";
        
    }

    public function setBoja($boja) {
        $this->boja = $boja;
    }
    public function setTip($tip) {
        $this->tip = $tip;
    }
    public function getBoja() {
        return $this->boja;
    }
    public function getTip() {
        return $this->tip;
    }
}


class Automobil extends Vozilo
{
    public $regBr;
    public function __construct($boja,$regBr)
    {
        
        setBoja($boja);
        setTip('automobil');
        setRegBr($regBr);
        
    }
    
    public function setRegBr($regBr) {
        $this->regBr = $regBr;
    }
    public function getRegBr() {
        return $this->regBr;
    }

}

