<?php

// Arrays de exemplo
$vetoralfa = ["A", "B", "C", "D", "E"];  // Exemplo de array de números pares

// Ordenar os números pares em ordem decrescente
$tamanho = count($vetoralfa);
$maxindice = $tamanho - 1;

for ($i = 0; $i < $maxindice; $i++) {
    $maxindice = $tamanho - $i - 1;
    for ($j = 0; $j < $maxindice; $j++) {
        if ($vetoralfa[$j] < $vetoralfa[$j + 1]) {
            // Troca os elementos para ordenar corretamente
            $temp = $vetoralfa[$j];
            $vetoralfa[$j] = $vetoralfa[$j + 1];
            $vetoralfa[$j + 1] = $temp;
        }
    }
}

echo implode(" - " , $vetoralfa);



/*
    Identificar o tipo de triangulos conforme os dados passados pelo usuario.

    Sendo tres medidas: $lado1, $lado2, $lado3.

    Com estas medidas efetuar o calculo e informar ao usuario qual o tipo 
    de triangulo que é formado pelas medidas que ele passou.

    Triangulos a considerar: Equilatero, Isoceles ou Escalenos 
*/

$lado1 = 10;
$lado2 = 10;
$lado3 = 10;

if ($lado1 == $lado2 == $lado3){
echo "Todos os lados são iguais, consequentemente o triângulo é classificado como escaleno!";
    elseif ($lado1 != $lado2);
    echo "Nem todos os lados são iguais, consequentemente o triângulo é classificado como !"

}
