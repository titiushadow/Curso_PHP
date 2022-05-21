<?php

// Para testar o codigo sempre comentar os de cima para não dar conflito.
// Operadores de atribuição
$a = 10;
$b = 5;

$a = $a + $b;

echo $a;
echo "<hr>";

$a = 10;
$b = 5;

// para adição
$a += $b; // mesma coisa do que $a = $a + $b;
echo $a;
echo "<hr>";

// para subtração
$a -= $b; // mesma coisa do que $a = $a - $b;
echo $a;
echo "<hr>";

// para Divisão
$a /= $b; // mesma coisa do que  $a = $a / $b;
echo $a;
echo "<hr>";

// Codigo de multiplicação não funciona porque esta dando conflito com os de cima.
// para multiplicação
$a *= $b; // mesma coisa do que $a = $a * $b;
echo $a;
echo "<hr>";


?>