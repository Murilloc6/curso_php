<?php

// TEMA DA AULA 9 
// TO FAZENDO NA 10 PRA NAO CONFUNDIR OS CODIGOS

/*
    UTILIZAR FUNÇÕES 
    Crie um sistema bancario contendo as seguintes operações 

    Deposito, Saque, Extrato (Saldo)
*/
echo "<strong> Sicredo </strong>";
echo "<br>";


function Sicredo($valor, $operacao, $saldoAtual) {

    $saldo = $saldoAtual;

    if ($operacao == "Extrato") {
        return $saldo;
    }

    if ($operacao == "Saque") {
        // $saldo = $saldo - $valor;
        $saldo -= $valor;
    }

    if ($operacao == "Depósito") {
        // $saldo = $saldo + $valor;
        $saldo += $valor;
    }
    
    if ($operacao == "Saque" && $saldoAtual<$valor){
        $saldo = "Saldo Indisponível! Saldo atual: $saldoAtual";
    }

    if ($operacao == "Depósito" && $valor<=0){
       $saldo = "O saldo que você inseriu esta inválido.";
    }
    if ($operacao == "Saque" && $valor = ""){
        $saldo = "O saldo que você inseriu esta inválido.";
    }
    return $saldo;
}

$saldoAtual = 500; // tem um valor inicial de 500.
echo "Valor inicial: $saldoAtual<br><br>";

$valor = 100;
$operacao = "Depósito";
$saldoAtual = Sicredo($valor, $operacao, $saldoAtual);
echo "$operacao = $valor, <br>Extrato: $saldoAtual<br><br>";

$valor = 100;
$operacao = "Depósito";
$saldoAtual = Sicredo($valor, $operacao, $saldoAtual);
echo "$operacao = $valor, <br>Extrato: $saldoAtual<br><br>";

$valor = 100;
$operacao = "Saque";
$saldoAtual = Sicredo($valor, $operacao, $saldoAtual);
echo "$operacao = $valor, <br>Extrato: $saldoAtual<br><br>"; // 400

$valor = 1000;
$operacao = "Saque";
$saldoAtual = Sicredo($valor, $operacao, $saldoAtual);
echo "$operacao = $valor, <br>Extrato: $saldoAtual<br><br>";


/*
    Criar duas funções onde cada uma recebe um parametro (String)
    E retorna um valor boolean (true || false, 0 || 1)
    OBJETIVO: Validar um CPF e um CNPJ

    DICA para o nome da função: isValid, isValidCNPJ.

    CPF: "00000000000" : 11 Dígitos
    CNPJ: "00000000000000" : 14 Dígitos
*/

function isValidCPF($CPF){

    // Código aqui

    return true;
}

function isValidCNPJ($CNPJ){

    // Código aqui

    return true;
}

$CPF = "098.543.191-89";
$cpfValido = isValidCPF($cpf);

if ($cpfValido){
    echo "O CPF informado $cpf é Valido!";
}else {
    echo "O CPF informado: $cpf é Invalido";
}


// Site: Devcontratado.com
