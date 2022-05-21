<?php

// Criando funções PHP

function exibirNome($nome){
    echo "meu nome é $nome";
}
exibirNome("Mesaque");
echo "<hr>";

function exibirIdade($idade){
    echo "Minha idade é $idade";
}
exibirIdade(18);
echo "<hr>";

function calcularMedia($nome, $n1, $n2, $n3, $n4){
    $media = ($n1 + $n2 + $n3 + $n4) / 4;
    if($media >= 7):
        echo "$nome foi aprovado com a média $media. <br>";
    else:
        echo "$nome foi reprovado <br>";
    endif;
}

calcularMedia("Mesaque", 10, 7, 9, 10);
calcularMedia("Victor", 9, 7, 9, 10);


?>