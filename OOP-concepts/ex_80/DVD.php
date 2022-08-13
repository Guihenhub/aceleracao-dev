<?php
    require_once('./Produto.php');
    require_once('./InformacaoNulaException.php');

    class DVD extends Produto{
        private $titulo;
        private $ano;

        public function __construct($codigo, $preco,$titulo, $ano)
        {

            $parametros = array('codigo' => $codigo, 'preco' => $preco, 'titulo' => $titulo, 'ano' => $ano);

            if(in_array(null, $parametros)){
                foreach($parametros as $nome => $valor){
                    if($valor == null){
                        throw new InformacaoNulaException('Parametro nulo', paremetro: $nome );
                    }
                }
            } 

            parent::__construct($codigo, $preco);
            $this->titulo = $titulo;
            $this->ano = $ano;
        }

        public function getAno()
        {
            return $this->ano;
        }
    }
?>