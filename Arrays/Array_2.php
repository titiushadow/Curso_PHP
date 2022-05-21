<?php
// Segunda aula sobre Arrays.

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

// Count
echo count($carros);
echo "<br>";

echo count($motos);
echo "<br>";

$totalClientes = count($clientes);
echo $totalClientes;
echo "<hr>";

// Foreach
foreach($carros as $valor) {
    echo $valor."<br>";
}
echo "<hr>";

foreach($motos as $valor) {
    echo $valor."<br>";
}
echo "<hr>";

foreach($clientes as $valor) {
    echo $valor. "<br>";
}
?>