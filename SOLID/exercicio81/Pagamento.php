<?php
    spl_autoload_register(function ($nome) {
        require_once($nome . '.php');
    });
    
    interface Pagamento{
        public function status();
        public function verificaMeioPagamento():bool;
        public function mostraQuantidadeParcelas():bool;
        public function aplicaDescontas():bool;
        public function aplicaJuros():bool;
        public function aplicaTaxa():bool;
        public function removeTaxa():bool;
        public function atualizaStatus():string;
        public function criaIdentificar(Aluno $aluno, string $hash):bool;
    }