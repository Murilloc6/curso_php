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


echo "<strong>Aula 8 - Tema </strong>";
echo "<br> <br>";


/*                           TEMA AULA 8

    Identificar o tipo de triangulos conforme os dados passados pelo usuario.

    Sendo tres medidas: $lado1, $lado2, $lado3.
    Com estas medidas efetuar o calculo e informar ao usuario qual o tipo 
    de triangulo que é formado pelas medidas que ele passou.

    Triangulos a considerar: Equilatero, Isoceles ou Escalenos 
*/

$lado1 = 0;
$lado2 = 10;
$lado3 = 10;


if ($lado1 == $lado2 && $lado1 == $lado3){
    echo "Todos os lados são iguais, consequentemente o triângulo é classificado como Equiláteros!";

} elseif ($lado1 != $lado2 && $lado1 != $lado3 && $lado2 != $lado3){
    echo "Nem todos os lados são iguais, consequentemente o triângulo é classificado como Escalenos!";    

} elseif (($lado1 == $lado2 && $lado1 != $lado3) ||
          ($lado2 == $lado3 && $lado2 != $lado1) ||
          ($lado3 == $lado1 && $lado3 != $lado2)
          ){
             echo "Possue apenas 2 lados iguais, consequentemente não é classificado como nenhum tipo de triângulo!";    
}
