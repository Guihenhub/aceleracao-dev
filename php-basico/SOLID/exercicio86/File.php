<?php
    require_once('./Compactador.php');

    class File{
        public function __construct(
            private int $size
        ){}
        
        public function compactar(Compactador $conpactador)
        {
            $conpactador->compactar();
        }
    }
?>