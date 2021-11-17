<?php

    class Nota{
        private int $id;
        private string $nome;
        private string $descricao;
        private int $quantidadeComprada;
        private float $precoVenda;
        private float $desconto;

        public function __construct(int $id = 0, $nome = '', $descricao = '', $quantidadeComprada = 0, $precoVenda = 0, $desconto = 0){
            $this->id = $id;
            $this->nome = $nome;
            $this->descricao = $descricao;
            $this->quantidadeComprada = $quantidadeComprada;
            $this->precoVenda = $precoVenda;
            $this->desconto = $desconto;
        }

        public function calcularFatura():string{
            return $this->precoVenda * $this->quantidadeComprada;
        }

        public function getId():int{
            return $this->id;
        }

        public function getNome():string{
            return $this->nome;
        }

        public function getDescricao():string{
            return $this->descricao;
        }

        public function getQuantidadeComprado():int{
            return $this->quantidadeComprada;
        }

        public function getPrecoVenda():float{
            return $this->precoVenda;
        }

        public function getDesconto():float{
            return $this->desconto;
        }

        public function setPrecoVenda(float $precoVenda){
            $this->precoVenda = $precoVenda;
        }        

        public function setDescricao(string $descricao){
            $this->descricao = $descricao;
        }
    }
    
    $nota = new Nota(5,'Ventilador', 'Rápido',10,5,1);
    $nota->setPrecoVenda(3);
    $nota->setDescricao('Muito top');

    $dados = array(
        'id'=> $nota->getId(),
        'nome'=> $nota->getNome(),
        'descricao'=> $nota->getDescricao(),
        'quantidade' => $nota->getQuantidadeComprado(),
        'precoVenda' => $nota->getPrecoVenda(),
        'desconto' => $nota ->getDesconto(),
        'calculoFatura' => $nota-> calcularFatura()
    );
    
    var_dump($dados);
?>