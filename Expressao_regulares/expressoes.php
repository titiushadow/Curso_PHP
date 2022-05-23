<?php
// Expressões regulares
// Define um padrão a ser usado para procurar ou
// substituir palavras ou grupo de palavras.
// ^ inicio da expressão, $ final da expressão - /i -
// case sensitive
// [] conjunto de caracteres
// {} ocorrencias 
// /^ [a-z]

// Expressões

$string = "13/9/2018";
$padrao = "/^[0-9]{2\/[0-9]{2}\/[0-9]{4}$/";

if(preg_match($padrao, $string)):
    echo "Valido";
    echo "<hr>";
    echo $string;
else:
    echo "Inválido";
    echo "<hr>";
endif;
?>