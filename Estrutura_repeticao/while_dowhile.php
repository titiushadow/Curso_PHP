<?php

// While e Do while
// While significa enquanto.

$contador = 1;
while($contador <= 10):
    echo "Contador é $contador <br>";
    $contador++;
endwhile;

echo "<hr>";

$contador = 1;

do {

    echo "Contador é $contador <br>";
    $contador++;
} while ($contador <= 20);

?>