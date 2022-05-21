<?php
// Escopo global
$nome = "Mesaque";
$a = 1;
$b = 3;
$c = 5;

function exibeNome() {
    global $nome;
    echo $nome;
}

exibeNome();
echo "<hr>";

/////////////////////

function exibeCidade() {
    global $cidade;
    $cidade = "São Paulo";
}

exibeCidade();
echo $cidade;
echo "<hr>";

/////////////////////

function soma() {
   echo $GLOBALS['a'] +  $GLOBALS['b'] +  $GLOBALS['c'];
}

soma();

?>