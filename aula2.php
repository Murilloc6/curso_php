<?php
// FALTA FAZER a validação da IDADE e do DINHEIRO 
// Se não tiver idade informar que precisa ser maior de 18
// Se não tiver dinheiro precisa informar o valor de 1k
// Se não tiver idade e nem dinheiro informar.
$idadepessoa=18;
$dinheiroNaCarteira=1100;
if ($idadepessoa >= 18 && $dinheiroNaCarteira >= 1000){
    echo "Parabéns, você pode fazer a carteira de motorista! <br>";
}elseif ($idadepessoa < 18 && $dinheiroNaCarteira >= 1000){
    echo "Você não possui idade mínima para realizar sua carteira de motorista! <br>";
}
elseif ($idadepessoa >= 18 && $dinheiroNaCarteira < 1000){
    echo "è necessário R$ 1.000,00, tente novamente.";
}
else {
    echo "Você não tem os requisitos mínimos para realizar sua carteira de motorista! <br>";
}

// Aula 2 recuperada!

    ?>
