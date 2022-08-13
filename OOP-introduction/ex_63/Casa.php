<?php
    
    class Casa extends Imovel{
        public function quantasPortasEstaoAbertas():int{
            $qtdPortasAbertas = 0;

            foreach($this->portas as $porta){
                if($porta->getAberta()){
                    $qtdPortasAbertas++;
                }
            }

            return $qtdPortasAbertas;
        }
    }
?>