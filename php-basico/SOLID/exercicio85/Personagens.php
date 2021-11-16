<?php
    require_once("./Armas.php");

    abstract class Personagem{
        protected Arma $arma;

        public function __construct(Arma $arma)
        {
            $this->arma = $arma;            
        }

        public abstract function lutar();
    }

    class Rei extends Personagem{ 
        public function lutar()
        {
            $this->arma->usarArma();
        }
    }

    class Rainha extends Personagem{ 
        public function lutar()
        {
            $this->arma->usarArma();
            $this->arma->usarArma();
        }
    }

    class Duende extends Personagem{ 
        public function lutar()
        {
            $this->arma->usarArma();
            $this->arma->usarArma();
            $this->arma->usarArma();
        }
    }

    class Guerreiro extends Personagem{ 
        public function lutar()
        {
            $this->arma->usarArma();
            $this->arma->usarArma();
            $this->arma->usarArma();
            $this->arma->usarArma();
            $this->arma->usarArma();
        }
    }
?>