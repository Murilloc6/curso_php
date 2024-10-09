<?php

    echo "<br><br><br><br>";
    echo "<strong>Aula 9 </strong>";
    echo "<br><br>";

/*
    Criar uma calculadora utiliazndo funções, recebendo 2 numeros como parametro.
    OPERAÇÕES: + - * /
    Retomar o valor par o usuario, salvar em uma outra variavel e exibir este valor.
*/

$num = 10;
$num1 = 1000;
$operacal = "%";

function Calculadora ($num, $operacal, $num1){
    $resultado = 0;

    if ($operacal == "+"){
    $resultado = $num + $num1;
    }

    if ($operacal == "-"){
    $resultado =  $num - $num1;
} 

    if ($operacal == "*"){
    $resultado = $num * $num1;
} 

    if ($operacal == "/"){
    $resultado = $num / $num1;
}

    if ($operacal == "%"){
        $resultado = $num * $num1 / 100;
    }

    return $resultado;

}

$resultado = calculadora($num, $operacal, $num1);
 echo "O resultado de: $num $operacal $num1 = $resultado";
 echo "<br><br><br><br>";
/*
    UTILIZAR FUNÇÕES 
    Crie um sistema bancario contendo as seguintes operações 

    Deposito, Saque, Extrato (Saldo)
*/
echo "<strong> Sicredo </strong>";
echo "<br>";
$operacao = "+";
$valor = 100;

function Sicredo (&$saldo, $operacao, $valor){
    $resultado = 0;
    $saldo = 1000;

    if ($operacao == "+"){
        $resultado = $saldo + $valor;
        }

    if ($operacao == "-"){
        $resultado = $saldo - $valor;
    }
        return $resultado;
}
Sicredo ($saldo, $operacao, $valor);
echo "Seu saldo atual é de: $resultado";


