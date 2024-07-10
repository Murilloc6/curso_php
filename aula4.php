<?php

/* Utilizar o laço de repetição FOR
para criar a tabuada do numero informado pelo usuario.
Ex.: Usuario informou o numero 4, fazer a tabuada do 4.
usuario informou o 9, fazer a tabuada do 9 e assim por diante.
*/

$numero = 5; // Numero informado pelo usuario.
$resultado = "";

for ( $i = 1; $i <= 9 ; $i++ )
{
    $resultado = $numero * $i;
    echo "$numero x $i = $resultado" . "<br>";

}
