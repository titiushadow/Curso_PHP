<?php

// Operadores lógicos
// Nos permitem fazer comparações entre expressões
// e (&& - and)
//  ou (|| - or)
// ou exclusivo (xor)
// negação (!)

$idade = 25;
$nome = "Mesaque";

//  e (&& - and) 
if(($idade == 25) && ($nome == "Mesaque")): // eu posso usar && ou and, o resultado será o mesmo.
    echo "É verdadeiro";
else:
    echo "É falso";
endif;
echo "<hr>";

//  ou (|| - or)
if(($idade == 18) || ($nome == "Mesaque")): // Retorna o resultado verdadeiro se pelo menos um expressao for vdd. 
    echo "É verdadeiro";
else:
    echo "É falso";
endif;
echo "<hr>";

// ou exclusivo (xor)
if(($idade == 25) xor ($nome == "Mesaque")): // Retorna verdadeiro quando apenas 1 expressão for verdadeiro, se as 2 for verdaderio ele retorna falso
    echo "É verdadeiro";
else:
    echo "É falso";
endif;
echo "<hr>";

// negação (!)
if(!($idade == 25) and !($nome == "Mesaque")): // Inverte o estado logico da expressão, se for 1 fica 0, se for 0 fica 1
    echo "É verdadeiro";
else:
    echo "É falso";
endif;
echo "<hr>";
?>