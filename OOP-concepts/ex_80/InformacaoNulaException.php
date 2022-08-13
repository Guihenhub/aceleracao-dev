<?php
    class InformacaoNulaException extends Exception{
        private $parametro;
        
        public function __construct(string $message = NULL, int $code = 0 , Throwable $previous = null, $paremetro)
        {
            parent::__construct($message, $code, $previous);
            $this->parametro = $paremetro;
        }
        
        public function getParametro(){
            return $this->parametro;
        }
    }
?>