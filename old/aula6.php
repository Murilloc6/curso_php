<?php

echo "<strong>Exercício Usando FOR!<br><br></strong>";
$somadospares = 0;
$somadosimpares = 0;

for ( $i3 = 1; $i3 <= 100; $i3++){
    // Armazena na variavel $par
    // o resultado da sobra da divisão por 2
    $par = $i3 % 2;

    if ($par == 0){
    //echo "O número $i3 é Par!<br>";
    $somadospares = $somadospares + $i3;
}else{
      //echo "O número $i3 é Impar! <br>";
      $somadosimpares += $i3;
    }
}
    echo "Soma Dos Pares = $somadospares <br>";
    echo "Soma Dos Impares = $somadosimpares <br>";

    $i = 1;
    $par = 0;
    $impar = 0;

echo "<br><br><br>";
echo "<strong>Mesmo Exercício Usando WHILE!<br><br></strong>";
    while ($i <= 100){
        if ($i % 2 == 0){
            $par += $i;
        }else{
            $impar += $i;
        }
        $i++;

    }

        echo "Soma Dos Pares = $par <br>";
        echo "Soma Dos Impares = $impar <br>";

        echo "<br><br><br>";

echo "<strong>Tabuada Chave</strong>";
echo "<br><br>";
$numero = 1;

    for ($i2 = 0; $i2 <= 10; $i2++){
        echo "Numero: $numero x $i2 = " .$numero*$i2. "<br>";
    }

    echo "<br><br><br>";
    echo "<strong>Tabuada Multiplicação - Dinâmica <br></strong>";

for ($tabuada=1; $tabuada <= 10; $tabuada++){
echo "<br>Tabuada do $tabuada<br>";

    // Inicio o laço interno para multiplicar a tabuada por 0-10
    for ($n=0; $n <= 10; $n++){
        echo "$tabuada x $n = " . $tabuada*$n . "<br>";
    
    }
}

/* Calculo de Horas Vs Dias
8h por dia trabalhada, contrato de 100h
 */


