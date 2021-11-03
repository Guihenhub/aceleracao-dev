<?php
    function divisao($dividendo, $divisor){
        if($divisor != 0):
            echo $dividendo/$divisor;
        else:
            echo "DIVISÂO POR ZERO";
        endif;
    }
?>