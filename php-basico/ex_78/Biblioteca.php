<?php
    require_once('Usuarios/Usuario.php');
    Require_once('Usuarios/Livro.php'); 
    require_once('Emprestimos.php');

    class Biblioteca{
        public function __construct(
            private array $listaUsuarios,
            private array $listaItems
        ){}

        public function adicionarEmprestimo(Emprestimo $emprestimo){
            array_push($this->listaEmprestimos,$emprestimo);
        }

            
        public function emprestar(Usuario $usuario, Livro $livro){
            $emprestimo =  new Emprestimo($usuario, $livro, false, 'Dia atual + 7', true);

            $usuario->setListaEmprestimos($emprestimo);
            $livro->setListaEmprestimos($emprestimo);
        }

             
        public function devolver(Usuario $usuario, Livro $livro){
            $usuario->setListaEmprestimos(null);
            $livro->setListaEmprestimos(null);
        }

        public function renovar(Usuario $usuario, Livro $livro){
            $emprestimo =  new Emprestimo($usuario, $livro, true, 'Dia atual + 7', true);

            $usuario->setListaEmprestimos($emprestimo);
        }

        public function punirAtrasos(){
            foreach($this->listaUsuarios as $usuario){
                $usuario->punirAtrasos();
            }
        }   

        public function limparReservas(){
            foreach($this->listaUsuarios as $usuario){
                $usuario->setListaReservas(null);
            }
        }
    }
?>