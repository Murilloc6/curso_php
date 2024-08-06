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

    echo "<strong> <br><br>Pares: </strong> <br><br><br>";
    for ($i2 = count ($vetorPar); $i2 <= 0; $i2--){
        echo $vetorPar [$i2] . ", "; // 2, 4, 6, 8 ...
    }

    echo "<br> <br>";

    echo "<strong> Pares: </strong> <br>";
    for ($i1 = 0; $i1 <=count(vetorPar); $i1 >= 100 $i1--){
        echo $vetorPar [$i1] . ", ";        // 1, 3, 5, 7 ...
        }
 
        echo "<br> <br>";

        echo "<strong> Impares: </strong> <br>";
        for ($i3 = 0; $i3 <=count(vetorImpar); $i3 >= 100 $i3--){
            echo $vetorImpar [$i1] . ", ";
            }


