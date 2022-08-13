<?php
    spl_autoload_register(function ($nome) {
        require_once($nome . '.php');
    });
    
    class cartao implements Pagamento{
        private int $id;
        private string $tipo;
        private Conta $conta;

        public function status()
        {
            echo "Mostrando status";

        }

        public function verificaMeioPagamento():bool{
            echo 'Verificando meio de pagamento';
            return true;
        }
        public function mostraQuantidadeParcelas():bool{
            echo 'Mostrando quantidade de parcelas';
            return true;
        }
        public function aplicaDescontas():bool{
            echo "Aplicando descontos";
            return true;
        }
        public function aplicaJuros():bool{
            echo "Aplicando juros";
            return true;
        }
        public function aplicaTaxa():bool{
            echo "Aplicando taxa";
            return true;
        }
        public function removeTaxa():bool{
            echo "Removendo taxa";
            return true;
        }
        public function atualizaStatus():string{
            echo "Atualizando status";
            return true;
        }

        public function criaIdentificar(Aluno $aluno, string $hash):bool{
            echo "Criando identificador";
            return true;
        }
    }

  
   
   
?>