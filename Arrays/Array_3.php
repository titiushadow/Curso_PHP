<?php
// Terceira aula sobre Array.

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
echo "<hr>";

// Arrays associativos
$pessoa = array("nome"=> "Mesaque", "idade"=> 23, "altura"=>1.89);
$pessoa["cidade"] = "Guararapes";

foreach($pessoa as $indice => $valor) {
    echo $indice.":".$valor."<br>";
}
echo "<hr>";

// Arrays multidimensionais
$times = array(
    "cariocas"=> array("campeao"=>"vasco","vice"=>"flamengo","terceiro"=>"botafogo"),
    "paulistas"=> array("santos", "sao paulo", "palmeiras"),
    "baianos" => array("bahia", "vitoria", "itabuna")
);
echo $times["paulistas"][1];
echo "<br>";

foreach($times["cariocas"] as $indice => $valor) {
    echo $indice.":".$valor."<br>";
}

?>