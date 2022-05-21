<?php

// Funções para Strings
// str_repeat
// strlen
// str_replace
// strpos

// str_repeat primeiro parametro passamos a palavra e no segundo parametro quantas vezes ela vai aparecer.
$string = str_repeat("Sucesso!", 5);
echo $string;
echo "<hr>";

// strlen mostra o numero de caracteres da string
$mensagem = "Hello World";
echo strlen($mensagem);
echo "<hr>";

//str_replace serve para substituir uma palavra em um texto.
$texto = "A casa é azul";
$novoTexto = str_replace("azul", "amarela", $texto);
echo $novoTexto;
echo "<hr>";

// strpos que retorna a posição da palavra no texto
$texto = "A casa é azul";
$novoTexto = str_replace("azul", "amarela", $texto);
echo $novoTexto;
echo "<hr>";

echo strpos($texto, "azul" );


?>