<?php
    require_once('./Produto.php');
    require_once('./Perecivel.php');
    require_once('./InformacaoNulaException.php');

    class Leite extends Produto implements Perecivel{
        private $marca;
        private $volume;
        private  DateTime $dataValidade;

        public function __construct($codigo, $preco, $marca, $volume, $dataValidade)
        {
            $parametros = array('codigo' => $codigo, 'preco' => $preco, 'marca' => $marca, 'volume' => $volume, 'dataValidade' => $dataValidade);

            if(in_array(null, $parametros)){
                foreach($parametros as $nome => $valor){
                    if($valor == null){
                        throw new InformacaoNulaException('Parametro nulo', paremetro: $nome );
                    }
                }
            } 

            parent::__construct($codigo, $preco);
            $this->marca = $marca;
            $this->volume = $volume;
            $this->dataValidade = $dataValidade;
        }

        public function estaVencido():bool
        {
            $dataAtual = new DateTime('NOW');
            return $this->dataValidade < $dataAtual;
        }
    }
?>