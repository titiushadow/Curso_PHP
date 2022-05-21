<?php
// Tipo de dados Escalares 

// String
$nome = "Hello World";
var_dump($nome);

if(is_string($nome)):
    echo "É uma string";
else:
    echo "Não é uma string";
endif;
echo "<hr>";


// Inteiro
$idade = 18;
var_dump($idade);

if(is_int($idade)):
    echo "É um inteiro";
else:
    echo "Não é um inteiro";
endif;
echo "<hr>";


// Float
$altura = 1.97;
var_dump($altura);

if(is_float($altura)):
    echo "é float";
else:
    echo "não é float";
endif;
echo "<hr>";


// Boolean
$admin = true;
var_dump($admin);

if(is_bool($admin)):
    echo "é bool";
else:
    echo "não é bool";
endif;
echo "<hr>";


// Tipos de dados Compostos

$carros = array("Gol", "Corsa", "Camaro amarelo",12,18.8,true);
var_dump($carros);

if(is_array($carros)):
    echo "É um array";
else:
    echo "Não é um array";
endif;
echo "<hr>";


// Object
class Cliente {
    public $nome;
    public function atribuirNome($nome) {
        $this->$nome = $nome;
    }
}

$cliente = new Cliente();
$cliente->atribuirNome("Mesaque");
var_dump($cliente);

if(is_object($cliente)):
    echo "É um objeto";
else:
    echo "Não é um objeto";
endif;
echo "<hr>";

// Tipos de dados Especiais

// NULL
$cidade = NULL;
var_dump($cidade);

?>