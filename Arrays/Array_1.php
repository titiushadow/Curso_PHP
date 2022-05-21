<?php
// Primeira aula sobre Arrays.

$carros = array(1=>"BMW",2=>"VELOSTER",3=>"HILUX");
$carros[] = "Amarok";
$carros[10] = "Civic";
echo $carros[10]; // para exibir um array usamos print_r
echo "<br>";

$motos = array();
$motos[] =  "Yamaha";
$motos[] = "Honda";
$motos[5] = "Suzuki";
echo $motos[5];
echo "<br>";
echo "<hr>";

$clientes = ["Mesaque", "Victor Soles", "Luiz Henrique"];
print_r($clientes);
echo "<hr>";
?>