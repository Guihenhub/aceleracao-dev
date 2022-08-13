<?php
    require_once('Usuarios/Usuario.php');
    require_once('Usuarios/Livro.php'); 
    
    class Reserva{
        public function __construct(
            private Usuario $usuario,
            private Livro $livro,
            private bool $status
        ){}
    }
?>