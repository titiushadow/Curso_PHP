<?php
// Operadores de comparação
// ==
// !=
// ===
// !===
// <>
// <
// >
// <=
// >=
// <=>


// Operador de igualdade
if(10 == "10"): // se eu colocar 10 do tipo int e 10 do tipo string, vai continuar dando Positivo!
    echo "Positivo!";
else:
    echo "Negativo!";
endif;
echo "<hr>";

// Operador não igual
if(10 != 11):
    echo "Positivo!";
else:
    echo "Negativo!";
endif;
echo "<hr>";

// Operador de identidade
if(10 === 5 * 2): // verifica se um valor é identico ao outro.
    echo "Positivo!";
else:
    echo "Negativo!";
endif;
echo "<hr>";

// Operador de não identico
if(10 !== 11):
    echo "Positivo!";
else:
    echo "Negativo!";
endif;
echo "<hr>";

// Operador diferente <>
if(10 <> 10):
    echo "Positivo!";
else:
    echo "Negativo!";
endif;
echo "<hr>";

// Menor que <
if(10 < 9):
    echo "Positivo!";
else:
    echo "Negativo!";
endif;
echo "<hr>";

// Maior que >
if(10 > 9):
    echo "Positivo!";
else:
    echo "Negativo!";
endif;
echo "<hr>";

// Maior igual >= 
if(10 >= 11):
    echo "Positivo!";
else:
    echo "Negativo!";
endif;
echo "<hr>";

// Menor igual <=
if(10 <= 9):
    echo "Positivo!";
else:
    echo "Negativo!";
endif;
echo "<hr>";

// Operador SpaceShip <=>, ele só pode retornar 3 valores
var_dump (20 <=> 20); // retorna 0
echo "<hr>";

var_dump (20 <=> 30); // retorna -1
echo "<hr>";

var_dump (10 <=> 30); // retorna -1
echo "<hr>";



?>