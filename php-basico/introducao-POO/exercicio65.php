<?php
    class Gerente{
        public function __construct(
            public int $id =  0,
            public String $nome = '',
            public String $alocacao =  '',
            public float $salario =  0,
            public int $quantidadeDeSubordinados =  0
        ){}

        public function __destruct(){
            echo 'Esse objeto está sendo destruido';
        }

        public function __toString(){
            $jsonString = json_encode($this);
            return $jsonString;
        }

        public function getId():int
        {
            return $this->id;
        }

        public function getNome():string
        {
            return $this->nome;
        }
        
        public function getAlocacao():string
        {
            return $this->alocacao;
        }

        public function getSalario():float
        {
            return $this->salario;
        }

        public function getQuantidade():int
        {
            return $this->quantidadeDeSubordinados;
        }

        public function setId($id)
        {
            $this->id = $id;
        }

        public function setNome($nome)
        {
            $this->nome = $nome;
        }
        
        public function setAlocacao($alocacao)
        {
            $this->alocacao = $alocacao;
        }

        public function setSalario($salario)
        {
            $this->salario = $salario;
        }

        public function setQuantidade($quantidadeDeSubordinados)
        {
            $this->quantidadeDeSubordinado = $quantidadeDeSubordinados;
        }
    }

    function insereGerente(Gerente $gerente):array
    {
        $dadosGerentes = array(
            'Id' => $gerente->getId(),
            'Nome' => $gerente->getNome(),
            'Alocacao' => $gerente->getAlocacao(),
            'Salario' => $gerente->getSalario(),
            'Quantidade de subordinados'=> $gerente->getQuantidade()
        );

        return $dadosGerentes;
    }

    $gerente = new Gerente(3,'Paula','Gerente',2000,20);
    echo $gerente;
    
?>