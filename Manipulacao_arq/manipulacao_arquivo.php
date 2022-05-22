<?php
// Manipulação de Arquivos

// fopen()
// fclose()
// fwrite()
// !feof()
// fgets()
// filesize()

// fopen()
$arquivo = 'arquivo.txt';
$conteudo = "Conteudo testado\r\n";

$tamanhoArquivo = filesize($arquivo);
$arquivoAberto = fopen($arquivo, 'r');

while(!feof($arquivoAberto)):
    $linha = fgets($arquivoAberto, $tamanhoArquivo );
    echo $linha;
endwhile;

fclose($arquivoAberto);


?>