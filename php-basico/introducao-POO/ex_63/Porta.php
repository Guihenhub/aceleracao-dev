<?php
    class Porta{
        public function __construct(
            private bool $aberta = false,
            private string $cor = 'Preto',
            private float $dimensaoX = 0,
            private float $dimensaoY = 0,
            private float $dimensaoZ = 0
        ){}
        
        public function abre()
        {
            $this->aberta = true;
        }

        public function fecha()
        {
            $this->aberta = false;
        }

        public function pinta(string $cor)
        {
            $this->cor = $cor;
        }

        public function getCor():string{
            return $this->cor;
        }

        public function getAberta():bool
        {
            return $this->aberta;
        }

        public function getDimensaoX():float{
            return $this->dimensaoX;
        }

        public function getDimensaoY():float{
            return $this->dimensaoY;
        }

        public function getDimensaoZ():float{
            return $this->dimensaoZ;
        }
    }
?>