<?php

$vetor = array();
 $vetorPar = [];
 $vetorImpar = [];
// $i = 0, 1, 2, 3, 4
// $tamanho = count($vetor);

for ($i =1; $i <= 100; $i++)

// Valida se é par - Pois Divide Por 2 
    if ( $i % 2 == 0){
        $somaDosPares += $i;
        //$vetorPar = array_push($vetorPar, $i);
        $vetorPar [] = $i;
    } else {
        $somaDosImpares += $i;
       // $vetorImpar = array_push ($vetorImpar, $i++);
        $vetorImpar [] = $i; 
    }

    echo "<strong> Impares: </strong> <br>";
for ($i1 =0; $i1 <= count($vetorImpar); $i1++){
    echo $vetorImpar [$i1] . ",  "; // 1, 3, 5, 7 ...
    }
echo "<br> <br>";

echo "<strong> Pares: </strong> <br>";
    for ($i2 =0; $i2 <= count ($vetorPar); $i2++){
        echo $vetorPar [$i2] . ", "; // 2, 4, 6, 8 ...
    }

    // Arrays de exemplo
$vetorPar = [2, 4, 6, 8, 10];  // Exemplo de array de números pares
$vetorImpar = [1, 3, 5, 7, 9];  // Exemplo de array de números ímpares

// Ordenar os números pares em ordem decrescente
$tamanhoPar = count($vetorPar);
$maxIndicePar = $tamanhoPar - 1;

for ($i = 0; $i < $maxIndicePar; $i++) {
    $maxIndicePar_J = $tamanhoPar - $i - 1;
    for ($j = 0; $j < $maxIndicePar_J; $j++) {
        if ($vetorPar[$j] < $vetorPar[$j + 1]) {
            // Troca os elementos para ordenar corretamente
            $temp = $vetorPar[$j];
            $vetorPar[$j] = $vetorPar[$j + 1];
            $vetorPar[$j + 1] = $temp;
        }
    }
}

