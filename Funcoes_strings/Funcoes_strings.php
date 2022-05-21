<?php
// Funções para Strings

// strtoupper
// strtolower
// substr
// str_pad
// str_repeat
// strlen
// str_replace
// strpos

// strtoupper passa a string para maiuscula.
$nome = "mesaque de souza";
$novoNome = strtoupper($nome);
echo $novoNome;
echo "<hr>";

// strtolower passa a string para minuscula.
$nome = "MESAQUE DE SOUZA";
$novoNome = strtolower($nome);
echo $novoNome;
echo "<hr>";

// substr retorna uma parte da string
$mensagem = "Hello World";
echo substr($mensagem, 5);
echo "<hr>";

// str_pad essa função complementa outra string
$objeto = "Teclado";
$novoObjeto = str_pad($objeto, 7);
echo $novoObjeto;
?>