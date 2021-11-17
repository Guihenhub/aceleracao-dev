<?php
    require_once('./Compactador.php');

    class Rar implements Compactador{
        public function compactar()
        {
            echo "Compactando em Rar";
        }
    }
?>