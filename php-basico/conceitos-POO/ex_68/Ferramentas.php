<?php
    interface Ferramentas{
        public function filtraEspecia(array $completo, string $especieFiltrar):array;
        public function classificaEspecies(array $completo):array;
    }

  

    class FerramentasClass implements Ferramentas{
        public function filtraEspecia(array $completo, string $especieFiltrar):array{
            $novoVetor = array();

            foreach($completo as $animal){
                if($animal->getNomeEspecie() == $especieFiltrar){
                    array_push($novoVetor, $animal);
                }
            }

            return $novoVetor;
        }

        public function classificaEspecies(array $completo):array{
            $especiesEncontradas = array();
       
            foreach($completo as $animal){
                if(!in_array($animal->getNomeEspecie(), $especiesEncontradas)){
                    array_push($especiesEncontradas,$animal->getNomeEspecie());
                };
            }

            return $especiesEncontradas;
        }
    }
?>