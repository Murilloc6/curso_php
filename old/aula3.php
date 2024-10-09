<?php

$nome = "Yasmin";
$sobrenome = "Carro Vrum Vrum";
echo "Olá ".$nome. " ".$sobrenome. "!<br>";
echo "<br>";

echo "Quantas letras compõem o seu nome: ";
echo strlen($nome); 
echo "<br>";
echo "Quantas letras compõem o seu sobrenome: ";
echo strlen($sobrenome);
echo "<br>";
echo "Quantas letras compõem o seu nome inteiro: ";
echo strlen($nome. " ".$sobrenome);
echo "<br><br>";

echo strtoupper ($nome);
echo "<br><br>";

echo strtolower ("TEXTO EM CAIXA ALTA!");
echo "<br><br>";

echo strrev("baixo");
// 'echo strrev' inverter a palavra de tras pra frente 
echo "<br><br>";

echo "Tudo sobre a data atual <br>";
echo date("d/m/Y");
echo "<br>";
echo date ("H:i:s");
echo "<br>";
echo date ("d/m/Y H:i:s A");    
echo "<br><br>";
echo date("w"); 
echo "<br>";

// 0 Domingo - 6 Sábado
// Crie uma variavel para armazenar o valor da função date("w")
// Utilize IF para validar qual é o dia da semana e exibir para o usuário,
// sendo que o 0 é domingo, e 6 é sábado.

$DiasDaSemana = date("w");
if ($DiasDaSemana == 0){
echo "Domingo";
}elseif ($DiasDaSemana == 1){
    echo "Segunda-Feira";

}elseif ($DiasDaSemana == 2){
    echo "Terça-Feira";

}elseif ($DiasDaSemana == 3){
    echo "Quarta-Feira";

}elseif ($DiasDaSemana == 4){
    echo "Quinta-Feira";

}elseif ($DiasDaSemana == 5){
    echo "Sextou";

}elseif ($DiasDaSemana == 6){
    echo "Sábado";
}
echo "<br><br>";

switch ($DiasDaSemana) {
    case 0:
        echo "Domingo";
        break;

        case 1:
        echo "Segunda-Feira";
        break; 

        case 2:
        echo "Terça-Feira";
        break;

        case 3:
            echo "Quarta-Feira";
            break;

        case 4:
            echo "Quinta-Feira";
            break;
        
        case 5:
            echo "Sextou";
            break;
        
        case 6:
            echo "Sábado";
            break;
    
    default:
        // Se chegou aqui foi poruqe não 'casou' com nenhum valor
}

for ($i=0; $i <= 10 ; $i++) {
    echo $i. "<br>";

}
