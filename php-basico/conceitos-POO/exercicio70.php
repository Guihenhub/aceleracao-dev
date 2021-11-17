<?php
    require_once('ex_68/Animal.php');
    require_once('ex_69/ItemOrcamento.php');
    require_once('ex_69/ItemOrcamentoComplexo.php');

    interface AnimalOrcamento extends Animal{
        public function orcamentoGastosAnimal():ItemOrcamentoComplexo ;
    }

    class AnimalOrcamentoClass implements AnimalOrcamento{
        public function __construct(
            private string $nomeEspecie,
            private string $nomeAnimal,
            private ItemOrcamentoComplexo $itemOrcamentoComplexo
        ){}

        public function getNomeAnimal(): string
        {
            return $this->nomeAnimal;
        }

        public function getNomeEspecie(): string
        {
            return $this->nomeEspecie;
        }

        public function orcamentoGastosAnimal():ItemOrcamentoComplexo{
            return $this->itemOrcamentoComplexo;
        }
    }

        
    function animaisOrcamento($animaisOrcamentos):array{

        $listaAnimais = array();
        foreach($animaisOrcamentos as $animalOrcamento){
            $vacina = $animalOrcamento->orcamentoGastosAnimal()->encontraItem('vacina W');

            if(isset($vacina)){
                array_push($listaAnimais,$animalOrcamento);
            }
        }

        return $listaAnimais;
    }

    $itemOrcamento1 = new ItemOrcamento('vacina W',10);
    $itemOrcamento2 = new ItemOrcamento('vacina z',10);
    $itemOrcamento3 = new ItemOrcamento('vacina y',10);

    $listaItemOrcamento = array($itemOrcamento1,$itemOrcamento2,$itemOrcamento3);
    $listaItemOrcamento2 = array($itemOrcamento3);

    $itemOrcamentoComplexo = new ItemOrcamentoComplexo('Lista',30,$listaItemOrcamento);
    $itemOrcamentoComplexo2 = new ItemOrcamentoComplexo('Lista',100,$listaItemOrcamento2);

    $animalOrcamento1 = new AnimalOrcamentoClass('Cavalo','Pedro', $itemOrcamentoComplexo);
    $animalOrcamento2 = new AnimalOrcamentoClass('Baleia','Camila', $itemOrcamentoComplexo2);
    $animalOrcamento3 = new AnimalOrcamentoClass('Egua','Giubarte', $itemOrcamentoComplexo2);

    $listaAnimais = array($animalOrcamento1,$animalOrcamento2,$animalOrcamento3);

    var_dump(animaisOrcamento($listaAnimais));
?>