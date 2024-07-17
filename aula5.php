<?php
 /*
  Recriar o exercicio da tabuada (aula4) com os laços 
  while e o - while  
 */
echo "Tabuadas! <br><br>";

  $i = 0;
  $numero = 7;

 while ($i <= 10) {

     $resultado = $numero * $i;
     echo "$numero x $i = $resultado <br>";
     $i++;
 }
// exercicio de cima completo e funcionando.

echo "<br><br><br><br>";

/*
 mostrar os numeros pares de 2 ate 20;
 utilizando os laços WHILE e FOR; 
*/

echo "Numeros Pares! <br><br>";

$i1 = 0;
$numero1 = 0;

while ($i1 <=20) {
    echo "$i1 <br>";
$i1++;
$i1++;
}

// exercicio acima completo e funcionando;

echo "<br><br><br><br>";

/* 
    somar todos os numeros de 0 - 100 
    utilizando o laço de repetição WHILE 
    apos, mostrar o resultado da soma;

    Ex.: 
    0 + 1 = 1
    1 + 2 = 3
    3 + 3 = 6
    6 + 4 = 10

*/

$i2 = 1;
$soma = 0;

while ($i2 <=100) {
    $soma += $i2;
    $i2++;
}   
echo "Resultado de 1 até 100: $soma";

// exercicio acima completo e funcionando;

echo "<br><br><br><br>";


/*
    somar todos os numeros PARES de 1 - 100
    somar todos os numeros IMPARES de 1 - 100
    utilizando o laço repetitiov WHILE 
    apos, mostrar o resultado da soma desses numeros

    Ex.: 
    Soma Pares: 
    Soma Impares:
*/

$i3 = 1;
$soma2 = 0;

while ($i3 <=100) {
    $soma2 + $i3;
    $i3 + $i3 +2;
}
