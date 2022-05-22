<?php
// Datas

// Exibindo a data
echo date('d/m/y');
echo "<hr>";

// exibindo o dia
echo date('l');
echo "<hr>";

// Exibindo a data com horas
echo date('d/m/y H:i:s');
echo "<hr>";

// Datas em outras regiões 
date_default_timezone_set('America/Sao_Paulo');
echo date('d/m/y H:i:s');
echo "<hr>";

// Time
echo time();
echo "<hr>";

// MKTIME
$data_pagamento = mktime(15, 30, 00, 02, 15, 2023);
echo date('d/m - h:i', $data_pagamento);
echo "<hr>";

// STRTOTIME
$data = '2019-04-10 13:30:00';
$data = strtotime($data);

echo date('d/m/Y', $data);

?>