<?php

// Funções para Números

// number_format
// round
// ceil
// floor
// rand

// number_format = formatação dos numeros casas decimais...
$db = 1234.80;
$preco = number_format($db, 2, ",", ".");
echo "O valor do produto é $preco ";
echo "<hr>";

// round =  deixa o valor aredondado, 3,9 = 4
echo"Round: ";
echo round(3.9);
echo"<hr>";

// ceil só aredonda pra cima
echo "Ceil: ";
echo ceil(5.1);
echo"<hr>";

// floor faz o inverso ele aredonda para baixo
echo "Floor: ";
echo floor(8.90);
echo "<hr>";

// Rand vai mostrar um numero entre 1 e 20, é interessante para sorteios
echo rand(1,20);
echo "<hr>";
?>