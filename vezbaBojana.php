<?php
    function petlja($a, $b)
    {
        while($a>0)
        {
            $a=$a/10;
            echo $a . "<br>";
            $b++;
            echo $b . "<br>";
            echo "________<br>";
        }
        return $a+$b;
    }
    echo petlja(158,0);
?>