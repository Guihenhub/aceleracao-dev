<?php
    interface Arma{
        public function usarArma();
    }

    class ArcoeFlexa implements Arma{
        public function usarArma(){
            echo 'Atira flexa';
        }
    }

    class Espada implements Arma{
        public function usarArma(){
            echo 'Dá uma espadada';
        }
    }
    
    class Faca implements Arma{
        public function usarArma(){
            echo "Dá uma facada";
        }   
    }

    class Maxado implements Arma{
        public function usarArma(){
            echo "Dá uma maxadada";
        }
    }
?>