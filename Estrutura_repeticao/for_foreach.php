<?php

// for significa (para)
for ($contador = 0; $contador <= 10; $contador++):
    echo "O contador é $contador <br>";
endfor;
echo "<hr>";

// tabuada
for ($contador = 0; $contador <= 10; $contador++):
    echo "6 x $contador = ". ($contador*6). "<br>";
endfor;
echo "<hr>";

//foreach é usado para percorrer arrays, foreach significa para cada.

$cores = array("Verde", "Vermelho", "Amarelo", "Branco");

foreach($cores as $indice => $valor):
    echo $indice."-".$valor. "<br>";
endforeach;
?>