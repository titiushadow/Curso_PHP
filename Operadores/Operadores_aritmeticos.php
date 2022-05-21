<?php

/*
* Operadores Aritmeticos
*
* São usados com valores numéricos para executar operações
* aritméticas comuns, como + , - , * , / etc.

* Adição + 
* Subtração - 
* Multiplicação *
* Divisão /
* Módulo %
* Exponenciação **
*/

// Adição
echo "Adição ", 10 + 10;
echo "<hr>";

// Subtração
echo "Subtração ", 10 - 5;
echo "<hr>";

// Multiplicação
echo "Multiplicação ", 3 * 5;
echo "<hr>";

// Divisão
echo "Divisão ", 15 / 3;
echo "<hr>";

// Módulo
echo "Módulo ", 15 % 3;
echo "<hr>";

// Exponenciação
echo "Exponenciação ", 3 ** 5;
echo "<hr>";

// Trabalhando com variaveis

// Adição
$a = 10;
$b = 20;
$c = 30;
$d = 5;

$adicao  = $a + $b + $c + $d;
echo "$adicao";
echo "<hr>";

// Subtração
$a = 10;
$b = 5;

$subtracao = $a - $b;
echo "$subtracao";
echo "<hr>";

// Multiplicação
$a = 10;
$b = 10;

$multiplicacao = $a * $b;
echo "$multiplicacao";
echo "<hr>";

// Divisão
$a = 15;
$b = 3;

$divisao = $a / $b;
echo "$divisao";
echo "<br>";

// Módulo
echo "Modulo:";
echo "<br>";

$modulo = $a % $b;
echo "$modulo";
echo "<br>";

echo "Exponenciação:";
echo "<br>";
$expo = $a ** $b;
echo "$expo";
echo "<hr>";

echo (5 + 7 + 9 + 8) / 4;

?>