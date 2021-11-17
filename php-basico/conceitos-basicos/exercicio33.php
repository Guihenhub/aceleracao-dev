<?php
    $codigoPagamento = '';
    $valorInicial = 3000;
    $valor = 1;

    function mostrarMensagem($valorInicial,  $codigoPagamento){
        $valorFinal = calculaValor($valorInicial,$codigoPagamento);
        $tipoPagamento = mapearCodigoNomePagamento($codigoPagamento);
        echo "Forma de pagamento escolhida: $tipoPagamento, valor original R$: $valorInicial - Valor Final :$valorFinal";
        echo "<br>";   
    }
    
    function calculaValor($valorInicial,  $codigoPagamento){
        $valor = 0;

        switch ($codigoPagamento):
            case 1:
                $valor = 0.9*$valorInicial;
                break;
            case 2:
                $valor = 0.95 * $valorInicial;
                break;
            case 3:
                $valor =  $valorInicial;
                break;
            case 4:
                $valor = 1.1 * $valorInicial;
                break;
        endswitch;
        
        return $valor;
    }

    function mapearCodigoNomePagamento($codigoPagamento){
        $dicionario = array(1 => 'á vista', 2 => 'á vista no cartão de crédito', 3 => '2 vezes' , 4 => '4 vezes');
        
        return $dicionario[$codigoPagamento];
  }

    mostrarMensagem(3000, 1);
    mostrarMensagem(3000, 2);
    mostrarMensagem(3000, 3);
    mostrarMensagem(3000, 4);
?>