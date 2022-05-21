<?php
// Aula 1 sobre as Funções de Arrays

// is_array($array)
$nomes = array("Mesaque", "joão", "Meseikers");
var_dump(is_array($nomes));

if(is_array($nomes)):
    echo "é um array";
else:
    echo "não é um array";
endif;
echo "<hr>";

// in_array($valor)
$nomes = array("Mesaque", "joão", "Meseikers");
echo in_array("Meseikers", $nomes);

if(in_array("Meseikers", $nomes)):
    echo "Existe no array";
else:
    echo "Não existe no array";
endif;
echo "<hr>";

// array_keys($array)
$nomes = array("Irmão"=>"Mesaque","Primo"=>"joão","Estranho"=>"Meseikers");

$keys = array_keys($nomes);
print_r($keys);
echo "<hr>";


// Aula 2 sobre as funções de Arrays

// array_values($array)
$nomes = array("Irmão"=>"Mesaque","Primo"=>"joão","Estranho"=>"Meseikers");

$values = array_values($nomes);
print_r($values);
echo "<hr>";

// array_merge ($array1, $array2) = agrega o conteúdo dos dois arrays
$carros = array("Carro", "Uno", "Gol");
$motos = array ("Pop100", "50cc", "cb100");

$veiculos = array_merge($carros, $motos);

print_r($veiculos);
echo "<hr>";

// array_pop($array)
$carros = array("Camaro", "Uno", "Gol");
print_r($carros);
echo "<br>";
echo array_pop($carros);

echo "<br>";
print_r($carros);
echo "<hr>";

// array_shift($array)
$carros = array("Camaro", "Uno", "Gol");
print_r($carros);
echo "<br>";
echo array_shift($carros);

echo "<br>";
print_r($carros);
echo "<hr>";


// Aula 3 sobre as funções de Arrays

// array_unshift($arr, "valor")
$frutas = array("Uva", "Laranja", "Melancia");
print_r($frutas);
array_unshift($frutas, "Manga", "Acerola", "Morango");
echo "<br>";
print_r($frutas);
echo "<hr>";

// array_push($arr, "valor")
$frutas = array("Uva", "Laranja", "Melancia");
print_r($frutas);
array_push($frutas, "Manga", "Acerola", "Morango");
echo "<br>";
print_r($frutas);
echo "<hr>";

// array combine($keys, $values)
$keys = array("Primeiro", "Segundo", "Terceiro");
$values = array("Vasco", "Flamento", "Botafogo");

$times = array_combine($keys, $values);
print_r($times);
echo "<hr>";

// array_sum()
$soma = array(5,6,10,8);
$total = array_sum($soma);
echo $total;
echo "<hr>";


// Aula 4 sobre as funções de Arrays

//explode = transforma string em array
$data = "21/05/2022";
$novaData = explode('/', $data);
print_r($novaData);
echo "<hr>";

$frase = "Meu nome não é mesaque";

$array = explode(" ", $frase);
print_r($array);

//implode = transforma o array em string
$nomes = array("Mesaque", "Victor Soles", "Luiz Henrique");

$string = implode (",", $nomes);
echo $string;























?>