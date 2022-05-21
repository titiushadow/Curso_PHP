<?php
// Constantes

define("NOME", "Mesaque de Souza");
define("IDADE", "18");
define("ALTURA", 1.96);

define("TIMES", ['sao paulo', 'palmeiras', 'vasco']);

    echo 'Meu nome é '.NOME.' e minha idade é '.IDADE.' e minha altura é de '.ALTURA;
    echo "<hr>";
    echo TIMES[0];
    var_dump(TIMES);
    echo"<hr>";

function exibeNome() {
    echo NOME;
}

exibeNome();

?>