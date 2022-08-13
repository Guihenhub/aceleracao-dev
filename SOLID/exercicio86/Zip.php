<?php
    require_once('./Compactador.php');

    class Zip implements Compactador{
        public function compactar()
        {
            echo "Compactando em Zip";
        }
    }
?>