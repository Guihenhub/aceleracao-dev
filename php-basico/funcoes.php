<?php
    echo soma(1,2)."<br>";
    echo par(2)."<br>";
    echo qtdCaracteres("Ola mundo")."<br>";

    function qtdCaracteres($string){
        return strlen($string);
    }

    function par($n1){
        return ($n1 % 2 == 0) ? "Par" : "Impar";
    }

    function soma($n1, $n2){
        return $n1 + $n2;
    }
?>