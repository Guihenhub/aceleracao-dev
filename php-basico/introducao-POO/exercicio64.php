<?php
    interface Servicos{
        public function calculaSalario(int $diasTrabalhados, String $cargo):float;
        public function calculaSalarioMaisGratificacao(int $diasTrabalhados, String
        $valorGravacao);
    }

    class funcionarios implements Servicos{
        public function calculaSalario(int $diasTrabalhados, String $cargo):float{
            $salarioBase = 6500;
            $valorDiario = $salarioBase/30;

            $valorRecebido = $valorDiario * $diasTrabalhados;

            if($diasTrabalhados < 15){
                $valorRecebido *= 0.7;
                echo "Salario com desconto de 30%, o valor recebido foi {$valorRecebido}"."<br>";
            }else{
                echo "Salario sem desconto, o valor recebido foi {$valorRecebido}"."<br>";
            }

            return $valorRecebido;
        }
        
        public function calculaSalarioMaisGratificacao(int $diasTrabalhados, string $valorGravacao){
            $salarioBase = 4970;
            $valorDiario = $salarioBase/30;

            $porcentagem = 0;

            if($diasTrabalhados > 9 && $diasTrabalhados < 15){
                $porcentagem = 20;
            }elseif($diasTrabalhados > 15 && $diasTrabalhados < 20){
                $porcentagem = 50;
            }
        
            echo "Salário completo mais + {$porcentagem} % <br>";
            echo $valorDiario*$salarioBase*$porcentagem/100;
            echo "<br>";
        }
    }
    
    $funcionario = new funcionarios();
    $funcionario->calculaSalario(14, 'Programador');
    $funcionario->calculaSalario(17, 'Programador');
    $funcionario->calculaSalarioMaisGratificacao(14, 'Programador');
    $funcionario->calculaSalarioMaisGratificacao(17, 'Programador');
?>