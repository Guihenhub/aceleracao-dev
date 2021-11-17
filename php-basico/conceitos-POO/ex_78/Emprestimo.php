<?php
   require_once('Usuarios/Usuario.php');
   require_once('Items/Item.php');

    class Emprestimo{
        public function __construct(
            private Usuario $usuario,
            private Item $item,
            private bool $itemRenovado,
            private string $dataExpiracao,
            private bool $status
        ){}

        public function setItemRenovado(bool $itemRenovado){
            $this->itemRenovado = $itemRenovado;
        }

        public function setDataExpiracao(string $dataExpiracao){
            $this->dataExpiracao = $dataExpiracao;
        }
    }
?>