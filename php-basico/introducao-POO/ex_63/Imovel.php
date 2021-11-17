<?php
    class Imovel{
            public function __construct(
                protected string $cor = "Branca",
                protected array $portas = array(),
            ){}

            public function pinta(string $cor)      
            {
                $this->cor = $cor;
            }

            public function totalDePortas():int{
                return sizeOf($this->portas);  
            }

            public function quantasPortasEstaoAbertas():int{
                $qtdPortasAbertas = 0;

                foreach($this->portas as $porta){
                    if($porta->getAberta()){
                        $qtdPortasAbertas++;
                    }
                }

                return $qtdPortasAbertas;
            }

            public function getCor():string{
                return $this->cor;
            }

            public function getPortas():array{
                return $this->portas;
            }

        }
?>