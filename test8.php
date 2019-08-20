<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <style>
    .span1 {
        color: blue;
    }
    .span2 {
        color: red;
    }
    
    
    
    </style>
</head>
<body>
<?php

class Kamion {
    private $registarskiBroj;
    private $nosivost;

    public function __construct($registarskiBroj , $nosivost)
    {
        $this->setRegistarskiBroj($registarskiBroj);
        $this->setNosivost($nosivost);
    }

    public function setRegistarskiBroj($registarskiBroj) {
        if(strlen($registarskiBroj) >= 5) {
            $this->registarskiBroj = $registarskiBroj;
        }
        else if (strlen($registarskiBroj) < 5) {
            echo "Registarski broj mora biti sa najmanje 5 karaktera" . "<br>";
        }

    }

    public function setNosivost($nosivost) {
        if($nosivost > 0) 
        {
            $this->nosivost = $nosivost;
        }
        else if ($nosivost <= 0)
        {
            $this->nosivost = 0;
        }
    }
        
    
    public function getRegistarskiBroj() {
        return $this->registarskiBroj;
    }

    public function getNosivost() {
        return $this->nosivost;
    }

    public function ispisiKamion() {
       echo "<p>" . "Registarski broj vozila je: " . "<span class='span1'>" . $this->getRegistarskiBroj() . "</span>"  . " " .
       "Nosivost vozila je: " .  "<span class='span2'>" . $this->getNosivost() . "</span>" .  "</p>";
}   

}
$kamion1 = new Kamion(11122, 22);
$kamion2 = new Kamion(1244322, 28);
$kamion3 = new Kamion(345762, 34);


$nizKamiona = array($kamion1, $kamion2, $kamion3);

function ispisSvihKamiona($nizKamiona) {
    
    foreach($nizKamiona as $kamioni) {
        echo $kamioni->ispisiKamion();
    }
}

ispisSvihKamiona($nizKamiona);


function podrzavaNosivost($nizKamiona, $tezinaPaketa) {

    foreach ($nizKamiona as $kamion) {
        if($kamion->getNosivost() >= $tezinaPaketa)
        {
         return true;
        }
}    
    return false;

}



if(podrzavaNosivost($nizKamiona, 36)) {
    echo "Kamion podrzava nosivost" . "<br>";
}
else {
    echo "Kamion ne podrzava nosivost" . "<br>";
}













?>





</body>
</html>




















