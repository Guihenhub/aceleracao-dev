<?php
    class Edificio extends Imovel{
        private int $totalDeAndares;
        private int $totalDePortas;

        public function __construct($cor, $totalDePortas, $totalDeAndares, $portas){
            parent::__construct($cor, $portas);
            $this->totalDeAndares = $totalDeAndares;
            $this->totalDePortas = $totalDePortas;
        }

        public function adicionarPorta(Porta $porta)
        {
            $this->totalDePortas++;
            array_push($this->portas, $porta);
        }

        public function adicionarAndar(){
            $this->totalDeAndares++;
        }

        public function totalDeAndares():int{
            return $this->totalDeAndares;
        }
    }
?>