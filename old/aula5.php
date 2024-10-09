<?php
 /*
  Recriar o exercicio da tabuada (aula4) com os laços 
  while e o - while  
 */
echo "<strong>Tabuadas! <br><br></strong>";

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

echo "<strong>Numeros Pares! <br><br></strong>";

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

echo "<strong>Soma Dos Numeros de 0 à 100<br><br></strong>";

$i2 = 1;
$soma = 0;

while ($i2 <=100) {
    $soma += $i2;
    echo "$soma + $i2 <br>";
    $i2++;
}   
echo "<strong>Resultado de 1 até 100: $soma</strong>";

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
