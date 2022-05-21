<?php

/*
* Condicionais
* Switch
* Case
*/

$cor = "amarelo";

switch($cor):

    case "vermelho":
        echo "Sua cor preferida é vermelho";
    break;

    case "verde":
     echo "Sua cor preferida é verde";
    break;

    case "azul":
        echo "Sua cor preferida é azul";
    break;

    default:
    echo "Sua cor preferida não é vermelho, verde ou azul";

endswitch;

?>